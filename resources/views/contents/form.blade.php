

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
              <option value>Select Method</option>
              <option value="1">Internal</option>
              <option value="2">External</option>
        </select>
        <br/>
    </div>
</div>

<div class="form-group" style="display: none"  id="cont-type2" novalidate>
    <label class="col-sm-3 col-lg-2 control-label">Content Method {{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control" id="content_type2" name="content_type2" >
              <option value>Select Method</option>
              <option value="1">Internal</option>
              <option value="2">External</option>
        </select>
        <br/>
    </div>
</div>


<div class="form-group" style="display: none"  id="cont-type3" novalidate>
    <label class="col-sm-3 col-lg-2 control-label">Content Method {{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control" id="content_type3" name="content_type3" >
              <option value>Select Method</option>
              <option value="1">Internal</option>
              <option value="2">External</option>
        </select>
        <br/>
    </div>
</div>

<div class="form-group" style="display: none" id="imgcont-int" novalidate>
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
        </div>
    </div>
</div>


<div class="form-group" style="display: none" id="imagecon-ext" novalidate>
    {!! Form::label('imgpath',\Lang::get('messages.content.image_path').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('imgpath',null,['class'=>'form-control input-lg','placeholder'=>\Lang::get('messages.content.image_path')]) !!}
    </div>
</div> 


<div class="form-group" style="display: none" id="videocont-ext" novalidate>
    {!! Form::label('vidpathext',\Lang::get('messages.content.content-path').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('vidpathext',null,['class'=>'form-control input-lg','placeholder'=>\Lang::get('messages.content.content-path')]) !!}
    </div>
</div> 

<div class="form-group" style="display: none" id="videocont-int" novalidate>
    {!! Form::label('vidpath',\Lang::get('messages.content.content-video'),['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::file('vidpath',["accept"=>"video/*",'class'=>'default']) !!}
    </div>
</div>

<div class="form-group" style="display: none" id="audiocont-ext" novalidate>
    {!! Form::label('audpath',\Lang::get('messages.content.content-path').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('audpath',null,['class'=>'form-control input-lg','placeholder'=>\Lang::get('messages.content.content-path')]) !!}
    </div>
</div> 

<div class="form-group" style="display: none" id="audiocont-int" novalidate>
    {!! Form::label('audpath',\Lang::get('messages.content.content-sound').$required,['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::file('audpath',["accept"=>"audio/*",'class'=>'default']) !!}
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

        $('#type_id').on('change',function(){
            $.get("{{url('fetchtype?servid=')}}"+$(this).val(), function(data, status){
            var fetchedtypes = data;
                    if(fetchedtypes != null)
                    {
                        var typeid = fetchedtypes.id;
                        var typetitle = fetchedtypes.title;
                        if(typetitle == 'Video')
                        {
                            document.getElementById('myField').value = typetitle;
                                $('#audiocont-int').hide('slow') ;
                                $('#audiocont-ext').hide('slow') ;
                                $('#cont-type').show(750);
                                $('#cont-type2').hide('slow') ;
                                $('#cont-type3').hide('slow') ;
                                $('#imagecon-ext').hide('slow') ;
                                $('#imgcont-int').hide('slow') ;
                                $('#content_type').on('change',function(){
                            var choice = $(this).val();
                            console.log(choice);    
                            if(choice == 1)
                            {
                                $('#videocont-int').show(500);
                                $('#videocont-ext').hide('slow') ;
                                $('#imgcont-int').show(500);
                                $('#imagecon-ext').hide('slow') ;
                            }
                        else if(choice == 2)
                            {
                                $('#videocont-int').hide('slow') ;
                                $('#videocont-ext').show(500);
                                $('#imgcont-int').hide('slow') ;
                                $('#imagecon-ext').show(500);
                            }
                                        }); 
                        }
                        else if (typetitle == 'Audio')
                        {
                            document.getElementById('myField').value = typetitle;
                            $('#videocont-ext').hide('slow') ;
                            $('#videocont-int').hide('slow') ;
                            $('#cont-type').hide('slow') ;
                            $('#cont-type2').show(750);
                            $('#imagecon-ext').hide('slow') ;
                            $('#imgcont-int').hide('slow') ;
                            $('#content_type2').on('change',function(){
                            var choice = $(this).val();
                            //console.log(choice);    
                            if(choice == 1)
                            {
                                $('#audiocont-int').show(500);
                                $('#audiocont-ext').hide('slow') ;
                            }
                            else if(choice == 2)
                            {
                                $('#audiocont-ext').show(500);
                                $('#audiocont-int').hide('slow') ;
                            }
                        }); 
                               
                        }
                        else if (typetitle == 'Image')
                        {
                            document.getElementById('myField').value = typetitle;
                            $('#videocont-ext').hide('slow') ;
                            $('#videocont-int').hide('slow') ;
                            $('#imagecon-ext').hide('slow') ;
                            $('#imgcont-int').hide('slow') ;
                            $('#cont-type').hide('slow') ;
                            $('#cont-type2').hide('slow') ;
                            $('#cont-type3').show(750);
                            $('#audiocont-int').hide('slow') ;
                            $('#audiocont-ext').hide('slow') ;
                            $('#content_type3').on('change',function(){
                            var choice = $(this).val();
                            console.log(choice);    
                            if(choice == 1)
                            {
                                $('#imgcont-int').show(500);
                                $('#imagecon-ext').hide('slow') ;
                            }
                            else if(choice == 2)
                            {
                                $('#imagecon-ext').show(500);
                                $('#imgcont-int').hide('slow') ;
                            }
                            }); 
                        }

                    }
                    else
                    { 
                        console.log("No Data");

                    }
            });
        });
        
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
               if(choice == 1)
                {
                    document.getElementById('content_typez').value = choice;
                    $('#cont-type').show(750);
                    $("#content_type").val("1").change();
                    document.getElementById("content_type").disabled = true;
                    $('#videocont-int').show(500);
                    $('#imgcont-int').show(500);
                    $('#img-thumbnail').attr("src",'{{url()}}/'+upcontent.prev_img);
                }
                else if(choice == 2)
                {
                     document.getElementById('content_typez').value = choice;
                    $('#cont-type').show(750);
                    $("#content_type").val("2").change();
                    document.getElementById("content_type").disabled = true;
                    $('#videocont-ext').show(500);
                    $('#imagecon-ext').show(500);
                    document.getElementById("imgpath").value = upcontent.prev_img;
                    document.getElementById("vidpathext").value = upcontent.path;
                    
                }
          }
          else if (typetitle == 'Audio')
          {
              document.getElementById('myField').value = typetitle;
              var choice = upcontent.content_type;
              if(choice == 1)
              {
                    document.getElementById('content_typez').value = choice;
                    $('#cont-type2').show(750);
                    $("#content_type2").val("1").change();
                    document.getElementById("content_type2").disabled = true;
                    $('#audiocont-int').show(500);
                    
                  
              }
              else if(choice == 2)
              {
                    document.getElementById('content_typez').value = choice;
                    $('#cont-type2').show(750);
                    $("#content_type2").val("2").change();
                    document.getElementById("content_type2").disabled = true;
                    $('#audiocont-ext').show(500);
                    document.getElementById("audpath").value = upcontent.path;
                    
              }
          }
          else if (typetitle == 'Image')
          {
              document.getElementById('myField').value = typetitle;
              var choice = upcontent.content_type;
              if(choice == 1)
              {
                 document.getElementById('content_typez').value = choice;
                 $('#cont-type3').show(750);
                 $("#content_type3").val("1").change();
                 document.getElementById("content_type3").disabled = true;  
                 $('#imgcont-int').show(500);
                 
                 
              }
              else if(choice == 2)
              {
                   document.getElementById('content_typez').value = choice;
                 $('#cont-type3').show(750);
                 $("#content_type3").val("2").change();
                 document.getElementById("content_type3").disabled = true;
                 $('#imagecon-ext').show(500);
                 document.getElementById("imgpath").value = upcontent.path;
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