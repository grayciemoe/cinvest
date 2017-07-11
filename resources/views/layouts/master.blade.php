<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
   <body class="page-index has-hero">
   @include('layouts.topnav')
   @include('layouts.nav')
   @yield('content')
   @include('layouts.footer')
  </body>
</html>
