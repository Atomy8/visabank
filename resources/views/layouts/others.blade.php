<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if (!empty($title) && ($title == 'home'))
        <title> Visa Microfinance - Banking and Loan made easy </title>
    @else
        <title> h - Visa Microfinance </title>
@endif
<!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->
    <link href="{{asset('assets/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- /All CSS -->

</head>

<body>



@yield('content')



<!-- JS -->
<script src="{{asset('assets/js/vendors.js')}}" defer></script>
<script src="{{asset('assets/js/plugins.js')}}" defer></script>
<script src="{{asset('assets/js/main.js')}}" defer></script>
<!-- /JS -->

</body>

</html>
