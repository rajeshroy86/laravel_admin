<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.partials.head')
</head>
 <body>
  @include('layout.partials.sidebar')
  <div class="col-sm-12" id="app">
	@yield('content')

@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</div>
 </body>
</html>
