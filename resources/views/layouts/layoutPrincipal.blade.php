<!DOCTYPE html>
<html lang="en">
   <head>
      @include('elements.head')
   </head>
   <body>
     <header >
         @include('elements.navbar')
     </header>

     @yield('contenido')


   </body>
</html>