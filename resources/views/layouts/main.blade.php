<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS da APP -->
        <link href="/css/styles.css" rel="stylesheet"/>
        <script src="/js/scripts.js"> </script>
    </head>
    <body>
        <header> 
           <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/in.png" alt="NAC Events">
                    </a>
                    <ul class="navbar-nav">
                       <li class="nav-item">
                          <a href="/" class="nav-link">Eventos</a>  
                       </li> 
                    </ul> 

                    <ul class="navbar-nav">
                       <li class="nav-item">
                          <a href="/events/create" class="nav-link">Criar Eventos</a>  
                       </li> 
                    </ul>

                    <ul class="navbar-nav">
                       <li class="nav-item">
                          <a href="/" class="nav-link">Entrar</a>  
                       </li> 
                    </ul>

                    <ul class="navbar-nav">
                       <li class="nav-item">
                          <a href="/" class="nav-link">Cadastrar</a>  
                       </li> 
                    </ul>

                </div>
           </nav> 
        </header>
        @yield('content')
         <footer>
            <p>NAC Events &copy; 2022</p>
         </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
