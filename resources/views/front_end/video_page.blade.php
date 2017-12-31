@extends('front_end.header') 
@section('content')
<!-- =================================================start content ======================= -->
    <section class="main-container">
        <h3 class="suggested">الفيديو</h3>
        @if($track)
        <?php 
            $init_link = "" ; 
            if($track->content_type==1)
                $init_link = url()."/" ; 
        ?>
        <div class="">
            <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
                controls preload="auto" width="100%" height="250"
                poster="{{$init_link.$track->prev_img}}"
                data-setup="{}">
                <source src="{{$init_link.$track->path}}" type='video/mp4' />
            </video>
        </div>
        @endif
        <br>


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