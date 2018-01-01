<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
      
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="{{url('css/cropper.min.css')}}">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>


  
  <script>
  $( function() {
    $( "#resizable" ).resizable();
  } );
  </script> 
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--page specific css styles-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/chosen-bootstrap/chosen.min.css')}}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets/jquery-tags-input/jquery.tagsinput.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/jquery-pwstrength/jquery.pwstrength.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/dropzone/downloads/css/dropzone.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-timepicker/compiled/timepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/clockface/css/clockface.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-daterangepicker/daterangepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" />

    <!--base css styles-->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/font-awesome/css/font-awesome.min.css')}}">
    <!--page specific css styles-->
    <link rel="stylesheet" href="{{url('assets/data-tables/bootstrap3/dataTables.bootstrap.css')}}" />
    <!--flaty css styles-->
    <link rel="stylesheet" href="{{url('css/flaty.css')}}">
    <link rel="stylesheet" href="{{url('css/flaty-responsive.css')}}">
    {{-- {{dd(App::getLocale())}} --}}
    @if(App::getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{url('css/rtl.css')}}">
        <link href="{{url('https://fonts.googleapis.com/css?family=Cairo:600')}}" rel="stylesheet">
    @endif
        
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}">
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script> 

    
</head>
<body>
<div id="theme-setting">
    <a href="#"><i class="fa fa-gears fa fa-2x"></i></a>
    <ul>
        <li>
            <span>Skin</span>
            <ul class="colors" data-target="body" data-prefix="skin-">
                <li class="active"><a class="blue" href="#"></a></li>
                <li><a class="red" href="#"></a></li>
                <li><a class="green" href="#"></a></li>
                <li><a class="orange" href="#"></a></li>
                <li><a class="yellow" href="#"></a></li>
                <li><a class="pink" href="#"></a></li>
                <li><a class="magenta" href="#"></a></li>
                <li><a class="gray" href="#"></a></li>
                <li><a class="black" href="#"></a></li>
            </ul>
        </li>
        <li>
            <span>Navbar</span>
            <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                <li class="active"><a class="blue" href="#"></a></li>
                <li><a class="red" href="#"></a></li>
                <li><a class="green" href="#"></a></li>
                <li><a class="orange" href="#"></a></li>
                <li><a class="yellow" href="#"></a></li>
                <li><a class="pink" href="#"></a></li>
                <li><a class="magenta" href="#"></a></li>
                <li><a class="gray" href="#"></a></li>
                <li><a class="black" href="#"></a></li>
            </ul>
        </li>
        <li>
            <span>Sidebar</span>
            <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                <li class="active"><a class="blue" href="#"></a></li>
                <li><a class="red" href="#"></a></li>
                <li><a class="green" href="#"></a></li>
                <li><a class="orange" href="#"></a></li>
                <li><a class="yellow" href="#"></a></li>
                <li><a class="pink" href="#"></a></li>
                <li><a class="magenta" href="#"></a></li>
                <li><a class="gray" href="#"></a></li>
                <li><a class="black" href="#"></a></li>
            </ul>
        </li>
        <li>
            <span></span>
            <a data-target="navbar" href="#"><i class="fa fa-square-o"></i> Fixed Navbar</a>
            <a class="hidden-inline-xs" data-target="sidebar" href="#"><i class="fa fa-square-o"></i> Fixed Sidebar</a>
        </li>
    </ul>
</div>
<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
    <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
        <span class="fa fa-bars"></span>
    </button>
    <a class="navbar-brand" href="{{url('/')}}">
        <small>
            <i class="fa fa-user-secret"></i>
            @lang('messages.dashboard')
        </small>
    </a>

    <!-- BEGIN Navbar Buttons -->
    <ul class="nav flaty-nav pull-right">

        <!-- BEGIN Tasks Dropdown -->
        <!-- BEGIN Button User -->
        <li class="user-profile">
            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        <span class="hhh" id="user_info">
                            {!! Auth::user()->name !!}
                        </span>
                <i class="fa fa-caret-down"></i>
            </a>

            <!-- BEGIN User Dropdown -->
            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                <li>
                    <a href="{{url('user_profile')}}">
                        <i class="fa fa-user"></i>
                        @lang('messages.profile')
                    </a>
                </li>

                <li class="divider visible-xs"></li>

                <li class="divider"></li>

                <li>
                    <a href="{{url('/auth/logout')}}">
                        <i class="fa fa-off"></i>
                        @lang('messages.logout')
                    </a>
                </li>
            </ul>
            <!-- BEGIN User Dropdown -->
        </li>
        <!-- END Button User -->
    </ul>
    <!-- END Navbar Buttons -->
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">
    <!-- BEGIN Sidebar -->
    <div id="sidebar" class="navbar-collapse collapse">
        <!-- BEGIN Navlist -->
        <ul class="nav nav-list">
            @if(Auth::user()->hasRole('super_admin'))
                <li id="user">
                    <a href="#" class="dropdown-toggle">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>@lang('messages.users.users')</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>

                    <!-- BEGIN Submenu -->
                    <ul class="submenu">
                        <li id="user-create"><a href="{{url('users/new')}}">@lang('messages.users.add_user')</a></li>
                        <li id="user-index"><a href="{{url('users')}}">@lang('messages.users.users')</a></li>
                    </ul>
                    <!-- END Submenu -->
                </li>

                <li id="role">
                    <a href="#" class="dropdown-toggle">
                        <i class="glyphicon glyphicon-road"></i>
                        <span>@lang('messages.role')</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>

                    <!-- BEGIN Submenu -->
                    <ul class="submenu">
                        <li id="role-create"><a href="{{url('roles/new')}}">@lang('messages.create-role')</a></li>
                        <li id="role-index"><a href="{{url('roles')}}">@lang('messages.role')</a></li>
                        <li id="route-index"><a href="{{url('routes')}}">Routes</a></li>    
                    </ul>
                    <!-- END Submenu -->
                </li>
                 
            @endif

                <li id="setting">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-gears"></i>
                        <span>Setting</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>

                    <!-- BEGIN Submenu -->
                    <ul class="submenu">
                        <li id="setting-create"><a href="{{url('setting/new')}}">Add Settings</a></li>
                        <li id="setting-index"><a href="{{url('setting')}}">Settings</a></li>
                    </ul>
                    <!-- END Submenu -->
                </li>
            
             <!--

                <li id="file_manager"> 
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-file"></i>
                        <span>File Manager</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>

                    <ul class="submenu">
                        <li id="elfinder"><a href="{{url('file_manager')}}">UI File Manager</a></li>
                        <li id="uploader"><a href="{{url('upload_items')}}">file uploader</a></li>
                    </ul>
                </li>
          
                <li id="images"> 
                    <a href="#" class="dropdown-toggle">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                        <span>Image</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>

                    <ul class="submenu">
                        <li id="upload_resize"><a href="{{url('upload_resize')}}">Upload/Resize Image</a></li> 
                    </ul>
                </li>                
                <ul class="nav nav-list">
                    <li id="static">
                        <a href="#" class="dropdown-toggle">
                            <i class="glyphicon glyphicon-cog"></i>
                            <span>Static Translations</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <ul class="submenu">
                            <li id="static-create"><a href="{{url('static_translation/create')}}">Add Static Translation</a></li>
                            <li id="static-index"><a href="{{url('static_translation')}}">Static Translations</a></li>
                        </ul>
                    </li>
                </ul>    
                        
        <ul class="nav nav-list">
            <li id="language">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-cloud"></i>
                    <span>Language</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>

                <ul class="submenu">
                    <li id="language-create"><a href="{{url('language/create')}}">Add Language</a></li>
                    <li id="language-index"><a href="{{url('language')}}">Languages</a></li>
                </ul>
            </li>
        </ul>
    -->
        <ul class="nav nav-list">
            <li id="country">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-globe"></i>
                    <span>@lang('messages.countries.country')</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">
                    <li id="country-create"><a href="{{url('countries/create')}}">@lang('messages.countries.create-country')</a></li>
                    <li id="country-index"><a href="{{url('countries/index')}}">@lang('messages.countries.country-ind')</a></li>
                </ul>
            </li>
        </ul>
            
        <ul class="nav nav-list">
            <li id="operator">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-phone"></i>
                    <span>@lang('messages.operators.operator-tap')</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">
                    <li id="operator-create"><a href="{{url('operators/create')}}">@lang('messages.operators.create-operator')</a></li>
                    <li id="operator-index"><a href="{{url('operators/index')}}">@lang('messages.operators.operator-ind')</a></li>
                </ul>
            </li>
        </ul>
            
        <ul class="nav nav-list">
            <li id="type">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-tag"></i>
                    <span>Type</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">
                    <!--
                    <li id="type-create"><a href="{{url('types/create')}}">Add Type</a></li>
                    //-->
                    <li id="type-index"><a href="{{url('types/index')}}">List Types</a></li>
                </ul>
            </li>
        </ul>
            
         <ul class="nav nav-list">
            <li id="category">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span>Rbt Category</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">
                    
                    <li id="category-create"><a href="{{url('categories/create')}}">@lang('messages.category.add-category')</a></li>
                    
                    <li id="category-index"><a href="{{url('categories/index')}}">@lang('messages.category.list-categories')</a></li>
                </ul>
            </li>
        </ul> 
            
        <ul class="nav nav-list">
            <li id="content">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-pencil"></i>
                    <span>Content</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">   
                    <li id="content-create"><a href="{{url('contents/create')}}">Add Content</a></li>
                    <li id="content-index"><a href="{{url('contents/index')}}">List Contents</a></li>
                </ul>
            </li>
        </ul>
            
        <ul class="nav nav-list">
            <li id="rbt">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-music"></i>
                    <span>Rbt</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">   
                    <li id="rbt-create"><a href="{{url('rbts/create')}}">Add Rbt</a></li>
                    <li id="rbt-index"><a href="{{url('rbts/index')}}">List Rbts</a></li>
                </ul>
            </li>
        </ul>
            
        <ul class="nav nav-list">
            <li id="post">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-text-color"></i>
                    <span>Post</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">   
                    <li id="post-create"><a href="{{url('posts/create')}}">Add Post</a></li>
                    <li id="post-index"><a href="{{url('posts/index')}}">List Posts</a></li>
                </ul>
            </li>
        </ul>
   <!--
        <ul class="nav nav-list">
            <li id="poem_category">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-ruble"></i>
                    <span>Poem Category</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">   
                    <li id="poemscat-create"><a href="{{url('poemscategories/create	')}}">Add Poem Category</a></li>
                    <li id="poemscat-index"><a href="{{url('poemscategories/index')}}">List Poems Categories</a></li>
                </ul>
            </li>
        </ul>
        
        <ul class="nav nav-list">
            <li id="poem_provider">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-hourglass"></i>
                    <span>Poem Provider</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">   
                    <li id="poemsprov-create"><a href="{{url('poemsproviders/create	')}}">Add Poem Provider</a></li>
                    <li id="poemsprov-index"><a href="{{url('poemsproviders/index')}}">List Poems Providers</a></li>
                </ul>
            </li>
        </ul>
            
         <ul class="nav nav-list">
            <li id="provider_content">
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-sort-by-alphabet"></i>
                    <span>Provider Content</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <ul class="submenu">   
                    <li id="provcontent-create"><a href="{{url('providerscontent/create')}}">Add Provider Content</a></li>
                    <li id="provcontent-index"><a href="{{url('providerscontent/index')}}">List Provider Content</a></li>
                </ul>
            </li>
        </ul>
  
 -->
                              
               {{--@endif--}}
        </ul>
        <!-- END Navlist -->

        <!-- BEGIN Sidebar Collapse Button -->
        <div id="sidebar-collapse" class="visible-lg">
            <i class="fa fa-angle-double-left"></i>
        </div>
        <!-- END Sidebar Collapse Button -->
    </div>
    <!-- END Sidebar -->

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> @yield('page_title')</h1>
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li class="active"><i class="fa fa-home"></i> @lang('messages.home')/ @yield('page_title') </li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        @include('partial.flash')
        @yield('content')
    </div>
    <div class="footer" align="center" style=" position: absolute; width: 100%; bottom: 0;">
        <p>{{\Carbon\Carbon::now()->year}} © iVAS Template</p>
    </div>
    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
<!-- END Container -->

<!--basic scripts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>

<script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{url('assets/jquery-cookie/jquery.cookie.js')}}"></script>

<!--page specific plugin scripts-->
<script src="{{url('assets/flot/jquery.flot.js')}}"></script>
<script src="{{url('assets/flot/jquery.flot.resize.js')}}"></script>
<script src="{{url('assets/flot/jquery.flot.pie.js')}}"></script>
<script src="{{url('assets/flot/jquery.flot.stack.js')}}"></script>
<script src="{{url('assets/flot/jquery.flot.crosshair.js')}}"></script>
{{--<script src="{{url('assets/flot/jquery.flot.tooltip.min.js')}}"></script>--}}
<script src="{{url('assets/sparkline/jquery.sparkline.min.js')}}"></script>


<script type="text/javascript" src="{{url('assets/chosen-bootstrap/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js')}}"></script>
<script type="text/javascript" src="{{url('assets/dropzone/downloads/dropzone.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script type="text/javascript" src="{{url('assets/clockface/js/clockface.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-daterangepicker/date.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-switch/static/js/bootstrap-switch.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{url('assets/ckeditor/ckeditor.js')}}"></script>

<script type="text/javascript" src="{{url('assets/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{url('assets/data-tables/bootstrap3/dataTables.bootstrap.js')}}"></script>
<!--flaty scripts-->
<script src="{{url('js/flaty.js')}}"></script>
<script src="{{url('js/flaty-demo-codes.js')}}"></script>
<script>
    $('#mySwitch').on('switch-change', function (e, data) {
        var $el = $(data.el)
                , value = data.value;
        // console.log(value);
        if (value == false) {
            $('input[name="featured"]').val(0);
        }else{
            $('input[name="featured"]').val(1);
        }
        // console.log(e, $el, value);
    });
</script>
<script>
    $(function(){
        $("audio").on("play", function() {
            $("audio").not(this).each(function(index, audio) {
                audio.pause();
            });
        });
    });
   $('.date-picker').datepicker({
        format: 'dd-mm-yyyy'
    });
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('#ui-datepicker-div').remove();
        var el = $('.chosen-rtl') ;
        if ("<?php echo App::getLocale(); ?>" == "ar") {
            el.chosen({
                rtl: true,
                width: '100%'
            });
        }
        else{
            el.addClass("chosen");
            el.removeClass("chosen-rtl");
            $(".chosen").chosen();
        }
    } );
</script>
<script>

    var selected_list = [] ;
    var checker_list = [] ;
    function collect_selected(element) {
        if (checker_list[element.value])
        {
            var index = selected_list.indexOf(element.value);
            selected_list.splice(index,1) ;
            checker_list[element.value] = false ;
        }
        else{
            if (! selected_list.includes(element.value))
            {
                selected_list.push(element.value) ;
                checker_list[element.value] = true ;
            }
        }
    }

</script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );


    function delete_selected(table_name) {
        var form = document.createElement("form");
        var element = document.createElement("input");
        var tb_name = document.createElement("input") ;
        var csrf = document.createElement("input") ;
        csrf.name = "_token" ;
        csrf.value= "{{ csrf_token() }}" ;
        csrf.type = "hidden" ;

        form.method = "POST";
        form.action = "{{url('delete_multiselect')}}";

        element.value= selected_list ;
        element.name = "selected_list" ;
        element.type = "hidden" ;

        tb_name.value = table_name ;
        tb_name.name = "table_name" ;
        tb_name.type = "hidden" ;

        form.appendChild(element);
        form.appendChild(csrf) ;
        form.appendChild(tb_name);

        document.body.appendChild(form);

        form.submit();
    }

    var initChosenWidgets = function(){
        $(".chosen").chosen();
    };
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

@yield('script')
<script src="{{url('js/cropper.min.js')}}" defer></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>