<!DOCTYPE html>
<html>
  @include('inc.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('inc.nav')
  @include('inc.side')
  <div class="content-wrapper text-sm bg-info">
@yield('content')
  </div>
  @include('inc.footer')
</body>
</html>
