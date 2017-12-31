@extends('template')
@section('page_title')

	@lang('messages.category.category')

@stop
@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-blue">
                <div class="box-title">
                    @if($category != null)
                        <h3><i class="fa fa-table"></i> @lang('messages.category.update-category')</h3>
                    @else
                        <h3><i class="fa fa-table"></i> @lang('messages.category.create-category')</h3>
                    @endif
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if($category != null)
                        {!! Form::model($category,['url'=>'categories/'.$category->id,'class'=>'form-horizontal','files'=>'true','method'=>'PATCH']) !!}
                        @include('categories.form',['buttonAction'=>\Lang::get('messages.edit'),'required'=>'  *'])
                    @else
                        {!! Form::open(['url'=>'categories','class'=>'form-horizontal','files'=>'true','method'=>'POST']) !!}
                        @include('categories.form',['buttonAction'=>\Lang::get('messages.save'),'required'=>' *'])
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop