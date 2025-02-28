
<meta charset="utf-8">
    <!-- Stylesheets -->
    <link href="{{ asset('siteassets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('siteassets/css/style.css') }}" rel="stylesheet">
    @if (app()->currentLocale() == 'ar')
        <link href="{{ asset('siteassets/css/rtl.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('siteassets/css/responsive.css') }}" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="{{ asset('siteassets/css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('siteassets/css/color-themes/default-theme.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('siteassets/images/favicon.png') }}') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('siteassets/images/favicon.png') }}') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="j/respond.js"></script><![endif]-->

    <style>
        html {
            scroll-behavior: smooth; /* يجعل النزول سلسًا */
        }
        .hidden {
            display: none;
        }

        .logo {
            background-color: #004cda; /* تعيين الخلفية باللون الأزرق */
            padding: 10px 20px; /* إضافة مسافة داخلية */
            display: inline-block;
            border-radius: 5px; /* حواف دائرية قليلاً */
        }

        .logo-text {
            font-size: 36px;
            font-weight: bold;
            color: white; /* CARE باللون الأبيض */
            text-transform: uppercase;
            position: relative;
            top: 12px;
        }

        .logo-text .net {
            color: black; /* NET باللون الأسود */
        }

        .logo1 {
            background-color: white; /* تعيين الخلفية باللون الأزرق */
            padding: 10px 20px; /* إضافة مسافة داخلية */
            display: inline-block;
            border-radius: 5px; /* حواف دائرية قليلاً */
        }

        .logo-text1 {
            font-size: 36px;
            font-weight: bold;
            color: #004cda; /* CARE باللون الأبيض */
            text-transform: uppercase;
            position: relative;
            top: 12px;
        }

        .logo-text1 .net1 {
            color: black; /* NET باللون الأسود */
        }
    </style>