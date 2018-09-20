
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
