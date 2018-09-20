@extends('template')
@section('page_title')
@lang('messages.posts.post-tap')
@stop
@section('content')


<div class="form-group">
    <div class="col-sm-9 col-lg-12 controls">
        <button  class="btn btn-primary" style="float:right; margin-left:10px;"  onclick="ShowSearch()">Search Post</button> 
    </div>
</div>
<br>
<br>


<div class="row" id="searchdiv2" style="display:none;">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bars"></i>Search Posts</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('SearchPost')}}" method="post">  
                    {{ csrf_field() }}  
                    <div class="form-group">
                        <label for="provider" class="col-sm-3 col-lg-2 control-label">Content Title * </label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control input-lg" placeholder="Content Title" name="title" id="content_title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">@lang('messages.operators.operator-tap')</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <select class="form-control" id="operator_id" name="search_field[]">
                                <option></option>
                                @foreach ($operators as $operator)
                                <option value="{{ $operator->id }}">{{ $operator->title }} - {{$operator->country->title}}</option>
                                @endforeach
                            </select>
                            <br/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.rbt-published')</label>
                        <div class="col-sm-9 col-md-10 controls">
                            <select class="form-control" id="rbt" name="search_field[]" >
                                <option></option>
                                <option value="0"> No </option>
                                <option value="1"> Yes </option>
                            </select>
                            <br/>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.rbt-free')</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <select class="form-control" id="free" name="search_field[]" >
                                <option></option>
                                <option value="0"> No </option>
                                <option value="1"> Yes </option>
                            </select>
                            <br/>
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
<br/>
<br/>

<div class="row">
    <div class="col-md-12">
        <div class="box box-black">
            <div class="box-title">
                <h3><i class="fa fa-table"></i>@lang('messages.posts.post-tap')</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>


            <div class="box-content">
                <div class="btn-toolbar pull-right">
                    <div class="btn-group">
                        <a class="btn btn-circle show-tooltip" title="Add Post" href="{{url('posts/create')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
                        <a  id="delete_button" onclick="delete_selected('posts')" class="btn btn-circle btn-danger show-tooltip" title="@lang('messages.template.delete_many')" href="#"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                <br><br>
                <div class="table-responsive">
                    <table id="table" class="table table-striped dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width:18px"><input type="checkbox" onclick="select_all('posts', false)"></th>
                                <th>@lang('messages.posts.content-name')</th>
                                <th>@lang('messages.posts.operator-name')</th>	 
                                <th>@lang('messages.posts.post-free')</th>
                                <th>@lang('messages.posts.post-published')</th>
                                <th>URL</th>
                                <th>@lang('messages.posts.p_date')</th>
                                <th class="visible-md visible-lg" style="width:130px">@lang('messages.posts.post-action')</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('script')
<script>

            function ShowSearch()
            {
            $('#searchdiv2').show();
                    $('#operator_id').show();
                    $('#rbt').show();
                    $('#free').show();
            }

    $('#post').addClass('active');
            $('#post-index').addClass('active');</script>
<script>
            $(document).ready(function () {
    $('#table').DataTable({
    "processing": true,
            "serverSide": true,
            ajax: "{!! url('posts/allData') !!}",
            columns: [
            {data: 'index', searchable: false, orderable: false},
            {data: 'content_id', name:'content.title'},
            {data: 'operator_id', name:'operator.title'},
            {data: 'Free'},
            {data: 'Published'},
            {data: 'link'},
            {data: 'date', name:'date'},
            {data: 'action', searchable: false}
            ]
            , 'order' : [[0, 'asc']]
            , "pageLength": {{get_pageLength()}}

    });
            });
</script>
@stop