@extends('front_end.header') 
@section('content')
<?php 
$query_params = "" ; 
    if(isset($op_id)&&is_numeric($op_id))
    {
        $query_params = "?op_id=$op_id" ;
    }

?>

<!-- =================================================start content ======================= -->
    <section class="main-container">
        <!-- suggested-->
        <h3 class="suggested">فيديوهات مقترحة</h3>

        <ul class="suggested-items media-gallery video">
            @foreach($videos as $video)
            <li>
                <a href='{{url("videos/$video->id".$query_params)}}' class="thumbnail">
                    <div class="media-wrapper">
                        <img id='Video{{$video->id}}' src="{{url($video->prev_img)}}">
                        <h3 class="media-title" id='Thumb{{$video->id}}'>{{$video->title}}</h3>
                        
                    </div><!-- end video wrapper -->
                </a>
            </li>
            @endforeach 
            <span id="load-more-videos"> </span>
        </ul> 
        <button type="button" class="xs-toggle-btn more" id="load-more" onclick="load_more()">
                         <span id="results">المزيد</span>
                     </button> 
                     <span id="no-result-span" style="display:none;">لا يوجد المزيد</span>
                     
    </section>


@stop
@section('scripts')
<script>
    var current_page = parseInt("<?php echo $videos->currentPage() ?>") ; 
    var last_page = parseInt("<?php echo $videos->lastPage() ?>") ; 
    var operator_id = "<?php echo $op_id ?>";   

    $(document).ready(function() {
        $('#li-videos').addClass(' active'); 
        if(current_page+1 > last_page)
        {
            $('#load-more').css("display","none"); 
            //$('#no-result-span').css("display","block"); 
        } 
    });

    function load_more()
    {    
        var operator_query = "" ;   
        if(current_page+1 <= last_page)
        {  
            current_page++ ;  
            if(operator_id)
                operator_query = "&op_id="+operator_id ;   
            $.get("{{url('videos_paginate?page=')}}"+ current_page+operator_query,function(data,status){
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
                                        '<a href="{{url()}}/videos/'+parsedData[i].id+'{{$query_params}}">'+
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