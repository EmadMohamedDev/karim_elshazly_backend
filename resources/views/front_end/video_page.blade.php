@extends('front_end.header') 
@section('content')
<!-- =================================================start content ======================= -->
    <section class="main-container">
        <h3 class="suggested">الفيديو</h3>
        @if($track)

        <div class="" >
        <?php 
            $init_link = "" ; 
            if($track->content_type==1)
            {
                $init_link = url()."/" ; 
                ?>
                    <div style="" class="video_parent">
                        <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered videostyle video_style"
                            controls preload="auto" width="100%" height="250"
                            poster="{{$init_link.$track->prev_img}}"
                            data-setup="{}">
                            <source src="{{$init_link.$track->path}}" type='video/mp4' />
                        </video>
                    </div>
                <?php 
            }
            else{
                ?> 
                    <iframe class="videostyle" width="420" height="315"
                        src="{{$init_link.$track->path}}">
                    </iframe>

                <?php 
            }
        ?>

        </div>
        @endif
        <br>
        <style>
            .video_parent {
                width:46%;margin:auto;
            }
            .videostyle{
                width: 46%;
                margin-left: 27%;
            }
            @media (max-width:600px){
                .videostyle{
                    width:100%;  
                    margin-left:0 ; 
                }
                .video_parent {
                    width:100%;
                }
            }
            .video_style{
                margin-left:0;
                
            }
        </style>


        <!-- suggested-->
        <h3 class="suggested">فيديوهات مقترحة</h3>

        <ul class="suggested-items media-gallery video">
            @foreach($related_videos as $video)
            <?php 
                $init_link2 = "";
                if($video->content_type==1)
                {
                    $init_link2 = url()."/" ; 
                }
            ?>
            <li>
                <a href='{{url("videos/".$video->id)}}' class="thumbnail">
                    <div class="media-wrapper">
                        <img src="{{$init_link2.$video->prev_img}}">
                        <h3 class="media-title">{{$video->title}}</h3>
                    </div><!-- end video wrapper -->
                </a>
            </li>
            @endforeach
        </ul>
        <a href='{{url("videos")}}' class="xs-toggle-btn more">رجوع</a>
    </section>
@stop 