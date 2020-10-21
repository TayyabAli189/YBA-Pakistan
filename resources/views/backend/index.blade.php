<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>YBA_Pakistan</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{asset('assets/backend/dist/img/g1.png')}}">
@includeIf('backend.include.styles')
@stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @includeIf('backend.include.nav')
{{--    @includeIf('backend.include.sidebar_backup')--}}
    @includeIf('backend.include.sidebar')
    @yield('content')
    @includeIf('backend.include.footer')
</div>

@includeIf('backend.include.scripts')

@stack('scripts')
</body>
</html>
