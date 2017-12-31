

@if(Session::has('msg'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Heads Up!</strong> {!!Session::get('msg')!!}
        </div>
    @endif

<div class="form-group">
    {!! Form::label('title',\Lang::get('messages.operators.operator-title').'*',['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('title',null,['class'=>'form-control input-lg','required'=>'required','placeholder'=>\Lang::get('messages.operators.operator-title')]) !!}
    </div>
</div>




<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.countries.country'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" name="country_id" required>
            @foreach ($countries as $key => $value)
                <option value="{{ $key }}" @if ($operator !=null && $operator->country_id == $key) selected @endif>{{ $value }}</option>
            @endforeach
        </select>
        <br/>
    </div>
</div>
           

<div class="form-group">
    {!! Form::label('operator_code',\Lang::get('messages.operators.operator-code').$required,['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::number('operator_code',null,['class'=>'form-control input-lg','required'=>'required','placeholder'=>\Lang::get('messages.operators.operator-code')]) !!}
    </div>
</div>

<div class="form-group">
    @if($operator == null)
        {!! Form::label('operator_image',\Lang::get('messages.operators.operator-image').$required,['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    @else
        {!! Form::label('operator_image',\Lang::get('messages.operators.operator-image'),['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    @endif

    <div class="col-sm-9 col-lg-10 controls">
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                @if($operator == null)
                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+file" alt="" />
                @else
                    @if(file_exists($operator->operator_image))
                        <img src="{{url($operator->operator_image)}}" alt="" />
                    @else
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+file" alt="" />
                    @endif
                @endif

            </div>
            <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
            <div>
                                    <span class="btn btn-default btn-file"><span class="fileupload-new">@lang('messages.upload')</span>
                                        <span class="fileupload-exists">@lang('messages.change')</span>
                                        @if($operator == null)
                                            {!! Form::file('operator_image',["accept"=>"image/*",'required'=>'required']) !!}
                                        @else
                                            {!! Form::file('operator_image') !!}
                                        @endif
                                        </span>
                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">@lang('messages.remove')</a>
            </div>
            <span class='label label-important'>NOTE!</span>
            <span>Only extension supported jpg, png, and jpeg</span>
        </div>
    </div>

</div>



  

<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        {!! Form::submit($buttonAction,['class'=>'btn btn-primary']) !!}
    </div>
</div>

@section('script')
    <script>
        $('#operator').addClass('active');
        $('#operator-create').addClass('active');
    </script>
@stop