@extends('front_end.header') 
@section('content')


<div class="container">
    <div class="row">
        <div class="content">
            
            <div class="img-size">
                <img src="{{url('img/home.jpg')}}" alt="">
            </div>
            
            <div class="info">
                <a href="images.blade.php" class="btn">المزيد</a>
                <a href="images.blade.php" class="btn">تحميل</a>
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