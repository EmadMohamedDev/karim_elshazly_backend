@extends('template')
@section('page_title')
	Contents
@stop
@section('content')
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
                            <a class="btn btn-circle show-tooltip" title="Add Content" href="{{url('categories/create')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
							<a  id="delete_button" onclick="delete_selected('contents')" class="btn btn-circle btn-danger show-tooltip" title="@lang('messages.template.delete_many')" href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <br><br>
					<div class="table-responsive">
						<table id="example" class="table table-striped dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
                                <th style="width:18px"><input type="checkbox"></th>
                                <th>Content title</th>
                                <th>Content</th>
                                <th></th>
								<th class="visible-md visible-lg" style="width:130px">@lang('messages.category.category-action')</th>
							</tr>
							</thead>
					 		<tbody>
                          @if($contents !=null)
							@foreach($contents as $content)
								<tr class="table-flag-blue">
                                    <th><input type="checkbox" name="selected_rows[]" value="{{$content->id}}" onclick="collect_selected(this)"></th>
                                    <td>{{$content->title}}</td>
                                    <td>
                                    @foreach($types as $key => $value)
                                        @if($content->type_id == $key )
                                        @if($value == "Video")
                                         @if($content->content_type == "1")
                                            <video  width="275" height="225"
                                            src="{{url($content->path)}}" controls>
                                            </video>
                                            @elseif($content->content_type == "2")
                                            <iframe width="275" height="225"
                                            src="{{url($content->path)}}">
                                            </iframe>
                                        @endif
                                        @elseif($value == "Audio")
                                        <audio controls="">
                                            <source src="{{url($content->path)}}" type="audio/mpeg">
                                        </audio>
                                        @else
                                        <img src="{{url($content->path)}}" alt="No Image" height="225" width="300"> 
                                        @endif
                                        @endif
                                    @endforeach
                                    </td>
                                    <td>
                                         @if($content->type->title == "Audio")
                                        <a title="Show Content" style="position:relative;" href="{{url('posts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Post </button></a>
                                        <a title="Show Content" style="position:relative;left:15px;" href="{{url('rbts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Rbt </button></a>
                                        @endif
                                        @if($content->type->title == "Video")
                                        <a title="Show Content" style="position:relative;" href="{{url('posts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Post </button></a>
                                        @endif
                                        @if($content->type->title == "Image")
                                        <a title="Show Content" style="position:relative;" href="{{url('posts/create?'.'content_id='.$content->id)}}" target="_parent"><button class="btn btn-info">Add Post </button></a>
                                        @endif
                                    </td>
                                    <td class="visible-md visible-lg">
                                       
										<div class="btn-group">
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
@stop