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

    @if($track)
        @if($track_page=='rbt') 
            <a id="mobileOSLink" href="" class="rbt_call">اشترى نغمة الانتظار</a>
        @endif
    <h3 class="audio-header">{{$track->title}}</h3>
    <div class="audio-player">
        <?php 
            $init_link = "" ; 
            if($track->content_type==1)
                $init_link = url()."/" ; 
        ?>
        <audio id="player" src="{{$init_link.$track->path}}"></audio>
        <div class="time-holder cf">
            <div class="duration"></div>
            <div>/</div>
            <div class="current-time">00:00</div>

        </div>
    @endif 
        <div class="audio-controls flex-container">

            <!--<div class="rewind-btn flex-col-1">
                <span class="fa fa-backward"></span>
            </div>-->

            <div class="play-btn">
                <div class="play-btn-bg">
                    <span class="fa fa-play"></span>
                </div>
            </div>

            <!--<div class="forward-btn flex-col-1" id="forward-btn">
                <span class="fa fa-forward"></span>
            </div>-->
        </div>

        <div class="seek-bar">
            <div class="seek-bar-track"></div>
            <div class="seek-bar-thumb"></div>
        </div>

    </div>

    <!-- suggested-->
    <h3 class="suggested">صوتيات مقترحة</h3>
    <ul class="audio-play-list" id="all-media">
        @foreach($related_audios as $audio)
        <li class="search-hook">
            <a href="{{url('audios/'.$audio->id.$query_params)}}" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>{{$audio->title}}</p>
            </a>
        </li>
        @endforeach
    </ul>
     

    <a href='{{url($track_page."/".$query_params)}}' class="xs-toggle-btn more">رجوع</a>
</section>
@stop 
@section('scripts')
<script> 
$('#li-audios').addClass(' active'); 
    var ua = navigator.userAgent;
    var sign = "" ;
    // determine OS
    if ( ua.match(/iPad/i) || ua.match(/iPhone/i) ) {
    mobileOS = 'iOS';
    } else if ( ua.match(/Android/i) ){
    mobileOS = 'Android';
    }else {
    mobileOS = 'unknown';
    }
    if ( mobileOS === 'iOS' ){ 
        sign = "&"  ; 
    } else if ( mobileOS === 'Android' ){ 
        sign = "?" ; 
    }else{  
        sign = "?" ; 
    }
    $('#mobileOSLink').attr("href","sms:{{$track->operator_code}}"+sign+"body={{$track->rbt_code}}");
</script>

@stop 
 