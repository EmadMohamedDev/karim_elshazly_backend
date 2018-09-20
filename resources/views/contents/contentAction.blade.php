

<div class="btn-group">
    <a class="btn btn-sm btn-success show-tooltip" href="{{url('posts/index?content_id='.$content->id)}}" title="List posts"><i class="fa fa-list"></i></a>                                        
    <a class="btn btn-sm show-tooltip" title="Edit" href="{{url('contents/'.$content->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
    <a class="btn btn-sm btn-danger show-tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this ?');" href="{{url('contents/'.$content->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
</div>
