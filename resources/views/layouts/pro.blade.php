<!DOCTYPE html>
<html>
  @include('inc.head')
<body>
  <div class="wrapper">
  @include('inc.nav')
  <div class="content-wrapper text-sm bg-info">
    @yield('content')
  </div>
  @include('inc.footer')
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"
></script>

<script src="{{ asset('/js/index.js') }}"></script>
</body>
</html>
