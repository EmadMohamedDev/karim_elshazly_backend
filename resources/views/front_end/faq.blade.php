@extends('front_end.header') 
@section('content')
<section class="main-container">
    <!-- suggested-->
    <h3 class="suggested">الارشادات</h3>
    {!! $faqs !!}
    <a href='index.php' class="xs-toggle-btn more">رجوع</a>
</section>
@stop

 