@extends('template')
@section('page_title')

		@lang('messages.rbts.rbt-tap')

@stop
@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-blue">
                <div class="box-title">
                    @if($rbt != null)
                        <h3><i class="fa fa-table"></i> @lang('messages.rbts.update-rbt')</h3>
                    @else
                        <h3><i class="fa fa-table"></i> @lang('messages.rbts.create-rbt')</h3>
                    @endif
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if($rbt != null)
                        {!! Form::model($rbt,['url'=>'rbts/'.$rbt->id,'class'=>'form-horizontal','files'=>'true','method'=>'PATCH']) !!}
                        @include('rbts.form',['buttonAction'=>\Lang::get('messages.edit'),'required'=>' '])
                    @else
                        {!! Form::open(['url'=>'rbts','class'=>'form-horizontal','files'=>'true','method'=>'POST']) !!}
                        @include('rbts.form',['buttonAction'=>\Lang::get('messages.save'),'required'=>' *'])
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop