<!DOCTYPE html>
<html>
<head>
  <!-- JQuery -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
  <script src="js/jquery.cookie.js"></script>

  <!-- My Javascripts -->
  <script src="js/project-scripts.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css" />

  <title>
      {{-- Yield the title if it exists, otherwise default to 'MemGame' --}}
      @yield('title','MemGame')
  </title>

  @yield('css')

  {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
  @yield('head')

</head>

<body onload="init()">
  <!-- header -->
  <div class="header-Background">
		<h1 id="header1">CSCIE15 - Project by Godrey CHENG</h1>
    <h2> <em id="dateTime"> </em>&nbsp;</h2>
	</div>
	<!-- end header -->

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
  @yield('javascript')
</body>
</html>
