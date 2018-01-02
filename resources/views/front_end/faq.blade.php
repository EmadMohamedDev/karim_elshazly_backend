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
    <!-- suggested-->
    <h3 class="suggested">الارشادات</h3>
    {!! $faqs !!}
</section>
@stop

 