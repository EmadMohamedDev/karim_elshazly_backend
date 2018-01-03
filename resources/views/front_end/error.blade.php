@extends('front_end.header') 
@section('content')
<section class="main-container">

    <div class="error_word">
        <h2>4<span>0</span>4</h2>
        <p>محتوى هذه الصفحه غير موجود</p>
        <a href="{{url()}}" class="error-link">رجوع للرئيسية</a>
    </div>
     
    <style> 
        .main-container {
        position: relative; 
        min-height:0;
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