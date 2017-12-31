<?php $title = "الفيديو"; @include("header.php"); ?>
<!-- =================================================start content ======================= -->
    <section class="main-container">
        <h3 class="suggested">الفيديو</h3>

        <div class="">
            <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
                controls preload="auto" width="100%" height="250"
                poster="img/poster-img.PNG"
                data-setup="{}">
                <source src="videos/karem.mp4" type='video/mp4' />
                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
            </video>
        </div>
        <br>


        <!-- suggested-->
        <h3 class="suggested">فيديوهات مقترحة</h3>

        <ul class="suggested-items media-gallery video">
            <li>
                <a href='' class="thumbnail">
                    <div class="media-wrapper">
                        <img src="img/poster-img.PNG">
                        <h3 class="media-title">كم حياه ستعيش</h3>
                    </div><!-- end video wrapper -->
                </a>
            </li>
            <li>
                <a href='' class="thumbnail">
                    <div class="media-wrapper">
                        <img src="img/poster-img.PNG">
                        <h3 class="media-title">كم حياه ستعيش</h3>
                    </div><!-- end video wrapper -->
                </a>
            </li>
            <li>
                <a href='' class="thumbnail">
                    <div class="media-wrapper">
                        <img src="img/poster-img.PNG">
                        <h3 class="media-title">كم حياه ستعيش</h3>
                    </div><!-- end video wrapper -->
                </a>
            </li>
            <li>
                <a href='' class="thumbnail">
                    <div class="media-wrapper">
                        <img src="img/poster-img.PNG">
                        <h3 class="media-title">كم حياه ستعيش</h3>
                    </div><!-- end video wrapper -->
                </a>
            </li>
        </ul>
        <a href='videos.php' class="xs-toggle-btn more">رجوع</a>
    </section>
<?php @include('footer.php'); ?>