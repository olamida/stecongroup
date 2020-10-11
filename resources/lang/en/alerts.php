<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'The role was successfully created.',
            'deleted' => 'The role was successfully deleted.',
            'updated' => 'The role was successfully updated.',
        ],

        'users' => [
            'cant_resend_confirmation' => 'The application is currently set to manually approve users.',
            'confirmation_email' => 'A new confirmation e-mail has been sent to the address on file.',
            'confirmed' => 'The user was successfully confirmed.',
            'created' => 'The user was successfully created.',
            'deleted' => 'The user was successfully deleted.',
            'deleted_permanently' => 'The user was deleted permanently.',
            'restored' => 'The user was successfully restored.',
            'session_cleared' => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated' => 'The user was successfully updated.',
            'updated_password' => "The user's password was successfully updated.",
        ],

        'posts' => [
            'created' => 'The Post was successfully created.',
            'deleted' => 'The Post was successfully deleted.',
            'updated' => 'The Post was successfully updated.',
        ],

        'categories' => [
            'created' => 'The Category was successfully created.',
            'deleted' => 'The Category was successfully deleted.',
            'updated' => 'The Category was successfully updated.',
        ],

        'tags' => [
            'created' => 'The Tag was successfully created.',
            'deleted' => 'The Tag was successfully deleted.',
            'updated' => 'The Tag was successfully updated.',
        ],

        'services' => [
            'created' => 'The Service was successfully created.',
            'deleted' => 'The Service was successfully deleted.',
            'updated' => 'The Service was successfully updated.',
        ],

        'departments' => [
            'created' => 'The Department was successfully created.',
            'deleted' => 'The Department was successfully deleted.',
            'updated' => 'The Department was successfully updated.',
        ],

        'newsletters' => [
            'created' => 'The Newsletter was successfully created.',
            'deleted' => 'The Newsletter was successfully deleted.',
            'updated' => 'The Newsletter was successfully updated.',
            'email_exist' => 'Subscription fail, because The Email already exist.',
            'subscribe_success' => 'Subscription was successful.',
        ],

        'customers' => [
            'created' => 'The Customer was successfully created.',
            'deleted' => 'The Customer was successfully deleted.',
            'updated' => 'The Customer was successfully updated.',
        ],

        'campaigns' => [
            'created' => 'The Campagin was successfully created.',
            'deleted' => 'The Campaign was successfully deleted.',
            'updated' => 'The Campaign was successfully updated.',
        ],
    ],

    'frontend' => [
        'contact' => [
            'sent' => 'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.',
        ],
    ],
];
