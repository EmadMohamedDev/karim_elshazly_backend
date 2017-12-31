@extends('template')
@section('page_title')

	@lang('messages.countries.country')

@stop
@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-blue">
                <div class="box-title">
                    @if($country != null)
                        <h3><i class="fa fa-table"></i> @lang('messages.countries.update-country')</h3>
                    @else
                        <h3><i class="fa fa-table"></i> @lang('messages.countries.create-country')</h3>
                    @endif
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if($country != null)
                        {!! Form::model($country,['url'=>'countries/'.$country->id,'class'=>'form-horizontal','files'=>'true','method'=>'PATCH']) !!}
                        @include('countries.form',['buttonAction'=>\Lang::get('messages.edit'),'required'=>'  *'])
                    @else
                        {!! Form::open(['url'=>'countries','class'=>'form-horizontal','files'=>'true','method'=>'POST']) !!}
                        @include('countries.form',['buttonAction'=>\Lang::get('messages.save'),'required'=>' *'])
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop