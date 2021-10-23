<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title') | Bầu Trời Xanh</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="/back-end/css/admin/bootstrap.min.css" />
    <link rel="stylesheet" href="/back-end/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/back-end/css/admin/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="/back-end/css/admin/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="/back-end/css/admin/ace-skins.min.css" />
    <link rel="stylesheet" href="/back-end/css/admin/ace-rtl.min.css" />
    <script src="/back-end/js/admin/ace-extra.min.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body class="no-skin">

    @include('admin.layout.Header')

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>

        <div id="sidebar" class="sidebar responsive ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {}
            </script>

            @include('admin.layout.Sidebar')
            
            <div class="main-content">
                <div class="main-content-inner">
                   
                @include('admin.layout.Search')

                    <div class="page-content">
                        <div>
                            @yield('body')
                        </div>

                    </div>
                </div>
            </div>

            @include('admin.layout.Footer')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>

        <script src="/back-end/js/admin/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement) document.write("<script src='/back-end/js/admin/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="/back-end/js/admin/bootstrap.min.js"></script>
        <script src="/back-end/js/admin/ace.min.js"></script>
        @yield('scripts')
</body>
</html>