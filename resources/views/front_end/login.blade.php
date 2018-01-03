@extends('front_end.header') 
@section('content')
<section class="main-container">
    <!-- alert that sucess login -->
    <div class="success_alert">
        <div class="popup_content">
            <i class="fa fa-check-circle-o fa-lg right_i" ></i>
            <a href="#" class="left_i close_btn"><i class="fa fa-close fa-lg " ></i></a>
            <span class="content">تم التسجيل بنجاح</span>
        </div>
    </div> 
    <!-- alert that fault login -->
    <!-- <div class="fault_alert">
        <div class="popup_content">
            <i class="fa fa-exclamation-circle fa-lg right_i" ></i>
            <a href="#" class="close_btn left_i"><i class="fa fa-close fa-lg " ></i></a>
            <span class="content">حدث خطأ فى التسجيل </span>
        </div>
    </div>  -->
    <form class="form_access" action="">
        <!-- suggested-->
        <h3 class="suggested">تسجيل الدخول</h3>
        <hr>
        <div class="form_input">
            <label for="">من فضلك ادخل رقم الهاتف </label>
            <div class="input_tag">
                <i class="fa fa-phone"></i>
                <input type="text" name="user" value="">
            </div>
            <button type="submit" class="open_pop">دخول</button>
        </div>
    </form>
    
    <style> 
        .main-container {
        position: relative;
        min-height: 0;
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