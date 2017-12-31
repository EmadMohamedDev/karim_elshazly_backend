<?php $title = "الصوتيات"; @include("header.php"); ?>
<section class="main-container">
    
    <h3 class="audio-header">عنوان المقطع الصوتى</h3>
    <div class="audio-player">
        <audio id="player" src="audios/audio_1.mp3"></audio>
        <div class="time-holder cf">
            <div class="duration">00:28</div>
            <div>/</div>
            <div class="current-time">00:00</div>

        </div>

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
        <li class="search-hook">
            <a href="audio_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>يا وطنا - موطني - السعودية	</p>
            </a>
        </li>
        <li class="search-hook">
            <a href="audio_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>مقطع شهر المغفرة	</p>
            </a>
        </li>
        <li class="search-hook">
            <a href="audio_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>لا تردين - البوم الجمهرة	</p>
            </a>
        </li>
    </ul>
     

    <a href='audios.php' class="xs-toggle-btn more">رجوع</a>
</section>
<?php @include('footer.php'); ?>

 