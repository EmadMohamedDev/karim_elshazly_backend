@extends('front_end.header') 
@section('content')
<?php 
$query_params = "" ; 
    if(isset($op_id)&&is_numeric($op_id))
    {
        $query_params = "?op_id=$op_id" ;
    }

?>

<section class="main-container">

    <form class="form_access" action="" id="form">
        <!-- suggested-->
        <h3 class="suggested">تسجيل حساب</h3>
        <hr>
        <div class="form_input">
            <label for="">من فضلك ادخل رقم الهاتف </label>
            <div class="input_tag">
                <i class="fa fa-phone"></i>
                <input type="text" name="user" value="">
            </div>
            <button type="submit" class="open_pop">تسجيل</button>
        </div>
    </form> 
    <style> 
        .main-container {
        position: relative;
        min-height: auto;
        }
        footer { 
            position:absolute ;
            bottom: 0;
        }
        .clearfooter {
            clear:both;
            height:0;
        } 
    </style>
</section>
@stop