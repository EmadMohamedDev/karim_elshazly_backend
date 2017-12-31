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
                'id' => 2,
                'method' => 'get',
                'route' => 'users/new',
                'controller_name' => 'UserController ',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            2 => 
            array (
                'id' => 3,
                'method' => 'post',
                'route' => 'users',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            3 => 
            array (
                'id' => 4,
                'method' => 'get',
                'route' => 'dashboard',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-12-26 13:28:17',
                'function_name' => 'index',
            ),
            4 => 
            array (
                'id' => 6,
                'method' => 'get',
                'route' => 'user_profile',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'profile',
            ),
            5 => 
            array (
                'id' => 7,
                'method' => 'post',
                'route' => 'user_profile/updatepassword',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:01',
                'function_name' => 'UpdatePassword',
            ),
            6 => 
            array (
                'id' => 8,
                'method' => 'post',
                'route' => 'user_profile/updateprofilepic',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:08',
                'function_name' => 'UpdateProfilePicture',
            ),
            7 => 
            array (
                'id' => 9,
                'method' => 'post',
                'route' => 'user_profile/updateuserdata',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:19',
                'function_name' => 'UpdateNameAndEmail',
            ),
            8 => 
            array (
                'id' => 10,
                'method' => 'get',
                'route' => 'users/{id}/delete',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-15 08:34:32',
                'function_name' => 'destroy',
            ),
            9 => 
            array (
                'id' => 11,
                'method' => 'get',
                'route' => 'users/{id}/edit',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:40',
                'function_name' => 'edit',
            ),
            10 => 
            array (
                'id' => 12,
                'method' => 'post',
                'route' => 'users/{id}/update',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:49',
                'function_name' => 'update',
            ),
            11 => 
            array (
                'id' => 14,
                'method' => 'get',
                'route' => 'static_translation',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:57',
                'function_name' => 'index',
            ),
            12 => 
            array (
                'id' => 15,
                'method' => 'get',
                'route' => 'setting',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            13 => 
            array (
                'id' => 16,
                'method' => 'get',
                'route' => 'setting/new',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            14 => 
            array (
                'id' => 17,
                'method' => 'get',
                'route' => 'setting/{id}/delete',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            15 => 
            array (
                'id' => 18,
                'method' => 'get',
                'route' => 'setting/{id}/edit',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            16 => 
            array (
                'id' => 19,
                'method' => 'post',
                'route' => 'setting/{id}/update',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            17 => 
            array (
                'id' => 20,
                'method' => 'post',
                'route' => 'setting',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            18 => 
            array (
                'id' => 21,
                'method' => 'get',
                'route' => 'file_manager',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'file_manager',
            ),
            19 => 
            array (
                'id' => 22,
                'method' => 'get',
                'route' => 'upload_items',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'multi_upload',
            ),
            20 => 
            array (
                'id' => 23,
                'method' => 'post',
                'route' => 'save_items',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'save_uploaded',
            ),
            21 => 
            array (
                'id' => 24,
                'method' => 'get',
                'route' => 'upload_resize',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'upload_resize',
            ),
            22 => 
            array (
                'id' => 25,
                'method' => 'post',
                'route' => 'save_image',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'save_image',
            ),
            23 => 
            array (
                'id' => 26,
                'method' => 'post',
                'route' => 'static_translation/{id}/update',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-12 12:19:46',
                'function_name' => 'update',
            ),
            24 => 
            array (
                'id' => 27,
                'method' => 'get',
                'route' => 'static_translation/{id}/delete',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            25 => 
            array (
                'id' => 28,
                'method' => 'get',
                'route' => 'language/{id}/delete',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            26 => 
            array (
                'id' => 29,
                'method' => 'post',
                'route' => 'language/{id}/update',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            27 => 
            array (
                'id' => 30,
                'method' => 'get',
                'route' => 'roles',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            28 => 
            array (
                'id' => 31,
                'method' => 'get',
                'route' => 'roles/new',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            29 => 
            array (
                'id' => 32,
                'method' => 'post',
                'route' => 'roles',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            30 => 
            array (
                'id' => 33,
                'method' => 'get',
                'route' => 'roles/{id}/delete',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            31 => 
            array (
                'id' => 34,
                'method' => 'get',
                'route' => 'roles/{id}/edit',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            32 => 
            array (
                'id' => 35,
                'method' => 'post',
                'route' => 'roles/{id}/update',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            33 => 
            array (
                'id' => 36,
                'method' => 'get',
                'route' => 'language',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            34 => 
            array (
                'id' => 37,
                'method' => 'get',
                'route' => 'language/create',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            35 => 
            array (
                'id' => 38,
                'method' => 'post',
                'route' => 'language',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            36 => 
            array (
                'id' => 39,
                'method' => 'get',
                'route' => 'language/{id}/edit',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            37 => 
            array (
                'id' => 40,
                'method' => 'get',
                'route' => 'routes',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            38 => 
            array (
                'id' => 41,
                'method' => 'post',
                'route' => 'routes',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            39 => 
            array (
                'id' => 42,
                'method' => 'get',
                'route' => 'routes/{id}/edit',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            40 => 
            array (
                'id' => 43,
                'method' => 'post',
                'route' => 'routes/{id}/update',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            41 => 
            array (
                'id' => 44,
                'method' => 'get',
                'route' => 'routes/{id}/delete',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            42 => 
            array (
                'id' => 45,
                'method' => 'get',
                'route' => 'routes/create',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            43 => 
            array (
                'id' => 57,
                'method' => 'get',
                'route' => 'routes/index_v2',
                'controller_name' => 'RouteController',
                'created_at' => '2017-11-12 13:45:15',
                'updated_at' => '2017-11-12 14:04:53',
                'function_name' => 'index_v2',
            ),
            44 => 
            array (
                'id' => 58,
                'method' => 'get',
                'route' => 'roles/{id}/view_access',
                'controller_name' => 'RoleController',
                'created_at' => '2017-11-14 10:56:14',
                'updated_at' => '2017-11-15 08:14:14',
                'function_name' => 'view_access',
            ),
            45 => 
            array (
                'id' => 59,
                'method' => 'get',
                'route' => 'types/{id}/delete',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:51:02',
                'updated_at' => '2017-12-25 08:51:02',
                'function_name' => 'destroy',
            ),
            46 => 
            array (
                'id' => 60,
                'method' => 'post',
                'route' => 'types',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:51:30',
                'updated_at' => '2017-12-25 08:51:30',
                'function_name' => 'store',
            ),
            47 => 
            array (
                'id' => 61,
                'method' => 'get',
                'route' => 'types/{id}/edit',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:51:55',
                'updated_at' => '2017-12-25 08:51:55',
                'function_name' => 'edit',
            ),
            48 => 
            array (
                'id' => 62,
                'method' => 'patch',
                'route' => 'types/{id}',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:52:26',
                'updated_at' => '2017-12-25 08:52:26',
                'function_name' => 'update',
            ),
            49 => 
            array (
                'id' => 63,
                'method' => 'get',
                'route' => 'types/create',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:53:05',
                'updated_at' => '2017-12-25 08:53:05',
                'function_name' => 'create',
            ),
            50 => 
            array (
                'id' => 64,
                'method' => 'get',
                'route' => 'types/index',
                'controller_name' => 'TypeController',
                'created_at' => '2017-12-25 08:53:24',
                'updated_at' => '2017-12-25 08:53:24',
                'function_name' => 'index',
            ),
            51 => 
            array (
                'id' => 65,
                'method' => 'get',
                'route' => 'categories/index',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:14:04',
                'updated_at' => '2017-12-25 09:14:04',
                'function_name' => 'index',
            ),
            52 => 
            array (
                'id' => 66,
                'method' => 'get',
                'route' => 'categories/create',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:14:25',
                'updated_at' => '2017-12-25 09:14:25',
                'function_name' => 'create',
            ),
            53 => 
            array (
                'id' => 67,
                'method' => 'patch',
                'route' => 'categories/{id}',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:14:45',
                'updated_at' => '2017-12-25 09:14:45',
                'function_name' => 'update',
            ),
            54 => 
            array (
                'id' => 68,
                'method' => 'get',
                'route' => 'categories/{id}/edit',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:15:11',
                'updated_at' => '2017-12-25 09:15:11',
                'function_name' => 'edit',
            ),
            55 => 
            array (
                'id' => 69,
                'method' => 'post',
                'route' => 'categories',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:15:33',
                'updated_at' => '2017-12-25 09:15:33',
                'function_name' => 'store',
            ),
            56 => 
            array (
                'id' => 70,
                'method' => 'get',
                'route' => 'categories/{id}/delete',
                'controller_name' => 'CategoryController',
                'created_at' => '2017-12-25 09:16:01',
                'updated_at' => '2017-12-25 09:16:01',
                'function_name' => 'destroy',
            ),
            57 => 
            array (
                'id' => 71,
                'method' => 'patch',
                'route' => 'operators/{id}',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:25:21',
                'updated_at' => '2017-12-25 09:25:21',
                'function_name' => 'update',
            ),
            58 => 
            array (
                'id' => 72,
                'method' => 'get',
                'route' => 'operators/create',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:25:46',
                'updated_at' => '2017-12-25 09:25:46',
                'function_name' => 'create',
            ),
            59 => 
            array (
                'id' => 73,
                'method' => 'get',
                'route' => 'operators/index',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:26:12',
                'updated_at' => '2017-12-25 09:26:12',
                'function_name' => 'index',
            ),
            60 => 
            array (
                'id' => 74,
                'method' => 'post',
                'route' => 'operators',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:26:36',
                'updated_at' => '2017-12-25 09:26:36',
                'function_name' => 'store',
            ),
            61 => 
            array (
                'id' => 75,
                'method' => 'get',
                'route' => 'operators/{id}/edit',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:26:58',
                'updated_at' => '2017-12-25 09:26:58',
                'function_name' => 'edit',
            ),
            62 => 
            array (
                'id' => 76,
                'method' => 'get',
                'route' => 'operators/{id}/delete',
                'controller_name' => 'OperatorController',
                'created_at' => '2017-12-25 09:28:10',
                'updated_at' => '2017-12-25 09:28:10',
                'function_name' => 'destroy',
            ),
            63 => 
            array (
                'id' => 77,
                'method' => 'get',
                'route' => 'countries/{id}/delete',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:10:10',
                'updated_at' => '2017-12-25 10:10:10',
                'function_name' => 'destroy',
            ),
            64 => 
            array (
                'id' => 78,
                'method' => 'get',
                'route' => 'countries/{id}/edit',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:10:39',
                'updated_at' => '2017-12-25 10:10:39',
                'function_name' => 'edit',
            ),
            65 => 
            array (
                'id' => 79,
                'method' => 'post',
                'route' => 'countries',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:11:13',
                'updated_at' => '2017-12-25 10:11:13',
                'function_name' => 'store',
            ),
            66 => 
            array (
                'id' => 80,
                'method' => 'get',
                'route' => 'countries/index',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:11:40',
                'updated_at' => '2017-12-25 10:11:40',
                'function_name' => 'index',
            ),
            67 => 
            array (
                'id' => 81,
                'method' => 'get',
                'route' => 'countries/create',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:12:16',
                'updated_at' => '2017-12-25 10:12:16',
                'function_name' => 'create',
            ),
            68 => 
            array (
                'id' => 82,
                'method' => 'patch',
                'route' => 'countries/{id}',
                'controller_name' => 'CountryController',
                'created_at' => '2017-12-25 10:12:47',
                'updated_at' => '2017-12-25 10:12:47',
                'function_name' => 'update',
            ),
            69 => 
            array (
                'id' => 83,
                'method' => 'get',
                'route' => 'contents/index',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:48:36',
                'updated_at' => '2017-12-25 10:48:36',
                'function_name' => 'index',
            ),
            70 => 
            array (
                'id' => 84,
                'method' => 'get',
                'route' => 'contents/create',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:49:06',
                'updated_at' => '2017-12-25 10:49:06',
                'function_name' => 'create',
            ),
            71 => 
            array (
                'id' => 85,
                'method' => 'patch',
                'route' => 'contents/{id}',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:49:32',
                'updated_at' => '2017-12-25 10:49:32',
                'function_name' => 'update',
            ),
            72 => 
            array (
                'id' => 86,
                'method' => 'get',
                'route' => 'contents/{id}/edit',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:49:51',
                'updated_at' => '2017-12-25 10:49:51',
                'function_name' => 'edit',
            ),
            73 => 
            array (
                'id' => 87,
                'method' => 'post',
                'route' => 'contents',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:50:14',
                'updated_at' => '2017-12-25 10:50:14',
                'function_name' => 'store',
            ),
            74 => 
            array (
                'id' => 88,
                'method' => 'get',
                'route' => 'contents/{id}/delete',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 10:50:39',
                'updated_at' => '2017-12-25 10:50:39',
                'function_name' => 'destroy',
            ),
            75 => 
            array (
                'id' => 89,
                'method' => 'get',
                'route' => 'fetchtype',
                'controller_name' => 'ContentController',
                'created_at' => '2017-12-25 11:18:41',
                'updated_at' => '2017-12-25 11:21:22',
                'function_name' => 'fetchtype',
            ),
            76 => 
            array (
                'id' => 90,
                'method' => 'get',
                'route' => 'rbts/index',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:29:08',
                'updated_at' => '2017-12-26 10:29:08',
                'function_name' => 'index',
            ),
            77 => 
            array (
                'id' => 91,
                'method' => 'post',
                'route' => 'rbts',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:29:48',
                'updated_at' => '2017-12-26 10:29:48',
                'function_name' => 'store',
            ),
            78 => 
            array (
                'id' => 92,
                'method' => 'get',
                'route' => 'rbts/{id}/edit',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:30:35',
                'updated_at' => '2017-12-26 10:30:35',
                'function_name' => 'edit',
            ),
            79 => 
            array (
                'id' => 93,
                'method' => 'get',
                'route' => 'rbts/create',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:30:54',
                'updated_at' => '2017-12-26 10:30:54',
                'function_name' => 'create',
            ),
            80 => 
            array (
                'id' => 94,
                'method' => 'patch',
                'route' => 'rbts/{id}',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:31:33',
                'updated_at' => '2017-12-26 10:31:33',
                'function_name' => 'update',
            ),
            81 => 
            array (
                'id' => 95,
                'method' => 'get',
                'route' => 'rbts/{id}/delete',
                'controller_name' => 'RbtController',
                'created_at' => '2017-12-26 10:32:19',
                'updated_at' => '2017-12-26 10:32:19',
                'function_name' => 'destroy',
            ),
            82 => 
            array (
                'id' => 96,
                'method' => 'post',
                'route' => 'posts',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:51:24',
                'updated_at' => '2017-12-26 12:51:24',
                'function_name' => 'store',
            ),
            83 => 
            array (
                'id' => 97,
                'method' => 'get',
                'route' => 'posts/create',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:51:48',
                'updated_at' => '2017-12-26 12:51:48',
                'function_name' => 'create',
            ),
            84 => 
            array (
                'id' => 98,
                'method' => 'get',
                'route' => 'posts/index',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:52:12',
                'updated_at' => '2017-12-26 12:52:12',
                'function_name' => 'index',
            ),
            85 => 
            array (
                'id' => 99,
                'method' => 'get',
                'route' => 'posts/{id}/delete',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:52:41',
                'updated_at' => '2017-12-26 12:52:41',
                'function_name' => 'destroy',
            ),
            86 => 
            array (
                'id' => 100,
                'method' => 'get',
                'route' => 'posts/{id}/edit',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:53:09',
                'updated_at' => '2017-12-26 12:53:09',
                'function_name' => 'edit',
            ),
            87 => 
            array (
                'id' => 101,
                'method' => 'patch',
                'route' => 'posts/{id}',
                'controller_name' => 'PostController',
                'created_at' => '2017-12-26 12:54:01',
                'updated_at' => '2017-12-26 12:54:01',
                'function_name' => 'update',
            ),
            88 => 
            array (
                'id' => 113,
                'method' => 'get',
                'route' => 'buildroutes',
                'controller_name' => 'RouteController',
                'created_at' => '2017-12-27 09:02:13',
                'updated_at' => '2017-12-27 09:02:13',
                'function_name' => 'buildroutes',
            ),
        ));
        
        
    }
}
