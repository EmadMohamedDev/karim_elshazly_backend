<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('routes')->delete();
        
        \DB::table('routes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'method' => 'get',
                'route' => 'users',
                'controller_name' => 'UserController',
                'created_at' => '2017-11-09 06:13:14',
                'updated_at' => '2017-11-09 06:13:14',
                'function_name' => 'index',
            ),
            1 => 
            array (
                'id' => 3,
                'method' => 'post',
                'route' => 'users',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            2 => 
            array (
                'id' => 4,
                'method' => 'get',
                'route' => 'dashboard',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-12-26 13:28:17',
                'function_name' => 'index',
            ),
            3 => 
            array (
                'id' => 6,
                'method' => 'get',
                'route' => 'user_profile',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'profile',
            ),
            4 => 
            array (
                'id' => 7,
                'method' => 'post',
                'route' => 'user_profile/updatepassword',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:01',
                'function_name' => 'UpdatePassword',
            ),
            5 => 
            array (
                'id' => 8,
                'method' => 'post',
                'route' => 'user_profile/updateprofilepic',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:08',
                'function_name' => 'UpdateProfilePicture',
            ),
            6 => 
            array (
                'id' => 9,
                'method' => 'post',
                'route' => 'user_profile/updateuserdata',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:19',
                'function_name' => 'UpdateNameAndEmail',
            ),
            7 => 
            array (
                'id' => 10,
                'method' => 'get',
                'route' => 'users/{id}/delete',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-15 08:34:32',
                'function_name' => 'destroy',
            ),
            8 => 
            array (
                'id' => 11,
                'method' => 'get',
                'route' => 'users/{id}/edit',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:40',
                'function_name' => 'edit',
            ),
            9 => 
            array (
                'id' => 12,
                'method' => 'post',
                'route' => 'users/{id}/update',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:49',
                'function_name' => 'update',
            ),
            10 => 
            array (
                'id' => 14,
                'method' => 'get',
                'route' => 'static_translation',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:57',
                'function_name' => 'index',
            ),
            11 => 
            array (
                'id' => 15,
                'method' => 'get',
                'route' => 'setting',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            12 => 
            array (
                'id' => 16,
                'method' => 'get',
                'route' => 'setting/new',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            13 => 
            array (
                'id' => 17,
                'method' => 'get',
                'route' => 'setting/{id}/delete',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            14 => 
            array (
                'id' => 18,
                'method' => 'get',
                'route' => 'setting/{id}/edit',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            15 => 
            array (
                'id' => 19,
                'method' => 'post',
                'route' => 'setting/{id}/update',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            16 => 
            array (
                'id' => 20,
                'method' => 'post',
                'route' => 'setting',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            17 => 
            array (
                'id' => 21,
                'method' => 'get',
                'route' => 'file_manager',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'file_manager',
            ),
            18 => 
            array (
                'id' => 22,
                'method' => 'get',
                'route' => 'upload_items',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'multi_upload',
            ),
            19 => 
            array (
                'id' => 23,
                'method' => 'post',
                'route' => 'save_items',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'save_uploaded',
            ),
            20 => 
            array (
                'id' => 24,
                'method' => 'get',
                'route' => 'upload_resize',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'upload_resize',
            ),
            21 => 
            array (
                'id' => 25,
                'method' => 'post',
                'route' => 'save_image',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'save_image',
            ),
            22 => 
            array (
                'id' => 26,
                'method' => 'post',
                'route' => 'static_translation/{id}/update',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-12 12:19:46',
                'function_name' => 'update',
            ),
            23 => 
            array (
                'id' => 27,
                'method' => 'get',
                'route' => 'static_translation/{id}/delete',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            24 => 
            array (
                'id' => 28,
                'method' => 'get',
                'route' => 'language/{id}/delete',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            25 => 
            array (
                'id' => 29,
                'method' => 'post',
                'route' => 'language/{id}/update',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            26 => 
            array (
                'id' => 30,
                'method' => 'get',
                'route' => 'roles',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            27 => 
            array (
                'id' => 31,
                'method' => 'get',
                'route' => 'roles/new',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            28 => 
            array (
                'id' => 32,
                'method' => 'post',
                'route' => 'roles',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            29 => 
            array (
                'id' => 33,
                'method' => 'get',
                'route' => 'roles/{id}/delete',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            30 => 
            array (
                'id' => 34,
                'method' => 'get',
                'route' => 'roles/{id}/edit',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            31 => 
            array (
                'id' => 35,
                'method' => 'post',
                'route' => 'roles/{id}/update',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            32 => 
            array (
                'id' => 36,
                'method' => 'get',
                'route' => 'language',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            33 => 
            array (
                'id' => 37,
                'method' => 'get',
                'route' => 'language/create',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            34 => 
            array (
                'id' => 38,
                'method' => 'post',
                'route' => 'language',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            35 => 
            array (
                'id' => 39,
                'method' => 'get',
                'route' => 'language/{id}/edit',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            36 => 
            array (
                'id' => 40,
                'method' => 'get',
                'route' => 'routes',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            37 => 
            array (
                'id' => 41,
                'method' => 'post',
                'route' => 'routes',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            38 => 
            array (
                'id' => 42,
                'method' => 'get',
                'route' => 'routes/{id}/edit',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            39 => 
            array (
                'id' => 43,
                'method' => 'post',
                'route' => 'routes/{id}/update',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            40 => 
            array (
                'id' => 44,
                'method' => 'get',
                'route' => 'routes/{id}/delete',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            41 => 
            array (
                'id' => 45,
                'method' => 'get',
                'route' => 'routes/create',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            42 => 
            array (
                'id' => 57,
                'method' => 'get',
                'route' => 'routes/index_v2',
                'controller_name' => 'RouteController',
                'created_at' => '2017-11-12 13:45:15',
                'updated_at' => '2017-11-12 14:04:53',
                'function_name' => 'index_v2',
            ),
            43 => 
            array (
                'id' => 58,
                'method' => 'get',
                'route' => 'roles/{id}/view_access',
                'controller_name' => 'RoleController',
                'created_at' => '2017-11-14 10:56:14',
                'updated_at' => '2017-11-15 08:14:14',
                'function_name' => 'view_access',
            ),
            44 => 
            array (
                'id' => 59,
                'method' => 'get',
                'route' => 'types/{id}/delete',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:51:02',
                'updated_at' => '2017-12-25 08:51:02',
                'function_name' => 'destroy',
            ),
            45 => 
            array (
                'id' => 60,
                'method' => 'post',
                'route' => 'types',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:51:30',
                'updated_at' => '2017-12-25 08:51:30',
                'function_name' => 'store',
            ),
            46 => 
            array (
                'id' => 61,
                'method' => 'get',
                'route' => 'types/{id}/edit',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:51:55',
                'updated_at' => '2017-12-25 08:51:55',
                'function_name' => 'edit',
            ),
            47 => 
            array (
                'id' => 62,
                'method' => 'patch',
                'route' => 'types/{id}',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:52:26',
                'updated_at' => '2017-12-25 08:52:26',
                'function_name' => 'update',
            ),
            48 => 
            array (
                'id' => 63,
                'method' => 'get',
                'route' => 'types/create',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:53:05',
                'updated_at' => '2017-12-25 08:53:05',
                'function_name' => 'create',
            ),
            49 => 
            array (
                'id' => 64,
                'method' => 'get',
                'route' => 'types/index',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:53:24',
                'updated_at' => '2017-12-25 08:53:24',
                'function_name' => 'index',
            ),
            50 => 
            array (
                'id' => 65,
                'method' => 'get',
                'route' => 'categories/index',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:14:04',
                'updated_at' => '2017-12-25 09:14:04',
                'function_name' => 'index',
            ),
            51 => 
            array (
                'id' => 66,
                'method' => 'get',
                'route' => 'categories/create',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:14:25',
                'updated_at' => '2017-12-25 09:14:25',
                'function_name' => 'create',
            ),
            52 => 
            array (
                'id' => 67,
                'method' => 'patch',
                'route' => 'categories/{id}',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:14:45',
                'updated_at' => '2017-12-25 09:14:45',
                'function_name' => 'update',
            ),
            53 => 
            array (
                'id' => 68,
                'method' => 'get',
                'route' => 'categories/{id}/edit',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:15:11',
                'updated_at' => '2017-12-25 09:15:11',
                'function_name' => 'edit',
            ),
            54 => 
            array (
                'id' => 69,
                'method' => 'post',
                'route' => 'categories',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:15:33',
                'updated_at' => '2017-12-25 09:15:33',
                'function_name' => 'store',
            ),
            55 => 
            array (
                'id' => 70,
                'method' => 'get',
                'route' => 'categories/{id}/delete',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:16:01',
                'updated_at' => '2017-12-25 09:16:01',
                'function_name' => 'destroy',
            ),
            56 => 
            array (
                'id' => 71,
                'method' => 'patch',
                'route' => 'operators/{id}',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:25:21',
                'updated_at' => '2017-12-25 09:25:21',
                'function_name' => 'update',
            ),
            57 => 
            array (
                'id' => 72,
                'method' => 'get',
                'route' => 'operators/create',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:25:46',
                'updated_at' => '2017-12-25 09:25:46',
                'function_name' => 'create',
            ),
            58 => 
            array (
                'id' => 73,
                'method' => 'get',
                'route' => 'operators/index',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:26:12',
                'updated_at' => '2017-12-25 09:26:12',
                'function_name' => 'index',
            ),
            59 => 
            array (
                'id' => 74,
                'method' => 'post',
                'route' => 'operators',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:26:36',
                'updated_at' => '2017-12-25 09:26:36',
                'function_name' => 'store',
            ),
            60 => 
            array (
                'id' => 75,
                'method' => 'get',
                'route' => 'operators/{id}/edit',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:26:58',
                'updated_at' => '2017-12-25 09:26:58',
                'function_name' => 'edit',
            ),
            61 => 
            array (
                'id' => 76,
                'method' => 'get',
                'route' => 'operators/{id}/delete',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:28:10',
                'updated_at' => '2017-12-25 09:28:10',
                'function_name' => 'destroy',
            ),
            62 => 
            array (
                'id' => 77,
                'method' => 'get',
                'route' => 'countries/{id}/delete',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:10:10',
                'updated_at' => '2017-12-25 10:10:10',
                'function_name' => 'destroy',
            ),
            63 => 
            array (
                'id' => 78,
                'method' => 'get',
                'route' => 'countries/{id}/edit',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:10:39',
                'updated_at' => '2017-12-25 10:10:39',
                'function_name' => 'edit',
            ),
            64 => 
            array (
                'id' => 79,
                'method' => 'post',
                'route' => 'countries',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:11:13',
                'updated_at' => '2017-12-25 10:11:13',
                'function_name' => 'store',
            ),
            65 => 
            array (
                'id' => 80,
                'method' => 'get',
                'route' => 'countries/index',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:11:40',
                'updated_at' => '2018-01-22 08:34:06',
                'function_name' => 'index',
            ),
            66 => 
            array (
                'id' => 81,
                'method' => 'get',
                'route' => 'countries/create',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:12:16',
                'updated_at' => '2017-12-25 10:12:16',
                'function_name' => 'create',
            ),
            67 => 
            array (
                'id' => 82,
                'method' => 'patch',
                'route' => 'countries/{id}',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:12:47',
                'updated_at' => '2017-12-25 10:12:47',
                'function_name' => 'update',
            ),
            68 => 
            array (
                'id' => 83,
                'method' => 'get',
                'route' => 'contents/index',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:48:36',
                'updated_at' => '2017-12-25 10:48:36',
                'function_name' => 'index',
            ),
            69 => 
            array (
                'id' => 84,
                'method' => 'get',
                'route' => 'contents/create',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:49:06',
                'updated_at' => '2017-12-25 10:49:06',
                'function_name' => 'create',
            ),
            70 => 
            array (
                'id' => 85,
                'method' => 'patch',
                'route' => 'contents/{id}',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:49:32',
                'updated_at' => '2017-12-25 10:49:32',
                'function_name' => 'update',
            ),
            71 => 
            array (
                'id' => 86,
                'method' => 'get',
                'route' => 'contents/{id}/edit',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:49:51',
                'updated_at' => '2017-12-25 10:49:51',
                'function_name' => 'edit',
            ),
            72 => 
            array (
                'id' => 87,
                'method' => 'post',
                'route' => 'contents',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:50:14',
                'updated_at' => '2017-12-25 10:50:14',
                'function_name' => 'store',
            ),
            73 => 
            array (
                'id' => 88,
                'method' => 'get',
                'route' => 'contents/{id}/delete',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:50:39',
                'updated_at' => '2017-12-25 10:50:39',
                'function_name' => 'destroy',
            ),
            74 => 
            array (
                'id' => 89,
                'method' => 'get',
                'route' => 'fetchtype',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 11:18:41',
                'updated_at' => '2017-12-25 11:21:22',
                'function_name' => 'fetchtype',
            ),
            75 => 
            array (
                'id' => 90,
                'method' => 'get',
                'route' => 'rbts/index',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:29:08',
                'updated_at' => '2017-12-26 10:29:08',
                'function_name' => 'index',
            ),
            76 => 
            array (
                'id' => 91,
                'method' => 'post',
                'route' => 'rbts',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:29:48',
                'updated_at' => '2017-12-26 10:29:48',
                'function_name' => 'store',
            ),
            77 => 
            array (
                'id' => 92,
                'method' => 'get',
                'route' => 'rbts/{id}/edit',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:30:35',
                'updated_at' => '2017-12-26 10:30:35',
                'function_name' => 'edit',
            ),
            78 => 
            array (
                'id' => 93,
                'method' => 'get',
                'route' => 'rbts/create',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:30:54',
                'updated_at' => '2017-12-26 10:30:54',
                'function_name' => 'create',
            ),
            79 => 
            array (
                'id' => 94,
                'method' => 'patch',
                'route' => 'rbts/{id}',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:31:33',
                'updated_at' => '2017-12-26 10:31:33',
                'function_name' => 'update',
            ),
            80 => 
            array (
                'id' => 95,
                'method' => 'get',
                'route' => 'rbts/{id}/delete',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:32:19',
                'updated_at' => '2017-12-26 10:32:19',
                'function_name' => 'destroy',
            ),
            81 => 
            array (
                'id' => 96,
                'method' => 'post',
                'route' => 'posts',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:51:24',
                'updated_at' => '2017-12-26 12:51:24',
                'function_name' => 'store',
            ),
            82 => 
            array (
                'id' => 97,
                'method' => 'get',
                'route' => 'posts/create',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:51:48',
                'updated_at' => '2017-12-26 12:51:48',
                'function_name' => 'create',
            ),
            83 => 
            array (
                'id' => 98,
                'method' => 'get',
                'route' => 'posts/index',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:52:12',
                'updated_at' => '2017-12-26 12:52:12',
                'function_name' => 'index',
            ),
            84 => 
            array (
                'id' => 99,
                'method' => 'get',
                'route' => 'posts/{id}/delete',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:52:41',
                'updated_at' => '2017-12-26 12:52:41',
                'function_name' => 'destroy',
            ),
            85 => 
            array (
                'id' => 100,
                'method' => 'get',
                'route' => 'posts/{id}/edit',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:53:09',
                'updated_at' => '2017-12-26 12:53:09',
                'function_name' => 'edit',
            ),
            86 => 
            array (
                'id' => 101,
                'method' => 'patch',
                'route' => 'posts/{id}',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:54:01',
                'updated_at' => '2017-12-26 12:54:01',
                'function_name' => 'update',
            ),
            87 => 
            array (
                'id' => 113,
                'method' => 'get',
                'route' => 'buildroutes',
                'controller_name' => 'RouteController',
                'created_at' => '2017-12-27 09:02:13',
                'updated_at' => '2017-12-27 09:02:13',
                'function_name' => 'buildroutes',
            ),
            88 => 
            array (
                'id' => 114,
                'method' => 'get',
                'route' => '/',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 08:33:27',
                'updated_at' => '2017-12-31 08:33:27',
                'function_name' => 'homepage',
            ),
            89 => 
            array (
                'id' => 115,
                'method' => 'get',
                'route' => 'audios',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 09:18:25',
                'updated_at' => '2017-12-31 09:18:25',
                'function_name' => 'audios',
            ),
            90 => 
            array (
                'id' => 116,
                'method' => 'get',
                'route' => 'users/new',
                'controller_name' => 'UserController',
                'created_at' => '2017-12-31 09:27:24',
                'updated_at' => '2017-12-31 09:27:24',
                'function_name' => 'create',
            ),
            91 => 
            array (
                'id' => 117,
                'method' => 'get',
                'route' => 'index',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 10:35:15',
                'updated_at' => '2017-12-31 10:35:15',
                'function_name' => 'homepage',
            ),
            92 => 
            array (
                'id' => 118,
                'method' => 'get',
                'route' => 'videos',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 12:18:33',
                'updated_at' => '2017-12-31 12:18:33',
                'function_name' => 'videos',
            ),
            93 => 
            array (
                'id' => 119,
                'method' => 'get',
                'route' => 'photos',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 12:18:50',
                'updated_at' => '2017-12-31 13:38:46',
                'function_name' => 'images',
            ),
            94 => 
            array (
                'id' => 120,
                'method' => 'get',
                'route' => 'audios/{id}',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 12:19:13',
                'updated_at' => '2017-12-31 12:19:13',
                'function_name' => 'audio_page',
            ),
            95 => 
            array (
                'id' => 121,
                'method' => 'get',
                'route' => 'videos_paginate',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 12:47:22',
                'updated_at' => '2017-12-31 12:47:22',
                'function_name' => 'videosPaginate',
            ),
            96 => 
            array (
                'id' => 122,
                'method' => 'get',
                'route' => 'audios_paginate',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 13:15:59',
                'updated_at' => '2017-12-31 13:15:59',
                'function_name' => 'audiosPaginate',
            ),
            97 => 
            array (
                'id' => 123,
                'method' => 'get',
                'route' => 'photos_paginate',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 13:44:13',
                'updated_at' => '2017-12-31 13:44:13',
                'function_name' => 'photos_paginate',
            ),
            98 => 
            array (
                'id' => 124,
                'method' => 'get',
                'route' => 'videos/{id}',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 14:50:26',
                'updated_at' => '2017-12-31 14:50:26',
                'function_name' => 'video_page',
            ),
            99 => 
            array (
                'id' => 125,
                'method' => 'get',
                'route' => 'faq',
                'controller_name' => 'FrontEndController',
                'created_at' => '2017-12-31 15:02:03',
                'updated_at' => '2017-12-31 15:02:03',
                'function_name' => 'faq',
            ),
            100 => 
            array (
                'id' => 126,
                'method' => 'get',
                'route' => 'login',
                'controller_name' => 'FrontEndController',
                'created_at' => '2018-01-01 12:55:03',
                'updated_at' => '2018-01-01 12:55:03',
                'function_name' => 'login',
            ),
            101 => 
            array (
                'id' => 127,
                'method' => 'get',
                'route' => 'register',
                'controller_name' => 'FrontEndController',
                'created_at' => '2018-01-01 13:00:06',
                'updated_at' => '2018-01-01 13:00:06',
                'function_name' => 'register',
            ),
            102 => 
            array (
                'id' => 128,
                'method' => 'get',
                'route' => 'rbt',
                'controller_name' => 'FrontEndController',
                'created_at' => '2018-01-01 13:28:45',
                'updated_at' => '2018-01-01 13:28:45',
                'function_name' => 'rbts',
            ),
            103 => 
            array (
                'id' => 129,
                'method' => 'get',
                'route' => 'rbts_paginate',
                'controller_name' => 'FrontEndController',
                'created_at' => '2018-01-01 13:40:55',
                'updated_at' => '2018-01-01 13:40:55',
                'function_name' => 'rbtsPaginate',
            ),
            104 => 
            array (
                'id' => 130,
                'method' => 'get',
                'route' => 'rbt/{id}',
                'controller_name' => 'FrontEndController',
                'created_at' => '2018-01-01 13:59:57',
                'updated_at' => '2018-01-01 13:59:57',
                'function_name' => 'rbt_page',
            ),
            105 => 
            array (
                'id' => 131,
                'method' => 'get',
                'route' => 'verify',
                'controller_name' => 'FrontEndController',
                'created_at' => '2018-01-09 08:04:03',
                'updated_at' => '2018-01-09 08:04:03',
                'function_name' => 'confirm',
            ),
            106 => 
            array (
                'id' => 132,
                'method' => 'post',
                'route' => 'SearchPost',
                'controller_name' => 'PostController',
                'created_at' => '2018-01-18 12:08:07',
                'updated_at' => '2018-01-18 12:08:07',
                'function_name' => 'searchpost',
            ),
            107 => 
            array (
                'id' => 133,
                'method' => 'post',
                'route' => 'SearchContent',
                'controller_name' => 'ContentController',
                'created_at' => '2018-01-18 12:09:10',
                'updated_at' => '2018-01-18 12:27:33',
                'function_name' => 'searchcontent',
            ),
            108 => 
            array (
                'id' => 134,
                'method' => 'get',
                'route' => 'contents/{id}/list_posts',
                'controller_name' => 'ContentController',
                'created_at' => '2018-01-22 08:44:39',
                'updated_at' => '2018-01-22 08:44:39',
                'function_name' => 'list_posts',
            ),
            109 => 
            array (
                'id' => 135,
                'method' => 'get',
                'route' => 'photo_page',
                'controller_name' => 'FrontEndController',
                'created_at' => '2018-01-24 09:43:31',
                'updated_at' => '2018-01-24 09:43:31',
                'function_name' => 'photopage',
            ),
        ));
        
        
    }
}
