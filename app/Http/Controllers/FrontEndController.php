<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting ; 
use App\Rbt ; 
use App\Post ; 
use App\Content ; 
use App\Type ;  
use Carbon\Carbon;

class FrontEndController extends Controller
{

    private $PAGINATION_NUMBER = 3;   
    public function __construct()
    {
        $this->settings = array() ; 
        $settings = Setting::where('key','LIKE','%pagination_number%')->first() ; 
        if($settings)
            $this->PAGINATION_NUMBER = (int) $settings->value; 
    }

    public function homepage(Request $request)
    {
        // STEPS 
        // 1. get homepage image from settings 
        // 2. get facebook,twitter,instagram, and youtube links from settings
        // 3. if not found return default values 
        $op_id = $request['op_id'] ;
        $title = "الرئيسية" ;  
        return view('front_end.index',compact('slogan','op_id','title'))  ;
    }
    

    public function audiosPaginate(Request $request)
    {
        $op_id = $request['op_id'] ; 
        if(isset($op_id)&&is_numeric($op_id))
        {
            // list from posts
            $rbts = Post::where('operator_id',$op_id)
            ->where('published',1)
            ->join('contents','posts.content_id','=','contents.id')
            ->join('types','contents.type_id','=','types.id')
            ->where('types.title','LIKE','%audio%')
            ->select('contents.*')
            ->paginate($this->PAGINATION_NUMBER)  ;
        }
        else{
            // list from rbts  
            $rbts = Type::where('types.title','LIKE','%audio%')
            ->join('contents','types.id','=','contents.type_id')
            ->paginate($this->PAGINATION_NUMBER) ; 
        }
        return $rbts ; 
    }

    public function audios(Request $request)
    {
        // 1. get audios from posts table 
        // 2. if no operator listing will be from audio
        $title = "الصوتيات" ; 
        $op_id = $request['op_id'] ;  
        $rbts = $this->audiosPaginate($request) ; 
        $view = 'audios' ; 
        if(count($rbts)==0)
        {
            $view = "error" ; 
        }
        $pagination_link = "audios_paginate" ;
        
        $track_page = "audios" ; 
        return view('front_end.'.$view,compact('track_page','pagination_link','title','rbts','op_id')) ;
    }
    
    public function audio_page(Request $request, $id)
    {
        $title = "الصوتيات" ; 
        $op_id = $request['op_id'] ; 
        if(isset($op_id)&&is_numeric($op_id))
        {
            // list from posts
            $track = Post::where('operator_id',$op_id)
            ->where('published',1)
            ->join('contents','posts.content_id','=','contents.id')
            ->where('contents.id',$id) 
            ->first()  ;

            $related_audios = Content::join('types','types.id','=','contents.type_id')
            ->orderBy('created_at','DESC')
            ->where('types.title','LIKE','%audio%')
            ->where('contents.id','<>',$id)
            ->join('posts','posts.content_id','=','contents.id')
            ->where('posts.operator_id',$op_id)
            ->select('contents.*')
            ->limit(6)
            ->get() ; 
     
        }
        else{ 
            $track = Type::where('types.title','LIKE','%audio%')
            ->join('contents','types.id','=','contents.type_id')
            ->where('contents.id',$id) 
            ->select('contents.*')
            ->first()  ;

            $related_audios = Content::join('types','types.id','=','contents.type_id')
            ->orderBy('created_at','DESC')
            ->where('types.title','LIKE','%audio%')
            ->where('contents.id','<>',$id)
            ->select('contents.*')
            ->limit(6)
            ->get() ; 
        }
        $track_page = "audios" ;  
        $view = 'audio_page' ; 
        
        if(! $track)
        {
            $view = "error" ; 
        }
        return view('front_end.'.$view,compact('track_page','related_audios','track','op_id','title')) ;
    }

    public function videosPaginate(Request $request)
    {
        $op_id = $request['op_id'] ; 
        if(isset($op_id)&&is_numeric($op_id))
        {
            // list from posts
            $videos = Post::where('operator_id',$op_id)
            ->where('Published',1) 
            ->where('Published_Date','<=',Carbon::now()->format("Y-m-d"))
            ->join('contents','posts.content_id','=','contents.id')
            ->join('types','contents.type_id','=','types.id')
            ->where('types.title','LIKE','%video%')
            ->select('posts.*','contents.*')
            ->paginate($this->PAGINATION_NUMBER)  ;
        }
        else{
            // list from content  
            $videos = Type::where('types.title','LIKE','%video%')
            ->join('contents','types.id','=','contents.type_id')
            ->paginate($this->PAGINATION_NUMBER) ; 
        }
        return $videos ; 
    }

    public function videos(Request $request)
    {
        $title = "الفيديوهات" ; 
        $op_id = $request['op_id'] ; 
        $videos = $this->videosPaginate($request) ; 
        $view = 'videos' ; 
        
        if(count($videos)==0)
        {
            $view = "error" ; 
        }
        return view('front_end.'.$view,compact('title','videos','op_id')) ;
    }
    

    public function photos_paginate(Request $request)
    {
        $op_id = $request['op_id'] ; 
        if(isset($op_id)&&is_numeric($op_id))
        {
            // list from posts
            $photos = Post::where('operator_id',$op_id)
            ->where('Published',1) 
            ->where('Published_Date','<=',Carbon::now()->format("Y-m-d"))
            ->join('contents','posts.content_id','=','contents.id')
            ->join('types','contents.type_id','=','types.id')
            ->where('types.title','LIKE','%image%')
            ->select('posts.*','contents.*')
            ->paginate($this->PAGINATION_NUMBER)  ;
        }
        else{
            // list from content  
            $photos = Type::where('types.title','LIKE','%image%')
            ->join('contents','types.id','=','contents.type_id')
            ->paginate($this->PAGINATION_NUMBER) ; 
        }

        return $photos ; 
    }

    public function images(Request $request)
    {
        $title = "الصور" ; 
        $op_id = $request['op_id'] ; 
        $photos = $this->photos_paginate($request) ; 
        $view = 'images' ; 
        
        if(count($photos)==0)
        {
            $view = "error" ; 
        }
        return view('front_end.'.$view,compact('title','photos','op_id')) ;
    }
    

    public function video_page(Request $request,$id)
    {
        $title = "الفيديوهات" ; 
        $op_id = $request['op_id'] ; 
        if(isset($op_id)&&is_numeric($op_id))
        {
            // list from posts
            $track = Post::where('operator_id',$op_id)
            ->where('Published',1)
            ->where('Published_Date','<=',Carbon::now()->format("Y-m-d"))
            ->join('contents','posts.content_id','=','contents.id')
            ->where('contents.id',$id) 
            ->first()  ;

            $related_videos = Content::join('types','types.id','=','contents.type_id')
            ->join('posts','posts.content_id','=','contents.id')
            ->orderBy('created_at','DESC')
            ->where('types.title','LIKE','%video%')
            ->where('contents.id','<>',$id)
            ->where('posts.operator_id',$op_id)
            ->select('contents.*')
            ->limit(6)
            ->get() ; 
        }
        else{
            // list from rbts  
            $track = Type::where('types.title','LIKE','%video%')
            ->join('contents','types.id','=','contents.type_id')
            ->where('contents.id',$id) 
            ->select('contents.*')
            ->first()  ;
        
            $related_videos = Content::join('types','types.id','=','contents.type_id')
            ->orderBy('created_at','DESC')
            ->where('types.title','LIKE','%video%')
            ->where('contents.id','<>',$id)
            ->select('contents.*')
            ->limit(6)
            ->get() ; 
        }
        $view = 'video_page' ; 

        if(! $track)
        {
            $view = "error" ; 
        }

        return view('front_end.'.$view,compact('related_videos','track','op_id','title')) ;
    }


    public function faq(Request $request)
    {
        $title = "الإرشادات" ; 
        $op_id = $request['op_id']  ;
        $faqs = Setting::where('key','faq')->first() ;
        if(! $faqs)
        {
            $faqs = "<ul class='terms'>
                        <li> 
                        شتراكك في هذه الخدمة يعني قبولك لجميع الشروط و الأحكام الخاصة بالخدمة وتفويض Tunisia Telecom لتبادل رقم الجوال الخاص بك مع شريكنا شركة Smart Technology،بلاشتراك مع IVAS التي تختص بإدارة هذه الخدمة   </li>
                        <li>يمكنك الاختيار ما بين الخيارات المتاحة ادناه للاشتراك في خدمة باقة كريم الدينية المقدمه من شركة Tunisia Telecom بالاشتراك مع خدمة كريم :</li>
                        <li>· للاشتراك في النظام اليومي، برجاء إرسال -A إلى 85001</li>
                        <li>يتمتع المستخدم الجديد ب 3 أيام مجانا عند التنشيط. يرجى ملاحظة أنه إذا كنت تمتعت بالفعل بالفترة المجانية في الماضي، سيتم محاسبتك وفقا لنظام الاشتراك الذي قمت بتحديده</li>
                        <li>تجديد اشتراكك في خدمة كريم تلقائيا، حتى تقوم بإلغاء تفعيل هذه الخدمة.</li>
                        <li>عن طريق الاشتراك في خدمة باقة كريم الدينية ، يعني موافقتك على استلام تنبيهات التجديد و التوصيات الخاصة بمحتوى الخدمة عن طريق الرسائل القصيرة.</li>
                        <li>تطبق الرسوم على البيانات للتصفح ولتنزيل المحتويات المتاحة من هذه البوابة.</li>
                        <li>إذا كنت ترغب في تعطيل أو إلغاء الاشتراك من خدمة كريم برجاء اتباع التعليمات ادناه</li>
                        <li>إذا كنت تستخدم جوال يعمل بنظام التشغيل IOS، تحميل الفيديوهات و النغمات من هذه البوابة غير متاح ، ولكن يمكنك تشغيلها على جهازك.</li>
                        <li>إذا لم تنجح المحاولات لتجديد إشتراكك لمدة 30 يوما متتاليا, فسيتم إلغاء تفعيل إشتراكك تلقائيا في اليوم الواحد و الثلاثين</li>
                    </ul>" ; 
        } 
        else{
            $faqs = $faqs->value ; 
        }
        return view('front_end.faq',compact('op_id','title','faqs')) ; 
    }

    public function login(Request $request)
    {
        $title = "دخول" ;
        $op_id = $request['op_id']  ;
        return view('front_end.login',compact('op_id','title')) ; 
    }
    public function register(Request $request)
    {
        $title = "تسجيل حساب" ;
        $op_id = $request['op_id']  ;
        return view('front_end.register',compact('op_id','title')) ; 
    }

    //Route "/verify"
    public function confirm(Request $request)
    {
        $title = "صفحه التأكيد" ;
        $op_id = $request['op_id']  ;
        return view('front_end.confirm',compact('op_id','title')) ; 
    }

    public function rbtsPaginate(Request $request)
    {
        $op_id = $request['op_id'] ; 
        $rbts = NULL ; 
        if(isset($op_id)&&is_numeric($op_id))
        {
            // list from posts
            $rbts = Rbt::where('operator_id',$op_id)
            ->where('published',1)
            ->join('contents','rbts.content_id','=','contents.id')
            ->join('types','contents.type_id','=','types.id')
            ->where('types.title','LIKE','%audio%')
            ->select('contents.*')
            ->paginate($this->PAGINATION_NUMBER)  ;
        }
        return $rbts ; 
    }


    public function rbts(Request $request)
    {
        $title = "النغمات" ; 
        $op_id = $request['op_id'] ;  
        $rbts = $this->rbtsPaginate($request) ; 
        $view = 'audios' ; 
        if(count($rbts)==0)
        {
            $view = "error" ; 
        }
        
        $track_page = "rbt" ;  
        $pagination_link = "rbts_paginate" ;
        return view('front_end.'.$view,compact('track_page','title','rbts','op_id','pagination_link')) ;        
    }

    public function rbt_page(Request $request,$id)
    {
       $title = "الصوتيات" ; 
        $op_id = $request['op_id'] ; 
        $track = NULL ; 
        if(isset($op_id)&&is_numeric($op_id))
        { 
            $track = Rbt::where('operator_id',$op_id)
            ->where('published',1)
            ->join('contents','rbts.content_id','=','contents.id')
            ->join('operators','rbts.operator_id','=','operators.id')
            ->where('contents.id',$id) 
            ->select('contents.*','rbts.id','rbts.rbt_code','operators.operator_code')
            ->first()  ;

            $related_audios = Content::join('types','types.id','=','contents.type_id')
            ->orderBy('created_at','DESC')
            ->where('types.title','LIKE','%audio%')
            ->where('contents.id','<>',$id)
            ->join('rbts','rbts.content_id','=','contents.id')
            ->where('rbts.operator_id',$op_id)
            ->select('contents.*')
            ->limit(6)
            ->get() ; 
        }
        $view = 'audio_page' ;  
        $track_page = "rbt" ;     
        if(! $track)
        {
            $view = "error" ; 
        }
        return view('front_end.'.$view,compact('track_page','related_audios','track','op_id','title')) ;
    }


}
