@extends('template')
@section('page_title')

	@lang('messages.posts.post-sec')

@stop
@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-blue">
                <div class="box-title">
                    @if($post != null)
                        <h3><i class="fa fa-table"></i> @lang('messages.posts.update-post')</h3>
                    @else
                        <h3><i class="fa fa-table"></i> @lang('messages.posts.create-post')</h3>
                    @endif
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if($post != null)
                        {!! Form::model($post,['url'=>'posts/'.$post->id,'class'=>'form-horizontal','files'=>'true','method'=>'PATCH']) !!}
                        @include('posts.form',['buttonAction'=>\Lang::get('messages.edit'),'required'=>'  '])
                    @else
                        {!! Form::open(['url'=>'posts','class'=>'form-horizontal','files'=>'true','method'=>'POST']) !!}
                        @include('posts.form',['buttonAction'=>\Lang::get('messages.save'),'required'=>' *'])
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop