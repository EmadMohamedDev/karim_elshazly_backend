<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'homepage image',
                'value' => 'settings_images/5a489f33dd761.jpg',
                'created_at' => '2017-12-31 08:26:27',
                'updated_at' => '2017-12-31 08:26:27',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'sounds_title',
                'value' => 'الصوتيات',
                'created_at' => '2017-12-31 08:27:01',
                'updated_at' => '2017-12-31 08:27:01',
                'type' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'videos_title',
                'value' => 'الفيديوهات',
                'created_at' => '2017-12-31 08:27:22',
                'updated_at' => '2017-12-31 08:27:22',
                'type' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'images_title',
                'value' => 'الصور',
                'created_at' => '2017-12-31 08:27:52',
                'updated_at' => '2017-12-31 08:27:52',
                'type' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'homepage_title',
                'value' => 'الرئيسية',
                'created_at' => '2017-12-31 08:28:20',
                'updated_at' => '2017-12-31 08:28:20',
                'type' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'pagination_number',
                'value' => '6',
                'created_at' => '2018-01-01 09:01:02',
                'updated_at' => '2018-01-01 14:07:48',
                'type' => 2,
            ),
            6 => 
            array (
                'id' => 9,
                'key' => 'slogan',
                'value' => ' كاتب مصري معاصر له العديد من الكتب ',
                'created_at' => '2018-01-01 09:21:25',
                'updated_at' => '2018-01-01 09:24:55',
                'type' => 2,
            ),
            7 => 
            array (
                'id' => 11,
                'key' => 'faq',
                'value' => '    <ul class="terms">
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

</ul>',
                'created_at' => '2018-01-02 07:40:20',
                'updated_at' => '2018-01-02 07:56:33',
                'type' => 1,
            ),
            8 => 
            array (
                'id' => 12,
                'key' => 'facebook',
                'value' => 'https://www.facebook.com/karem.alshazley/',
                'created_at' => '2018-01-18 12:18:23',
                'updated_at' => '2018-01-18 12:18:23',
                'type' => 2,
            ),
            9 => 
            array (
                'id' => 13,
                'key' => 'twitter',
                'value' => 'https://twitter.com/karim_alshazley?lang=ar',
                'created_at' => '2018-01-18 12:18:46',
                'updated_at' => '2018-01-18 12:18:46',
                'type' => 2,
            ),
            10 => 
            array (
                'id' => 14,
                'key' => 'instagram',
                'value' => 'https://www.instagram.com/karim_alshazley/',
                'created_at' => '2018-01-18 12:19:05',
                'updated_at' => '2018-01-18 12:19:05',
                'type' => 2,
            ),
            11 => 
            array (
                'id' => 15,
                'key' => 'youtube',
                'value' => 'https://www.youtube.com/channel/UC9Gx0kQ94C2tyzuLzzYy9VQ',
                'created_at' => '2018-01-18 12:19:22',
                'updated_at' => '2018-01-18 12:19:22',
                'type' => 2,
            ),
            12 => 
            array (
                'id' => 16,
                'key' => 'pageLength',
                'value' => '3',
                'created_at' => '2018-09-20 08:10:31',
                'updated_at' => '2018-09-20 08:10:31',
                'type' => 2,
            ),
        ));
        
        
    }
}
