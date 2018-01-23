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
                    <a href='{{url("photoPage")}}'>
                        <img src="http://localhost/karim_elshazly_backend/uploads/services/images/5a421c0e9b25a.JPG"> 
                        <span class="media-title">{{$photo->title}}</span> 
                    </a>
                </div>
            </li>
            @endforeach 
            <span id="load-more-videos"> </span>
        </ul>
        <button type="button" class="xs-toggle-btn more" id="load-more" onclick="load_more()">
                         <span id="results">المزيد</span>
                     </button> 
                         <span id="no-result-span" style="display:none;">لا يوجد المزيد</span>
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
        } 
    }


</script>
@stop 