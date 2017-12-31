@extends('front_end.header') 
@section('content')
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
                </div>
            </li>
            @endforeach 
            <span id="load-more-videos"> </span>
        </ul>
        <button type="button" class="xs-toggle-btn more" id="load-more" onclick="load_more()">
                         <span id="results">المزيد</span>
                         <span id="no-result" style="display:none;">لا يوجد المزيد</span>
                     </button> 
    </section>
        
    <!-- =================================================End content ====================== -->
@stop
@section('scripts')
<script>
    var current_page = parseInt("<?php echo $photos->currentPage() ?>") ; 
    var last_page = parseInt("<?php echo $photos->lastPage() ?>") ; 
    var operator_id = "<?php echo $op_id ?>";   
    function load_more()
    {    
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
                                            '</a>'+
                                        '</div>'+
                                    '</li>';
                    $('#load-more').find('img').css("display","block");
                    $('#inner-div-'+current_page).append(htmlString).hide().fadeIn(600) ;
                    $('#load-more').find('#results').show(); 
                    $('#load-more').find('img').css("display","none");
                     
                }
                    
            });
        }
        else{   
            $('#load-more').find('#results').css("display","none"); 
            $('#load-more').find('#no-result').css("display","block"); 
        } 
    }


</script>
@stop 