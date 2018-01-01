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
    <h3 class="suggested">الصوتيات</h3>

    <ul class="audio-play-list" id="all-media">
        <li class="search-hook">
            <a href="rbt_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>يا وطنا - موطني - السعودية	</p>
            </a>
        </li>
        <li class="search-hook">
            <a href="rbt_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>مقطع شهر المغفرة	</p>
            </a>
        </li>
        <li class="search-hook">
            <a href="rbt_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>لا تردين - البوم الجمهرة	</p>
            </a>
        </li>
        <li class="search-hook">
            <a href="rbt_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>لا باس - البوم الجمهرة	</p>
            </a>
        </li>
        <li class="search-hook">
            <a href="rbt_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>كل حب في حياتي - البوم وصلك ذهب	</p>
            </a>
        </li>
        <li class="search-hook">
            <a href="rbt_page.php" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>قلي يابو عبد العزيز - البوم وصلك ذهب	</p>
            </a>
        </li>
    </ul>
     

    <a href='#' class="xs-toggle-btn more">المزيد</a>
</section>
@stop

 