

@if(Session::has('msg'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Heads Up!</strong> {!!Session::get('msg')!!}
        </div>
@endif


<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.operators.operator-tap'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" @if(!$post) multiple name="operator_id[]" @else name="operator_id" @endif required>
            @foreach ($operators as $operator)
                <option value="{{ $operator->id }}" @if ($post !=null && $post->operator_id == $operator->id) selected @endif>{{ $operator->title }} - {{$operator->country->title}}</option>
            @endforeach
        </select>
        <br/>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.content-name'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" id="content_id" name="content_id" required>
            @foreach ($contents as $key => $value)
                <option value="{{ $key }}" @if ($post !=null && $post->content_id == $key) selected @endif>{{ $value }}</option>
            @endforeach
        </select>
        <br/>
    </div>
</div>



<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.rbt-free'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" name="Free" required>
            <option value="1" @if ($post !=null && $post->Free == '1') selected @endif> Yes </option>
            <option value="0" @if ($post !=null && $post->Free == '0') selected @endif> No </option>
        </select>
        <br/>
    </div>
</div>

<input type="hidden" name="content_id_s" id="content_id_s" value="" />

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">@lang('messages.rbts.rbt-published'){{$required}}</label>
    <div class="col-sm-9 col-md-10 controls">
        <select class="form-control chosen-rtl" name="Published" required>
            <option value="1" @if ($post !=null && $post->Published == '1') selected @endif> Yes </option>
            <option value="0" @if ($post !=null && $post->Published == '0') selected @endif> No </option>
        </select>
        <br/>
    </div>
</div>



<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Post Date*</label>
    <div class="col-sm-5 col-lg-3 controls">
        <div class="input-group date" data-date="12-02-2012" data-date-format="YYYY-MM-DD" data-date-viewmode="years">
            <label class="input-group-addon" for="date_picker">
                <i class="fa fa-calendar"></i>
            </label>
            <input class="form-control date-picker" size="16" name="Published_Date" type="text" id="date_picker" @if($post!=null) value="{{date('d-m-Y',strtotime($post->Published_Date))}}" @else value="{{date('d-m-Y')}}"  @endif required>
        </div>
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
        $('#post').addClass('active');
        $('#post-create').addClass('active');
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

@section('script')

      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

@stop
