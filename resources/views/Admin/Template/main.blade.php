<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('titulo','Default')|Administracion</title>
        
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    </head>
    
    <body>
        
       @include ('Admin.Template.partials.nav')
        <section>
            @include ('flash::message')
            @yield('contenido')
        </section>
       
       <footer class="admin-footer">
           <nav class="navbar navbar-default">
               <div class = "container-fluid"> 
                   <div class="container-fluid">
                       <p class="navbar-text"> Todos los derechos reservados &copy {{ date('Y')}} </p>
                       <p class="navbar-text navbar-right"> <b>Grupo Cloud Solutions</b></p>
                   </div>
                </div>
           </nav>
       </footer>
       
       
       
       <script type="{{ asset ('plugins/jquery/js/jquery-1.4.1.js') }}"> </script>
       <script type="{{ asset ('plugins/bootstrap/js/bootstrap.js') }}"> </script>
            
    </body>
</html>