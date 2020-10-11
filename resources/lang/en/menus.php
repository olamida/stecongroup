<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */


    'backend' => [
        'access' => [
            'title' => 'Access',

            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles',
            ],

            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
                'view' => 'View User',
            ],
        ],

        'posts' => [
                'all' => 'All Posts',
                'create' => 'Create Post',
                'edit' => 'Edit Post',
                'show' => 'Show Post',
                'management' => 'Post Management',
                'main' => 'Posts',
        ],

        'categories' => [
                'all' => 'All Categories',
                'create' => 'Create Category',
                'edit' => 'Edit Category',
                'management' => 'Post Category Management',
                'main' => 'Categories',
        ],

        'events' => [
                'all' => 'All Events',
                'create' => 'Create Event',
                'edit' => 'Edit Event',
                'management' => 'Event Management',
                'main' => 'Events',
        ],

        'services' => [
                'all' => 'All Services',
                'create' => 'Create Service',
                'edit' => 'Edit Service',
                'management' => 'Service Management',
                'main' => 'Services',
        ],

        'departments' => [
                'all' => 'All Departments',
                'create' => 'Create Department',
                'edit' => 'Edit Department',
                'management' => 'Department Management',
                'main' => 'Departments',
        ],

        'employees' => [
                'all' => 'All Employees',
                'create' => 'Create Employee',
                'edit' => 'Edit Employee',
                'management' => 'Employee Management',
                'main' => 'Employees',
        ],

        'customers' => [
                'all' => 'All Customers',
                'create' => 'Create Customer',
                'edit' => 'Edit Customer',
                'management' => 'Customer Management',
                'main' => 'Customers',
        ],

        'newsletters' => [
                'all' => 'All Newsletters',
                'create' => 'Create Newsletter',
                'edit' => 'Edit Newsletter',
                'management' => 'Newsletter Management',
                'main' => 'Newsletters',

                'subscribe' => 'Add Subscribers',
                'unsubscribe' => 'Remove Subscriber',
                'create_campaign' => 'Create Campaign',

        ],

        'campaigns' => [
                'all' => 'All Campaigns',
                'create' => 'Create Campaign',
                'edit' => 'Edit Campaign',
                'management' => 'Campaign Management',
                'main' => 'Campaign',

        ],

        //office: post, event, appointment, project, task, newsletter
        //hr: position, employee, attendance
        //customers: order, product, category, promotion, discount, delivery
        'office' => [
            'main' => 'Office Work',
            'post' => 'Posts',
            'event' => 'Events',
            'appointment' => 'Appointments',
            'project' => 'Projects',
            //todo or task or work
            'task' => 'Tasks',
            'newsletter' => 'Newsletter',
        ],

        'human-resource' => [
            'main' => 'Human Resource',
            'position' => 'Positions',
            'employee' => 'Employees',
            'attendance' => 'Attendance',
        ],

        'customers' => [
            'main' => 'Customers',
            'order' => 'Orders',
            'product' => 'Products',
            'category' => 'Categories',
            'promotion' => 'Product Promotion',
            'discount' => 'Discount',
            'delivery' => 'Delivery',

            'all' => 'All Customers',
                'create' => 'Create Customer',
                'edit' => 'Edit Customer',
                'management' => 'Customer Management',
                'main' => 'Customers',

        ],

        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs',
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'General',
            'history' => 'History',
            'system' => 'System',
            'office' => 'Office',
        ],
    ],

    'language-picker' => [
        'language' => 'Language',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'az' => 'Azerbaijan',
            'zh' => 'Chinese Simplified',
            'zh-TW' => 'Chinese Traditional',
            'da' => 'Danish',
            'de' => 'German',
            'el' => 'Greek',
            'en' => 'English',
            'es' => 'Spanish',
            'fa' => 'Persian',
            'fr' => 'French',
            'he' => 'Hebrew',
            'id' => 'Indonesian',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'nl' => 'Dutch',
            'no' => 'Norwegian',
            'pt_BR' => 'Brazilian Portuguese',
            'ru' => 'Russian',
            'sv' => 'Swedish',
            'th' => 'Thai',
            'tr' => 'Turkish',
            'uk' => 'Ukrainian',
        ],
    ],
];
