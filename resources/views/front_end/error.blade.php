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

    <div class="error_word">
        <h2>4<span>0</span>4</h2>
        <p>محتوى هذه الصفحه غير موجود</p>
        <a href="{{url('/'.$query_params)}}" class="error-link">رجوع للرئيسية</a>
    </div>
     
    <style> 
        .site-wrapper {
            height: 100%;
        }
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