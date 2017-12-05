<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi sitio</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="<?php echo route('home') ?>">Home</a>
        <a href="<?php echo route('saludos') ?>">Saludo</a>
        <!-- <a href="<?php echo route('saludos', 'Alejandro') ?>">Saludo</a> Si quisiera pasar un valor, lo agrego como un nuevo parametro en la ruta-->
        <a href="<?php echo route('contactos') ?>">Contacto</a>
      </nav>
    </header>

    @yield('contenido')

    <footer>
      Copyrigth {{date('Y')}}
    </footer>
  </body>
</html>
