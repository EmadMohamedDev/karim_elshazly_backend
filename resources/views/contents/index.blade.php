@extends('template')
@section('page_title')
	Contents
@stop
@section('content')

<div class="form-group">
    <div class="col-sm-9 col-lg-12 controls">
        <button  class="btn btn-primary" style="float:right; margin-left:10px;"  onclick="ShowSearch()">Search Content</button> 
        </div>
    </div>
<br>
<br>


<div class="row" id="searchdiv3" style="display:none;">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Search Contents</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="{{url('SearchContent')}}" method="post">  
                     {{ csrf_field() }}    
                    <div class="form-group">
                     <label for="provider" class="col-sm-3 col-lg-2 control-label">Content Title * </label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control input-lg" placeholder="Content Title" name="title" id="content_title" name="content_title" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Content Date </label>
                    <div class="col-sm-5 col-lg-3 controls">
                        <div class="input-group date" data-date="12-02-2012" data-date-format="YYYY-MM-DD" data-date-viewmode="years">
                            <label class="input-group-addon" for="date_picker">
                                <i class="fa fa-calendar"></i>
                            </label>
                            <input class="form-control date-picker" size="16" name="date_picker" type="text" id="date_picker"> 
                        </div>
                    </div>
                    </div>
                    
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
               
                
		            </form>
                </div>
                
            </div>
        </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Preview Media</h4>
        <button type="button" class="close" data-dismiss="modal"  onclick="pause_all()">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p id="modal-body-id">

        </p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="pause_all()">Close</button>
      </div>

    </div>
  </div>
</div>



<div class="row">
		<div class="col-md-12">
			<div class="box box-black">
				<div class="box-title">
					<h3><i class="fa fa-table"></i>	Contents</h3>
					<div class="box-tool">
						<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
						<a data-action="close" href="#"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="box-content">
                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="Add Content" href="{{url('contents/create')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
							<a  id="delete_button" onclick="delete_selected('contents')" class="btn btn-circle btn-danger show-tooltip" title="@lang('messages.template.delete_many')" href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <br><br>
					<div class="table-responsive">
						<table id="example" class="table table-striped dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
                                <th style="width:18px"><input type="checkbox" onclick="select_all()"></th>
                                <th>Content title</th>
                                <th>Content Type</th>
                                <th>Post actions</th>
                                <th>Creation Date</th>                                
								<th class="visible-md visible-lg" style="width:130px">@lang('messages.category.category-action')</th>
							</tr>
							</thead>
					 		<tbody>
                          @if($contents !=null)
							@foreach($contents as $content)
								<tr class="table-flag-blue">
                                    <th><input type="checkbox" class="contents-karim" name="selected_rows[]" value="{{$content->id}}" onclick="collect_selected(this)"></th>
                                    <td>{{$content->title}}</td>
                                    <td>
                                    @foreach($types as $key => $value)
                                        @if($content->type_id == $key )
                                        <button type="button" class="btn btn-primary" onclick="open_modal(this)" data-toggle="modal" data-target="#myModal" id="{{$content->id}}" value="{{$content->content_type}}!!{{$content->path}}!!{{$value}}">  
                                            @if($value == "Video")
                                                Video
                                            @elseif($value == "Audio")
                                                Audio
                                            @else
                                                Image
                                            @endif 
                                        </button>
                                        @endif
                                    @endforeach
                                    </td>
                                    <td>
                                         @if($content->type->title == "Audio")
                                        <a title="Add Post" style="position:relative;" href="{{url('posts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Post </button></a>
                                        <!--
                                        <a title="Add Rbt" style="position:relative;left:15px;" href="{{url('rbts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Rbt </button></a>
                                         
                                        <a title="List Rbts" style="position:relative;left:15px;" href="{{url('rbts/index?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">List Rbts </button></a>
                                        -->
                                        <a title="List Posts" style="position:relative;left:15px;" href="{{url('posts/index?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">List Posts </button></a>
                                        
                                        @endif
                                        @if($content->type->title == "Video")
                                        <a title="Show Content" style="position:relative;" href="{{url('posts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Post </button></a>
                                        @endif
                                        @if($content->type->title == "Image")
                                        <a title="Show Content" style="position:relative;" href="{{url('posts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Post </button></a>
                                        @endif
                                    </td>
                                    <td>
                                         {{date('Y-m-d',strtotime($content->created_at))}}
                                    </td>
                                    <td class="visible-md visible-lg">
                                       
										<div class="btn-group">
											<a class="btn btn-sm btn-success show-tooltip" href="{{url('posts/index?content_id='.$content->id)}}" title="List posts"><i class="fa fa-list"></i></a>                                        
											<a class="btn btn-sm show-tooltip" title="Edit" href="{{url('contents/'.$content->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
											<a class="btn btn-sm btn-danger show-tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this ?');" href="{{url('contents/'.$content->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</td>
                                
								</tr>
							@endforeach
							</tbody>
                       @endif
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop


@section('script')
    <script>
        var check = false ; 
        function select_all()
        {
            if(!check)
            {
                $('.contents-karim').prop("checked",!check);
                <?php
                foreach($contents as $content)
                { 
                ?>
                    collect_selected("{{$content->id}}") ;
                <?php 
                    
                }	
                ?>
                check = true ; 
            }
            else
            {
                $('.contents-karim').prop("checked",!check);
                check = false ;
                clear_selected() ; 
            }
        }
        function open_modal(element)
        {
            var content = element.value ;    

            var content_components = content.split("!!") ; 
            // content_components[0] contains 1 (internal) or 2(external)
            // ~~[1] contains path 
            // ~~[2] contains type (image, video, audio) 
            var htmlToBeAppend = ""  ; 
            if(content_components[2] == "Video"){
                if(content_components[0] == "1"){
                    htmlToBeAppend = "<video style='width:100%;height:100%'  width='295' height='225' src='{{url()}}/"+content_components[1]+"' controls> </video>" ; 
                }
                else if(content_components[0] == "2"){
                    if(content_components[1].indexOf("youtube")!==-1){
                        htmlToBeAppend = "<iframe style='width:100%;height:324px' id='popup-youtube-player' src='"+content_components[1]+"?enablejsapi=1&version=3&playerapiid=ytplayer' frameborder='0' allowfullscreen='true' allowscriptaccess='always'> </iframe>" ; 
                    }
                    else{
                        htmlToBeAppend = "<video style='width:100%;height:100%' id='example_video_1' class='video-js vjs-default-skin vjs-big-play-centered' controls preload='auto' width='295' height='225' data-setup='{}'> <source src='"+content_components[1]+"' type='video/mp4' />  </video>" ; 
                    }
                }
            }
            else if(content_components[2] == "Audio"){
                if(content_components[0] == "1"){
                    htmlToBeAppend = "<audio controls> <source src='{{url()}}/"+content_components[1]+"' type='audio/mpeg'style='width:100%' > </audio>" ; 
                }
                else{
                    htmlToBeAppend = "<audio controls> <source src='"+content_components[1]+"' type='audio/mpeg' style='width:100%'> </audio>" ;                     
                }
            }
            else{
                if(content_components[0] == "1"){
                    htmlToBeAppend = "<img src='{{url()}}/"+content_components[1]+"' alt='No Image' height='225' width='300' style='width:100%;height:100%' /> " ; 
                }
                else{
                    htmlToBeAppend = "<img src='"+content_components[1]+"' alt='No Image' height='225' width='300' style='width:100%;height:100%'/> " ;                     
                }
            }
              
            $(".modal-body #modal-body-id").html(htmlToBeAppend) ;
        
        }
	</script>
    <script src="{{url('js/theme/player.js')}}"></script>
    <script src="{{url('js/theme/main.js')}}"></script>
    <script src="{{url('js/vendor/video-js/video.js')}}"></script>
    <script>
        function ShowSearch()
        {
            $('#searchdiv3').show();
            $('#content_title').show();
            $('#date_picker').show();

        }
    </script>
    <script>
        var videos = document.querySelectorAll('video');
        for(var i=0; i<videos.length; i++)
           videos[i].addEventListener('play', function(){pauseAll(this)}, true);
        function pauseAll(elem){
            for(var i=0; i<videos.length; i++){
                //Is this the one we want to play?
                if(videos[i] == elem) continue;
                //Have we already played it && is it already paused?
                if(videos[i].played.length > 0 && !videos[i].paused){
                // Then pause it now
                  videos[i].pause();
                  
                }
            }
          }
        $(document).ready(function() {
            var audioElement = document.createElement('audio');
            audioElement.addEventListener('ended', function() {
                 this.play();
             }, false);   
        });
        
        document.addEventListener('play', function(e){
        var audios = document.getElementsByTagName('audio');
        for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
        }
        }
        }, true);
        
        document.addEventListener('play', function(e){
        var videos = document.getElementsByTagName('video');
        for(var i = 0, len = videos.length; i < len;i++){
        if(videos[i] != e.target){
            videos[i].pause();
        }
        }
        }, true);

        $('#content').addClass('active');
        $('#content-index').addClass('active');
    </script>
    <script>
        function pause_all()
        {
            $("audio").each(function(index, audio) {
                audio.pause();
            });
            $("video").each(function(index, video) {
                video.pause();
            });
            $('#popup-youtube-player')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');   
        }
    </script>
@stop