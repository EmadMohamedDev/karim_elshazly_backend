@extends('front_end.header') 
@section('content')
<!-- =================================================start content ======================= -->
    <section class="main-container">
        <!-- suggested-->
        <h3 class="suggested">فيديوهات مقترحة</h3>

        <ul class="suggested-items media-gallery video">
            @foreach($videos as $video)
            <li>
                <a href='{{url("videos/$video->id")}}' class="thumbnail">
                    <div class="media-wrapper">
                        <img src="{{url($video->prev_img)}}">
                        <h3 class="media-title">{{$video->title}}</h3>
                        
                    </div><!-- end video wrapper -->
                </a>
            </li>
            @endforeach 
            <span id="load-more-videos"> </span>
        </ul> 
        <button type="button" class="xs-toggle-btn more" id="load-more" onclick="load_more()">
                         <span id="results">المزيد</span>
                         <span id="no-result" style="display:none;">لا يوجد المزيد</span>
                     </button> 
    </section>

@stop
@section('scripts')
<script>
    var current_page = parseInt("<?php echo $videos->currentPage() ?>") ; 
    var last_page = parseInt("<?php echo $videos->lastPage() ?>") ; 
    var operator_id = "<?php echo $op_id ?>";   
    function load_more()
    {    
        if(current_page+1 <= last_page)
        { 
            current_page++ ; 
            $.get("{{url('videos_paginate?page=')}}"+ current_page,function(data,status){
                var parsedData = data.data ; 
                for(var i = 0 ; i < parsedData.length ; i++)
                {  
                    var div_app = document.createElement('div') ; 
                    div_app.setAttribute("id","inner-div-"+current_page) ;  
                    $('#load-more-videos').append(div_app) ;   
                    var preview_image = "" ; 
                    if(parsedData[i].content_type==1)
                        preview_image = "{{url()}}/" ; 
                    var htmlString = '<li>'+
                                        '<a href="{{url()}}/videos/'+parsedData[i].id+'">'+
                                            '<div class="media-wrapper">'+
                                                '<img src="'+preview_image+parsedData[i].prev_img+'">'+
                                                '<h3 class="media-title">'+parsedData[i].title+'</h3>'+
                                            '</div>'+
                                        '</a>'+
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