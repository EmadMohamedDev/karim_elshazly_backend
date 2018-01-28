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
    <h3 class="suggested">{{$title}}</h3>

    <ul class="audio-play-list" id="all-media">
        @foreach($rbts as $rbt)
        <li class="search-hook">
            <a href="{{url($track_page.'/'.$rbt->id.$query_params)}}" class="cf arabic">
                <div class="play-status"><span class="fa fa-play"></span></div>
                <p>{{$rbt->title}}</p> 
            </a>
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
@stop 

@section('scripts')
<script>
    var current_page = parseInt("<?php echo $rbts->currentPage() ?>") ; 
    var last_page = parseInt("<?php echo $rbts->lastPage() ?>") ; 
    var operator_id = "<?php echo $op_id ?>";   


    $(document).ready(function() {
        $('#li-'+"{{$track_page}}").addClass(' active');        
        if(current_page+1 > last_page)
        {
            $('#load-more').css("display","none"); 
            //$('#no-result-span').css("display","block"); 
        } 
    });

    function load_more()
    {    
        $('#results').css("display","block");             
        var operator_query = "" ;   
        if(current_page+1 <= last_page)
        {  
            current_page++ ;  
            var pagination_link = "{{$pagination_link}}" + "?page=" ; 
            var track_link = "{{$track_page}}" ; 
            if(operator_id)
                operator_query = "&op_id="+operator_id ;   
            $.get("{{url()}}/"+ pagination_link+ current_page+operator_query,function(data,status){
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
                                        '<a href="{{url()}}/'+track_link+'/'+parsedData[i].id+'{{$query_params}}" class="cf arabic">'+
                                            '<div class="play-status"><span class="fa fa-play"></span></div>'+
                                            '<p>'+parsedData[i].title+'</p>'+
                                        '</a>'+
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
        } 
    }


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
</script>
@stop 

 