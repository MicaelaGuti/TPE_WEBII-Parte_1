<?php
/* Smarty version 4.2.1, created on 2022-10-16 03:25:48
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\form_airline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b5d9c34ce84_73445151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b5404fc05acb31d827adace0a1f67518f5aaaef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\form_airline.tpl',
      1 => 1665852260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b5d9c34ce84_73445151 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">

        <h1>Añadir aerolinea</h1>

        <form action="addAirline" method="POST">

            <h2>Ingrese los datos</h2>

            <div class="col-3">
                <div>

                    <input name="country" type="text" placeholder="Pais al que pertenece la aerolinea"></input>

                    <input name="airline" type="text" placeholder="Nombre de la aerolinea"></input>


                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Agregar</button>

        </form>

    </div>
<?php }
}
