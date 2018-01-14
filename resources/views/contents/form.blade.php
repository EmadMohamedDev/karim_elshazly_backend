@if(Session::has('msg'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Heads Up!</strong> {!!Session::get('msg')!!}
        </div>
@endif



<div class="form-group">
    {!! Form::label('title',\Lang::get('messages.content.content-title').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('title',null,['class'=>'form-control input-lg','required'=>'required','placeholder'=>\Lang::get('messages.content.content-title')]) !!}
    </div>
</div>


<div class="form-group"  id="con-type" novalidate>
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.type.type'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control" name="type_id" id="type_id" required>
            <option>Select Type</option>
            @foreach ($types as $key => $value)
                <option value="{{ $key }}" @if ($content !=null && $content->type_id == $key) selected @endif>{{ $value }}</option>
            @endforeach
        </select>
        <br/>
    </div>
</div>


<div class="form-group" style="display: none"  id="cont-type" novalidate>
    <label class="col-sm-3 col-lg-2 control-label">Content Method {{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control" id="content_type" name="content_type" >
              <option value >Select Method</option>
              <option value="1">Internal</option>
              <option value="2">External</option>
        </select>
        <br/>
    </div>
</div>


<div class="form-group" style="display: none" id="img_form" novalidate>
    @if($content == null)
        {!! Form::label('path',\Lang::get('messages.content.content-img').$required,['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    @else
        {!! Form::label('path',\Lang::get('messages.content.content-img'),['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    @endif

    <div class="col-sm-9 col-lg-10 controls">
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                @if($content == null)
                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+file" alt="" />
                @else
                    @if(file_exists($content->path))
                        <img class="img-thumbnail" id="img-thumbnail" src="{{url($content->path)}}" alt="" />
                    @else
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+file" alt="" />
                    @endif
                @endif

            </div>
            <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
            <div>
                                    <span class="btn btn-default btn-file"><span class="fileupload-new">Upload</span>
                                        <span class="fileupload-exists">Change</span>
                                        @if($content == null)
                                            {!! Form::file('path',["accept"=>"image/*"]) !!}
                                        @else
                                            {!! Form::file('path') !!}
                                        @endif
                                        </span>
                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
            </div>
            <span class='label label-important'>NOTE!</span>
            <span>Only extension supported jpg, png, and jpeg</span>
        </div>
    </div>
</div>


<div class="form-group" style="display: none" id="url-ext" novalidate>
    {!! Form::label('exturl1',\Lang::get('messages.content.image_path').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('exturl1',null,['class'=>'form-control input-lg','placeholder'=>\Lang::get('messages.content.image_path')]) !!}
    </div>
</div> 

<div class="form-group" style="display: none" id="url-ext2" novalidate>
    {!! Form::label('exturl2',\Lang::get('messages.content.file_path').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('exturl2',null,['class'=>'form-control input-lg','placeholder'=>\Lang::get('messages.content.file_path')]) !!}
    </div>
</div> 


<div class="form-group" style="display: none" id="file_int" novalidate>
    {!! Form::label('filepath',\Lang::get('messages.content.content-sound').$required,['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::file('filepath',['class'=>'default']) !!}
    </div>
</div>

<input type="hidden" name="myField" id="myField" value="" />
<input type="hidden" name="content_typez" id="content_typez" value="" />

<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        {!! Form::submit($buttonAction,['class'=>'btn btn-primary']) !!}
    </div>
</div>




@section('script')
    <script>
        $('#content').addClass('active');
        $('#content-create').addClass('active');

        //This Block Used For Create Function
        // Choice == 1 ====> Means Its Internal Content
        //  Choice == 2 ====> Means Its External Content
        var fetchedtypes = "";
        var choice = 0 ;
        $('#type_id').on('change',function(){
            $.get("{{url('fetchtype?servid=')}}"+$(this).val(), function(data, status){
                fetchedtypes = data;
                if(fetchedtypes != "")
                {
                    $('#content_type').prop('selectedIndex',0);
                    $('#file_int').hide('slow');
                    $('#url-ext').hide('slow') ;
                    $('#img_form').hide('slow') ;
                    $('#url-ext2').hide('slow') ;
                    $('#cont-type').show(500);    
                }
                else
                {
                    $('#cont-type').hide();
                }
            });   
        });
        
        $('#content_type').on('change',function(){
          if(fetchedtypes != "")
          {
              
                var typeid = fetchedtypes.id;
                var typetitle = fetchedtypes.title;
                document.getElementById('myField').value = typetitle;
                if(typetitle == 'Video') //Video Section
                {
                    if($(this).val() == 1)
                    {
                    $("#filepath").attr("accept","video/*");
                    $('#file_int').show(500);
                    $('#url-ext').hide('slow') ;
                    $('#img_form').show(500);
                    $('#url-ext2').hide('slow') ;
                    }
                    else if($(this).val() == 2)
                    {
                    $('#file_int').hide('slow') ;
                    $('#url-ext').show(500);
                    $('#img_form').hide('slow') ;
                    $('#url-ext2').show(500);
                    }
                                  
             }
             else if (typetitle == 'Audio') //Audio Section
             {
                    if($(this).val() == 1)
                    {
                         $("#filepath").attr("accept","audio/*");
                         $('#file_int').show(500);
                         $('#url-ext2').hide();

                    }
                    else if($(this).val() == 2)
                    {
                        $('#url-ext2').show(500);
                        $('#file_int').hide();
                    }
            }
            else if (typetitle == 'Image') //Image Section
            {
                    if($(this).val() == 1)
                    {
                        $('#url-ext2').hide('slow') ;
                        $('#img_form').show(500);
                    }
                    else if ($(this).val() == 2)
                    {
                        $('#img_form').hide('slow') ;
                        $('#url-ext2').show(500);
                    }
            }
          }
        });     
        //End Of Creation Block            
        
        
        //This Section is for Update Function
        var upcontent = <?php  echo json_encode($content); ?>;
        var typeserv = <?php  echo json_encode($types); ?>;
        if(upcontent.type_id != null)
        {
          document.getElementById("type_id").disabled = true;  
          for (x in typeserv)
          {
            if (typeserv.hasOwnProperty(x))
            {
                    if(upcontent.type_id == x)
                    {
                        var typetitle = typeserv[x] ;
                    }
            }
          }
          
          if(typetitle == 'Video')
          {
               document.getElementById('myField').value = typetitle;
               var choice = upcontent.content_type;
               document.getElementById('content_typez').value = choice;
               $('#cont-type').show(750);
              $("#filepath").attr("accept","video/*");
               if(choice == 1)
                {
                    $('#content_type').prop('selectedIndex',"1");
                    document.getElementById("content_type").disabled = true;
                    $('#file_int').show(500);
                    $('#img_form').show(500);
                    $('#img-thumbnail').attr("src",'{{url()}}/'+upcontent.prev_img);
                }
                else if(choice == 2)
                {
                    $('#content_type').prop('selectedIndex',"2");
                    document.getElementById("content_type").disabled = true;
                    $('#url-ext').show(500);
                    $('#url-ext2').show(500);
                    document.getElementById("exturl1").value = upcontent.prev_img ;
                    document.getElementById("exturl2").value = upcontent.path;
                }
          }
          else if (typetitle == 'Audio')
          {
              document.getElementById('myField').value = typetitle;
              var choice = upcontent.content_type;
              document.getElementById('content_typez').value = choice;
              $('#cont-type').show(750);
              $("#filepath").attr("accept","audio/*");
              if(choice == 1)
              {
                    $('#content_type').prop('selectedIndex',"1");
                    document.getElementById("content_type").disabled = true;
                    $('#file_int').show(500);
                    
                  
              }
              else if(choice == 2)
              {
                    $('#content_type').prop('selectedIndex',"2");
                    document.getElementById("content_type").disabled = true;
                    $('#url-ext2').show(500);
                    document.getElementById("exturl2").value = upcontent.path;
                    
              }
          }
          else if (typetitle == 'Image')
          {
              document.getElementById('myField').value = typetitle;
              var choice = upcontent.content_type;
              document.getElementById('content_typez').value = choice;
              $('#cont-type').show(750);
              if(choice == 1)
              {
                 $('#content_type').prop('selectedIndex',"1");
                 document.getElementById("content_type").disabled = true;
                 $('#img_form').show(500);
                 $('#img-thumbnail').attr("src",'{{url()}}/'+upcontent.prev_img);

              }
              else if(choice == 2)
              { 
                 $('#content_type').prop('selectedIndex',"2");
                 document.getElementById("content_type").disabled = true;
                 $('#url-ext').show(500);
                 document.getElementById("exturl1").value = upcontent.path;
              }
          }
        }

    </script>
@stop
        
@section('script')
    <script>
        $('#content').addClass('active');
        $('#content-create').addClass('active');
    </script>
@stop