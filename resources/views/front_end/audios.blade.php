@extends('front_end.header') 
@section('content')
<section class="main-container">
    <!-- suggested-->
    <h3 class="suggested">الصوتيات</h3>

    <ul class="audio-play-list" id="all-media">
        @foreach($rbts as $rbt)
        <li class="search-hook">
            <a href="{{url('audios/'.$rbt->id)}}" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>{{$rbt->title}}</p> 
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
    var current_page = parseInt("<?php echo $rbts->currentPage() ?>") ; 
    var last_page = parseInt("<?php echo $rbts->lastPage() ?>") ; 
    var operator_id = "<?php echo $op_id ?>";   
    function load_more()
    {    
        if(current_page+1 <= last_page)
        { 
            current_page++ ; 
            $.get("{{url('audios_paginate?page=')}}"+ current_page,function(data,status){
                var parsedData = data.data ; 
                for(var i = 0 ; i < parsedData.length ; i++)
                {  
                    var div_app = document.createElement('div') ; 
                    div_app.setAttribute("id","inner-div-"+current_page) ;  
                    $('#load-more-videos').append(div_app) ;   
                    var preview_image = "" ; 
                    if(parsedData[i].content_type==1)
                        preview_image = "{{url()}}/" ; 
                    var htmlString = '<li class="search-hook">'+
                                        '<a href="{{url()}}/audios/'+parsedData[i].id+'" class="cf arabic">'+
                                            '<div class="play-status"><span class="fa fa-play"></span></div>'+
                                            '<p>'+parsedData[i].title+'</p>'+
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

 