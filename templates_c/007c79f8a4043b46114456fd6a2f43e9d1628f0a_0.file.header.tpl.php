<?php
/* Smarty version 4.2.1, created on 2022-10-17 06:24:11
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cd8eba380e4_92375235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007c79f8a4043b46114456fd6a2f43e9d1628f0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\header.tpl',
      1 => 1665980643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634cd8eba380e4_92375235 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html lang="en">
  <head>
      <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">    
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
                        
                          <?php if (($_SESSION['isLogged']) == false) {?>
                          <li> <a class="nav-link" aria-current="page" href="logout">Login</a></li>
                          
                          
                        <?php } else { ?>
                            <li> <a class="nav-link" aria-current="page" href="login">Logout</a></li>
                         <?php }?> 
                         

                           
                      
                      </ul>
                  </div>
              </nav>
          </header>

            
    <?php }
}
