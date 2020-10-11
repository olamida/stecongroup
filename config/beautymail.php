<?php

return [

    // These CSS rules will be applied after the regular template CSS

    /*
        'css' => [
            '.button-content .button { background: red }',
        ],
    */

    'colors' => [

        //'highlight' => '#004ca3',2ecc71
        'highlight' => '#2ecc71',
        'button'    => '#2ecc71',

    ],

    'view' => [
        'senderName'  => 'Stecongroup Nig. Ltd',
        'reminder'    => null,
        'unsubscribe' => null,
        'address'     => null,

        'logo'        => [
            //url('/vendor/beautymail/assets/images/sunny/stecon-logo.png')
            //'path'   => '%PUBLIC%/vendor/beautymail/assets/images/sunny/stecon-logo.png',
            //public_path() . '/uploads'
            //glob(base_path('breadcrumbs/*.php'))
            //PHP_SAPI === 'cli' ? false : url('/fb-callback-path'),
            //'path'   => public_path().'/vendor/beautymail/assets/images/sunny/stecon-logo.png',
            //'path'   => "%APP_URL%/public/vendor/beautymail/assets/images/sunny/stecon-logo.png",
            //Config('app.url').'/vendor/js/tinymce/tinymce.min.js',

            'path'   => PHP_SAPI === 'cli' ? false : url('/vendor/beautymail/assets/images/sunny/stecon-logo.png'),
            'width'  => '',
            'height' => '',
        ],

        'twitter'  => null,
        'facebook' => null,
        'flickr'   => null,
    ],

];
