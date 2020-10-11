<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],
        ],

        'posts' => [
            'create' => 'Create Post',
            'edit' => 'Edit Post',
            'delete' => 'Delete Post',
            'management' => 'Post Management',

            'table' => [
                'number_of_posts' => 'Number of Posts',
                'title' => 'Title',
                'description' => 'Description',
                'content' => 'Post Content',
                'authur' => 'Authur',
                'featured' => 'Featured',
                'status' => 'Status',
                'comment' => 'Comment',
                'last_update' => 'Last Update',
                'total' => 'Post total|Post total',
            ],

            'status' => [
                'draft' => 'Draft',
                'publish' => 'Published',
                'unpublish' => 'Unpublished'
            ],
        ],

        'categories' => [
            'create' => 'Create Category',
            'edit' => 'Edit Category',
            'delete' => 'Delete Category',
            'management' => 'Category Management',
            'category_actions' => 'User Actions',

            'table' => [
                'number' => 'S/N',
                'name' => 'Name',
                'slug' => 'Slug',
                'description' => 'Description',
                'featured' => 'Featured',
                'total' => 'category total|categories total',
                'last_updated' => 'Last Updated',
            ],
        ],

        'tags' => [
            'create' => 'Create Tag',
            'edit' => 'Edit Tag',
            'delete' => 'Delete Tag',
            'management' => 'Post Category Management',
            'category_actions' => 'User Actions',

            'table' => [
                'number' => 'S/N',
                'name' => 'Name',
                'description' => 'Description',
                'total' => 'Tag total|Tags total',
                'last_updated' => 'Last Updated',
            ],
        ],


        'services' => [
            'create' => 'Create Service',
            'edit' => 'Edit Service',
            'delete' => 'Delete Service',
            'management' => 'Service Management',
            'service_actions' => 'User Actions',

            'table' => [
                'number' => 'S/N',
                'name' => 'Name',
                'description' => 'Description',
                'total' => 'Service total|Services total',
                'last_updated' => 'Last Updated',
            ],
        ],

        'departments' => [
            'create' => 'Create Department',
            'edit' => 'Edit Department',
            'delete' => 'Delete Department',
            'management' => 'Department Management',
            'department_actions' => 'User Actions',

            'table' => [
                'number' => 'S/N',
                'name' => 'Name',
                'code' => 'Code',
                'description' => 'Description',
                'total' => 'Department total|Departments total',
                'last_updated' => 'Last Updated',
            ],
        ],

        'employees' => [
            'create' => 'Create Employee',
            'edit' => 'Edit Employee',
            'delete' => 'Delete Employee',
            'management' => 'Employee Management',
            'Employee_actions' => 'User Actions',

            'table' => [
                'number' => 'S/N',
                'name' => 'Name',
                'department' => 'Department',
                'position' => 'Position',
                'doj' => 'DOJ',
                'dol' => 'DOL',
                'total' => 'Employee total|Employees total',
                'last_updated' => 'Last Updated',
            ],
        ],

        'newsletters' => [
            'create' => 'Create Newsletter',
            'edit' => 'Edit Newsletter',
            'delete' => 'Delete Newsletter',
            'management' => 'Newsletter Management',
            'Employee_actions' => 'User Actions',

            'table' => [
                'number' => 'S/N',
                'title' => 'Title',
                'subscribers' => 'Subscribers',
                'user_id' => 'Created by',
                'total' => 'Newsletter total|Newsletters total',
                'last_updated' => 'Last Updated',
            ],
        ],

        'customers' => [
            'create' => 'Create Customer',
            'edit' => 'Edit Customer',
            'delete' => 'Delete Customer',
            'management' => 'Customer Management',
            'customer_actions' => 'User Actions',

            'table' => [
                'number' => 'S/N',
                'name' => 'Name',
                'type' => 'Type',
                'email' => 'Email',
                'dob' => 'Date of Birth',
                'email' => 'Email',
                'phone' => 'Phone',
                'total' => 'Customer total|Customers total',
                'last_updated' => 'Last Updated',
            ],
        ],

    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],
    ],
];
