@extends('template')
@section('page_title')

	@lang('messages.content.content')

@stop
@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-blue">
                <div class="box-title">
                    @if($content != null)
                        <h3><i class="fa fa-table"></i> @lang('messages.content.update-content')</h3>
                    @else
                        <h3><i class="fa fa-table"></i> @lang('messages.content.create-content')</h3>
                    @endif
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if($content != null)
                        {!! Form::model($content,['url'=>'contents/'.$content->id,'class'=>'form-horizontal','files'=>'true','method'=>'PATCH']) !!}
                        @include('contents.form',['buttonAction'=>\Lang::get('messages.edit'),'required'=>'  *'])
                    @else
                        {!! Form::open(['url'=>'contents','class'=>'form-horizontal','files'=>'true','method'=>'POST']) !!}
                        @include('contents.form',['buttonAction'=>\Lang::get('messages.save'),'required'=>' *'])
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop