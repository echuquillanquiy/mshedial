<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> HEDIAL </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/assets/img/favicon.ico') }}"/>
    @include('hedial.common.styles')

</head>
<body class="alt-menu sidebar-noneoverflow">
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
@include('hedial.common.header')
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container-fluid" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN TOPBAR  -->
    @include('hedial.common.topbar')
    <!--  END TOPBAR  -->

    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-container-fluid">
        <div class="layout-px-spacing">

            @yield('content')

        </div>
    </div>
    <!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->

@include('hedial.common.scripts')
</body>
</html>
