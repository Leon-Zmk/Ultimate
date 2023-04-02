<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset("adminassets/plugins/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("adminassets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
   <link rel="stylesheet" href="{{asset("adminassets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
   <link rel="stylesheet" href="{{asset("adminassets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
   <link rel="stylesheet" href="{{asset("adminassets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
   <link rel="stylesheet" href="{{asset("adminassets/css/adminlte.min.css")}}">
    <title>@yield("title")</title>
</head>
<body>

    @include("dashboard.layouts.header")

    @include("dashboard.layouts.sidebar")

    @yield("contents");


    @include("dashboard.layouts.footer");
    

   <!-- jQuery -->
<script src={{asset("adminassets/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("adminassets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- overlayScrollbars -->
<script src={{asset("adminassets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("adminassets/js/adminlte.min.js")}}></script>


@stack("js")
</body>
</html>