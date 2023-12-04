
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6065685718643238"
     crossorigin="anonymous"></script>
    @yield('title')
    @include('admin.layout.link_css')

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    @include('admin.layout.header')
    @include('admin.layout.side-bar')
    <div class="page-wrapper">
    <div class="content container-fluid" style="padding-left: 0px;">
            @yield('content')
        </div>
    </div>
</div>
@include('admin.layout.link_js')
@yield('js_location')
</body>
</html>
