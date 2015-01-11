<!DOCTYPE html>
<html lang="en-us">
    <head>
        @include('includes.head')
  
     
    </head>
    <body class="">
        @include('includes.header')
        @include('includes.nav')
        <div id="main" role="main">
             @yield('content')
        </div>
        @include('includes.footer')
        @include('scripts.default')
        @yield('scripts')
        
    </body>
</html>