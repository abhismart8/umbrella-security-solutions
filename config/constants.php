<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Level Constants
    |--------------------------------------------------------------------------
    |
    | These constants are used throught application and are present in database
    | too. To add/remove a constant, make sure to check database and add/remove
    | in database accordingly. Also, check JSON template files.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Branding Settings
    |--------------------------------------------------------------------------
    */

    'brand' => [
        'company_name_abbr' => env('COMPANY_NAME_ABBR', "uss"),
        'company_name' => env('COMPANY_NAME', "Umbrella Solutions"),
        'company_full_name' => env('COMPANY_FULL_NAME', "Umbrella Security Solutions"),
        'company_tag_line' => env('COMPANY_TAG_LINE', "One Stop Solution For Electronic Security"),

        'company_main_link' => env('COMPANY_MAIN_LINK', "https://www.umbrellasolutions.in/"),

        'company_privacy_link' => env('COMPANY_PRIVACY_LINK', "https://www.umbrellasolutions.in/privacy-policy/"),
        'company_legal_link' => env('COMPANY_LEGAL_LINK', "https://www.umbrellasolutions.in/terms-and-conditions/"),
        'company_contact_us_link' => env('COMPANY_CONTACT_US_LINK', "https://www.umbrellasolutions.in/contact-us/"),

        'company_logo_dark' => env('COMPANY_LOGO_DARK', "images/umbrella-logo.png"),
        'company_logo_light' => env('COMPANY_LOGO_LIGHT', "images/umbrella-logo.png"),

        'favicon_32' => env('FAVICON_32', "images/favicon/favicon-32x32.png"),
        'favicon_64' => env('FAVICON_64', "images/favicon/favicon-64x64.png"),
        'favicon_128' => env('FAVICON_128', "images/favicon/favicon-128x128.png"),
        'favicon_256' => env('FAVICON_256', "images/favicon/favicon-256x256.png"),

        'google_captcha_site_key' => env("GOOGLE_CAPTCHA_SITE_KEY", ""),     
    ],
];