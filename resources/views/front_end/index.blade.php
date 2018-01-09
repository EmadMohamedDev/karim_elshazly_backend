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
            .footer-wrapper {
                padding:10px
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