<?php $value = $post->content->type->title; ?>
@if($value == 'Video')
    <input id="url_video" type="text" value="{{url('videos/'.$post->content->id.'?op_id='.$post->operator->id)}}" />
@elseif($value == 'Audio')
    <input id="url_audio" type="text" value="{{url('audios/'.$post->content->id.'?op_id='.$post->operator->id)}}" />
@elseif($value == 'Image')
@if($post->content->content_type == '2')
    <input id="url_photo2" type="text" value="{{$post->content->path}}" />
@else
    <input id="url_photo1" type="text" value="{{url($post->content->path)}}" />
@endif
@endif
