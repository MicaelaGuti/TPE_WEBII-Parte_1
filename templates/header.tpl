<!DOCTYPE html>
  <html lang="en">
  <head>
      <base href="{$basehref}">    
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link rel="stylesheet" href="styles\style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Berkshire+Swash&family=Cookie&family=Dancing+Script&family=Lobster&family=Maven+Pro&family=Pacifico&family=Roboto+Slab:wght@200&family=Special+Elite&display=swap" rel="stylesheet">
      <title>Travellopedia</title>
      <link rel="icon" href="iconoweb.ico">
  </head>

  <body>

      <div class="contenedor">

          <header>
              <nav>
                  <div class="logo">
                  <p><a class="nav-link" aria-current="page" href="home">Travellopedia</a></a></p>
                      <div class="btn_menu"><img src="images/menu.png" alt="menu"></div> 
                  </div>
                  <div class="menu">
                      <ul class="navegacion">
                          <li> <a class="nav-link" aria-current="page" href="home">Home</a></li>
                          <li> <a class="nav-link" aria-current="page" href="trips">Viajes</a></li>
                          <li> <a class="nav-link" aria-current="page" href="airlines">Aerolineas</a></li>
                          <li> <a class="nav-link" aria-current="page" href="search">Buscar</a></li>
                        
                          {if ($smarty.session.isLogged )==false}
                          <li> <a class="nav-link" aria-current="page" href="logout">Login</a></li>
                          
                          
                        {else}
                            <li> <a class="nav-link" aria-current="page" href="login">Logout</a></li>
                         {/if} 
                         

                           
                      
                      </ul>
                  </div>
              </nav>
          </header>

          {* <div class="titular">
              <h1 class="titularh1">Todo lo que necesitas para tu viaje</h1>
          </div> *}
  
    