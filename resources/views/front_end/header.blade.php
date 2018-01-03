<?php 

 
    $query_params = "" ; 
    $over = 4 ; 
    $number = 25 ; 

    if(isset($op_id)&&is_numeric($op_id))
    {
        $query_params = "?op_id=".$op_id  ; 
        $over = 5 ;
    }
    if(isset($over) && !empty($over))
        $number = 100 / $over ; 

?>



<!DOCTYPE html>
<html lang="ar" >
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="format-detection" content="telephone=no">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title><?php echo $title ?></title>
      <!-- google fonts -->
      <link href='http://fonts.googleapis.com/css?family=Ubuntu|Cookie' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="{{url('img/icon.ico')}}">
      <!-- Bootstrap -->
      <!--<link href="css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
      <!-- Font Awesome icon fonts -->
      <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
      <link rel="stylesheet" href="{{url('css/fonts/vendor/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{url('js/vendor/video-js/video-js.min.css')}}">
      <!-- My Styles -->
      <link href="{{url('css/vendor/grid/css/foundation.css')}}" rel="stylesheet">
      <link href="{{url('css/theme/base.css')}}" rel="stylesheet">
      <link href="{{url('css/theme/demo.css')}}" rel="stylesheet">
      <link href="{{url('css/theme/arabic.css')}}" rel="stylesheet">
      <!-- link to animate.css -->
      
      <link href="{{url('css/vendor/animate.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{url('css/vendor/jquery.fancybox.min.css')}}" />

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="arabic">
      <!-- Burger Menu -->
        <div class="menu-container">
            <div class="menu-wrapper">
                <div class="categories-wrapper">
                    <!-- if the subscriber is active -->
                    <!-- Site navigation and social media -->
                    <ul class="menu-categories">
                        <!-- menu link 1 -->
                        <li>
                            <a href='{{url("/".$query_params)}}' class="row">
                                <div class="small-3 columns">
                                    <span class="fa fa-home"></span>
                                </div>
                                <div class="small-9 columns">
                                    <p>الرئيسية</p>
                                </div>
                            </a>
                        </li>
                        <!-- menu link 2 -->
                        <li>
                            <a href='{{url("videos".$query_params)}}' class="row">
                                <div class="row small-3 columns">
                                    <span class="fa fa-film"></span>
                                </div>
                                <div class="row small-9 columns">
                                    <p>فيديو</p>
                                </div>
                            </a>
                        </li>
                        <!-- menu link 3 -->
                        <li>
                            <a href='{{url("audios".$query_params)}}' class="row">
                                <div class="row small-3 columns">
                                    <span class="fa fa-music"></span>
                                </div>
                                <div class="row small-9 columns">
                                    <p>صوتيات</p>
                                </div>
                            </a>
                        </li>
                         <!-- menu link 4 -->
                         <li>
                            <a href='{{url("photos".$query_params)}}' class="row">
                                <div class="row small-3 columns">
                                    <span class="fa fa-picture-o"></span>
                                </div>
                                <div class="row small-9 columns">
                                    <p>الصور</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href='{{url("faq".$query_params)}}' class="row">
                                <div class="row small-3 columns">
                                    <span class="fa fa-info-circle"></span>
                                </div>
                                <div class="row small-9 columns">
                                    <p>الارشادات</p>
                                </div>
                            </a>
                        </li>
                        <!-- <li>
                            <a href='{{url("login".$query_params)}}' class="row">
                                <div class="row small-3 columns">
                                    <span class="fa fa-sign-in"></span>
                                </div>
                                <div class="row small-9 columns">
                                    <p>دخول</p>
                                </div>
                            </a>
                        </li> 
                        <li>
                            <a href='{{url("register".$query_params)}}' class="row">
                                <div class="row small-3 columns">
                                    <span class="fa fa-sign-out"></span>
                                </div>
                                <div class="row small-9 columns">
                                    <p>تسجيل حساب</p>
                                </div>
                            </a>
                        </li> -->
                        <!-- menu link 5 -->
                        
                    </ul>
                    <!-- end menu categories -->
                </div>
                <div class="clear-bottom"></div>
                <!-- use socicon or icomoon fonts -->
                <div class="social-media-wrapper">
                    <div class="copyright">powered by </div>
                    <!--<div><img class="ooredoo-logo-img" src="img/WebApps/ooredoo/afasy/mobily-logo-ft.png"/></div>-->
                    <div><img class="ooredoo-logo-img ivas" src="{{url('img/ivas.png')}}"/></div>
                </div>
                <!-- end social media wrapper -->
            </div>
            <!-- end menu wrapper -->
        </div>
        <!-- end menu-container -->
        <div class="site-wrapper">
            <header>
                <nav class="main-nav">
                    <div class="main-nav-wrapper">
                        <ul class="row status-toolbar"></ul>
                        <ul class="menu-toolbar make-sticky cf">
                        <i class="fa fa-angle-left fa-2x arrow" aria-hidden="true" onclick="goBack()"></i>
                            <li class="burger-menu-btn"><span class="fa fa-bars"></span></li>
                            <!-- make this a partial -->
                            <div class="logo-img">
                                <a href='{{url("/".$query_params)}}'>كريم الشاذلي</a>
                            </div>
                        </ul>
                    </div>
                </nav>
            </header>
            <section>
                <section class="home">
                    <!-- toggle Categories -->
                    <ul class="toggle-menu row">
                        <!-- tab 1 -->
                        <li id="li-homepage" class="tab" style="width:<?php echo $number .'%'?>;">
                            <a href='{{url("/".$query_params)}}' class="toggle-btn trigger-click">
                                <div>
                                    <span class="fa fa-home"></span>
                                    <p>الرئيسيه</p>
                                </div>
                            </a>
                        </li>
                        <!-- tab 2 -->
                        <li id="li-photos" class="tab"  style="width:<?php echo $number .'%'?>;">
                            <a href='{{url("photos".$query_params)}}' class="toggle-btn trigger-click">
                                <div>
                                    <span class="fa fa-picture-o"></span>
                                    <p>الصور</p>
                                </div>
                            </a>
                        </li>
                        <!-- tab 3 -->
                        <li id="li-audios" class="tab" style="width:<?php echo $number .'%'?>;">
                            <a href='{{url("audios".$query_params)}}' class="toggle-btn">
                                <div class="flex-container center-center">
                                    <span class="fa fa-music"></span>
                                    <p>صوتيات</p>
                                </div>
                            </a>
                        </li>
                        <!-- tab 4 -->
                        <li id="li-videos" class="tab"  style="width:<?php echo $number .'%'?>;">
                            <a href='{{url("videos".$query_params)}}' class="toggle-btn">
                                <div>
                                    <span class="fa fa-film"></span>
                                    <p>الفيدوهات</p>
                                </div>
                            </a>
                        </li>

                        @if(isset($op_id)&&is_numeric($op_id))
                        <li id="li-rbt" class="tab"  style="width:<?php echo $number .'%'?>;">
                            <a href='{{url("rbt".$query_params)}}' class="toggle-btn">
                                <div>
                                    <span class="fa fa-film"></span>
                                    <p>نغمات</p>
                                </div>
                            </a>
                        </li>
                        @endif

                    </ul>
                </section>
            </section>
    <style>
        #no-result-span{
            display: block;
            margin: auto;
            width: 156px;
            border-radius: 21px;
            background: #ff0000;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
    </style>
            @yield('content')



    <div class="clearfooter"></div>
    
            <footer>
                <div class="footer-wrapper">
                <div class="copy-right text-center">
                    تصميم و تطوير 
                    <a href="http://ivas.mobi/">
                        <h2>IVAS</h2>
                    </a>
                </div>
                </div>
            </footer>
    <a href="#" id="scroll-top">
        <i class="fa fa-angle-up fa-lg"></i>
    </a>  
        <!-- end site wrapper -->
        <!-- My scripts -->
        <!-- jQuery -->
        <script src="{{url('js/vendor/jquery-3.2.1.min.js')}}"></script>
        <script src="{{url('js/vendor/jquery.fancybox.min.js')}}"></script>
        <!-- English to Arabic Numbers -->
        <script src="{{url('js/vendor/persianumber.min.js')}}"></script>
        <script src="{{url('js/vendor/video-js/video.js')}}"></script>
        <script src="{{url('js/theme/player.js')}}"></script>             
        <script src="{{url('js/theme/main.js')}}"></script>
        @yield('scripts')

    </body>
</html>


