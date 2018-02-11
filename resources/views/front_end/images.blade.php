@extends('front_end.header') 
@section('content')
<?php 
    $query_params = "" ; 
    if(isset($op_id)&&is_numeric($op_id))
    {
        $query_params = "&op_id=$op_id" ;
    } 
?>
<!-- =================================================start content ======================= -->
<section class="main-container">
        <!-- suggested-->
        <h3 class="suggested">الصور</h3>

        <ul class="suggested-items media-gallery">
            @foreach($photos as $photo)
            <?php
            $init_link = "" ; 
            if($photo->content_type==1)
                $init_link = url()."/" ;   
            ?> 
            <li>
                <div class="media-wrapper img-wrapper">
                    <a href='{{$init_link.$photo->path}}' data-fancybox="group5" data-type="image" >
                        <img src="{{$init_link.$photo->path}}"> 
                    </a>
                    <span class="media-title"><a href="{{url('photo_page?img='.$photo->id.$query_params)}}" style="color:#fff">{{$photo->title}}</a></span> 
                </div>
            </li>
            @endforeach 
            <span id="load-more-videos"> </span>
        </ul>
        <!-- <button type="button" class="xs-toggle-btn more" id="load-more" onclick="load_more()">
                         <span id="results">المزيد</span>
                     </button> 
                         <span id="no-result-span" style="display:none;">لا يوجد المزيد</span> -->
        <?php 
            $spinner = get_loading_spineer() ; 
        ?>
        <img id="results" src="{{$spinner}}" style="width: 79px;display: none;margin: auto;" />  
    </section>
        
    <!-- =================================================End content ====================== -->
@stop
@section('scripts')
<script>
    var current_page = parseInt("<?php echo $photos->currentPage() ?>") ; 
    var last_page = parseInt("<?php echo $photos->lastPage() ?>") ; 
    var operator_id = "<?php echo $op_id ?>";   


    $(document).ready(function() {
        $('#li-photos').addClass(' active'); 
        if(current_page+1 > last_page)
        {
            $('#load-more').css("display","none"); 
            //$('#no-result-span').css("display","block"); 
        } 
    });
    
    function load_more()
    {    
        $('#results').css("display","block");      
        if(current_page+1 <= last_page)
        { 
            current_page++ ; 
            $.get("{{url('photos_paginate?page=')}}"+ current_page,function(data,status){
                var parsedData = data.data ; 
                for(var i = 0 ; i < parsedData.length ; i++)
                {  
                    var div_app = document.createElement('div') ; 
                    div_app.setAttribute("id","inner-div-"+current_page) ;  
                    $('#load-more-videos').append(div_app) ;   
                    var preview_image = "" ; 
                    if(parsedData[i].content_type==1) // type == internal
                        preview_image = "{{url()}}/" ; 
                    var htmlString = '<li>'+
                                        '<div class="media-wrapper img-wrapper">'+
                                            '<a href="'+preview_image+parsedData[i].path+'" data-fancybox="group5" data-type="image" >'+
                                                '<img src="'+preview_image+parsedData[i].path+'">'+ 
                                                '<span class="media-title">'+parsedData[i].title+'</span> '+
                                            '</a>'+
                                        '</div>'+
                                    '</li>';
                    $('#load-more').find('img').css("display","block");
                    $('#inner-div-'+current_page).append(htmlString).hide().fadeIn(600) ;
                    $('#load-more').find('#results').show(); 
                    $('#load-more').find('img').css("display","none");
                     
                }
                $('#results').css("display","none");             
                if(current_page+1 > last_page)
                {
                    $('#load-more').css("display","none"); 
                    $('#no-result-span').css("display","block");
                }           
            });
        }
        else{   
            $('#load-more').css("display","none"); 
            $('#no-result-span').css("display","block"); 
            $('#results').css("display","none");
            $('footer').css('marginTop',"50px");

        } 
    }

    /*
    var iScrollPos = 0 ;
    var page = 1 ;
    $('.site-wrapper').scroll(function(){
        var iCurScrollPos = $(this).scrollTop();
        if (iCurScrollPos > iScrollPos && iCurScrollPos > page * 10) {
            //Scrolling Down
            load_more() ;
            page++ ;
        } else {
            //Scrolling Up
        }
        iScrollPos = iCurScrollPos;
    });
    */



    var iScrollPos = 0 ;
    var page = 1 ;
    var recentScroll = false;
    $(window).on('scroll',function(){

        if(!recentScroll && $(window).scrollTop() + $(window).height() > $(document).height() -100) {

            //   alert(page);
            load_more() ;
            page++ ;
            recentScroll = true;
            // window.setTimeout(() => { recentScroll = false; }, 500)
            window.setTimeout(function(){ recentScroll = false; }, 500)
        }
        // var iCurScrollPos = $(this).scrollTop();
        // if (iCurScrollPos > iScrollPos && iCurScrollPos > page * 10) {
        //     //Scrolling Down

        // } else {
        //     //Scrolling Up
        // }
        // iScrollPos = iCurScrollPos;
    });


</script>
@stop 