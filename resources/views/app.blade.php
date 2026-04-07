<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}" />


    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/hope-ui.min.css?v=2.0.0') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css?v=2.0.0') }}" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark.min.css') }}" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/customizer.min.css') }}" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.min.css') }}" />

    @vite('resources/js/app.js')
    @inertiaHead

</head>
<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    @inertia

    <!-- Library Bundle Script -->
    {{-- <script src="{{ asset('assets/js/core/libs.min.js') }}"></script> --}}

    <!-- External Library Bundle Script -->
    {{-- <script src="{{ asset('assets/js/core/external.min.js') }}"></script> --}}

    <!-- App Script -->
    {{-- <script src="{{ asset('assets/js/hope-ui.js') }}" defer></script> --}}

</body>
</html>
