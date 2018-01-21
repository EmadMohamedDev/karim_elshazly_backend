@extends("front_end.header") 
@section('content')
<section class="main-container">
    <!-- suggested-->
    <h3 class="suggested"> كريم الشاذلى</h3>
    <?php  
        $settings = fill_settings(); 
    ?>
    <div class="photo-wrapper">
        <img src="{{url($settings['homepage_image'])}}" alt=""> 
    </div>
    <div class="info_karem">
        <p>{{$settings['slogan']}}</p>
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