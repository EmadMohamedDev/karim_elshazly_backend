@extends("front_end.header") 
@section('content')
<section class="main-container">
    <!-- suggested-->
    <h3 class="suggested"> كريم الشاذلى</h3>

    <div class="photo-wrapper">
        <img src="{{url($homepage_image)}}" alt=""> 
    </div>
    <div class="info_karem">
        <p>{{$slogan}}</p>
        <a href="{{$facebook_link}}" target="_blank"><i class="fa fa-facebook facebook"></i></a>
        <a href="{{$twitter_link}}}" target="_blank"><i class="fa fa-twitter twitter"></i></a>
        <a href="{{$instagram_link}}" target="_blank"><i class="fa fa-instagram instagram"></i></a>
        <a href="{{$youtube_link}}" target="_blank"><i class="fa fa-youtube youtube"></i></a>
    </div>
    <style>
        @media (max-width: 600px) {
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
        }
    </style>
</section>
@stop
@section('scripts')
<script>
    $('#li-homepage').addClass(' active'); 
</script>
@stop