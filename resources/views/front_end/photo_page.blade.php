@extends('front_end.header') 
@section('content')

<?php 
    $query_params = "" ; 
    if(isset($op_id)&&is_numeric($op_id))
    {
        $query_params = "?op_id=$op_id" ;
    } 
?>

<div class="container">
    <div class="row">
        <div class="content">
            
            <div class="img-size">
                <img src="{{url($image->path)}}" alt="">
            </div>
            
            <div class="info">
                <a href="{{url('photos'.$query_params)}}" class="btn">المزيد</a>
                <a href="#" id="download_image" class="btn">تحميل</a>
            </div>
            
        </div>
    </div>
</div>

<style>
    .img-size {
        width: 70%;
        margin: 10px auto;
        height: 600px;
        
    }
    
    @media(max-width:575px) {
        .img-size {
            height: 400px
        }    
    }
    
    .img-size img {
        width: 100%;
        height: 100%;
    }
    
    .info {
        display: block;
        width: 70%;
        margin: auto;
    }
    .info .btn {
        width: 100%;
        background: #1564bf;
        color: #fff;
        padding: 5px;
        margin-bottom: 10px;
    }
</style>

@stop
@section('scripts')

    <script>
        $('#download_image').click(function(){
            var imageURL = "{{url($image->path)}}" ; 
            console.log(imageURL) ;
            $(this).attr("href", imageURL)
                    .attr("download", "img.png");
        }); 
    </script>

@stop 