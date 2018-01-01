

@if(Session::has('msg'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Heads Up!</strong> {!!Session::get('msg')!!}
        </div>
    @endif


<input type="hidden" name="content_id_s" id="content_id_s" value="" />

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.content-name'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" id="content_id" name="content_id" required>
            @foreach ($contents as $key => $value)
                <option value="{{ $key }}" @if ($rbt !=null && $rbt->content_id == $key) selected @endif>{{ $value }}</option>
            @endforeach
        </select>
        <br/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.category-name'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" name="category_id" required>
            @foreach ($categories as $key => $value)
                <option value="{{ $key }}" @if ($rbt !=null && $rbt->category_id == $key) selected @endif>{{ $value }}</option>
            @endforeach
        </select>
        <br/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.operator-name'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" name="operator_id" required>
            @foreach ($operators as $operator)
                <option value="{{ $operator->id }}" @if ($rbt !=null && $rbt->operator_id == $operator->id) selected @endif>{{ $operator->title }} - {{$operator->country->title}}</option>
            @endforeach
        </select>
        <br/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.rbt-free'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" name="free" required>
                <option value="0" @if ($rbt !=null && $rbt->free == '0') selected @endif> No </option>
               <option value="1" @if ($rbt !=null && $rbt->free == '1') selected @endif> Yes </option>
        </select>
        <br/>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.rbt-published'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" name="published" required>
                <option value="0" @if ($rbt !=null && $rbt->published == '0') selected @endif> No </option>
               <option value="1" @if ($rbt !=null && $rbt->published == '1') selected @endif> Yes </option>
        </select>
        <br/>
    </div>
</div>

<div class="form-group">
    {!! Form::label('rbt_code',\Lang::get('messages.rbts.rbt-code').$required,['class'=>'col-sm-3 col-lg-2 control-label']) !!}
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::number('rbt_code',null,['class'=>'form-control input-lg','required'=>'required','placeholder'=>\Lang::get('messages.rbts.rbt-code')]) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        {!! Form::submit($buttonAction,['class'=>'btn btn-primary']) !!}
    </div>
</div>

@section('script')
    <script>
        $('#rbt').addClass('active');
        $('#rbt-create').addClass('active');
        var content = <?php echo json_encode($contents);?>;
        var count = 0 ;
        console.log(content);
        for (x in content)
        {
            var content_id = x;
            var content_title = content[x] ;
        }
        for (x in content)
        {
           count = count + 1 ;
        }
        console.log(count);
        if(count == 1)
        {
           document.getElementById("content_id").disabled = true;
           document.getElementById("content_id_s").value = content_id;
           console.log(document.getElementById("content_id").value);
        } 
    </script>
@stop

