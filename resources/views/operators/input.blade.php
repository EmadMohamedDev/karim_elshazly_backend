@extends('template')
@section('page_title')

		@lang('messages.operators.operator-sec')

@stop
@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-blue">
                <div class="box-title">
                    @if($operator != null)
                        <h3><i class="fa fa-table"></i> @lang('messages.operators.update-operator')</h3>
                    @else
                        <h3><i class="fa fa-table"></i> @lang('messages.operators.create-operator')</h3>
                    @endif
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if($operator != null)
                        {!! Form::model($operator,['url'=>'operators/'.$operator->id,'class'=>'form-horizontal','files'=>'true','method'=>'PATCH']) !!}
                        @include('operators.form',['buttonAction'=>\Lang::get('messages.edit'),'required'=>' '])
                    @else
                        {!! Form::open(['url'=>'operators','class'=>'form-horizontal','files'=>'true','method'=>'POST']) !!}
                        @include('operators.form',['buttonAction'=>\Lang::get('messages.save'),'required'=>' *'])
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop