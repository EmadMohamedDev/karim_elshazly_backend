
<div class="btn-group">
    <a class="btn btn-sm show-tooltip" title="" href="{{url('posts/'.$post->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
    <a class="btn btn-sm btn-danger show-tooltip" title="" onclick="return confirm('Are you sure you want to delete this ?');" href="{{url('posts/'.$post->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
</div>
