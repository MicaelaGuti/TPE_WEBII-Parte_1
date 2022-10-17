<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:40:33
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\showTripInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c886199ae96_89301612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcfcb93d037c2ad07996c9a28aed475b3bde5520' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\showTripInfo.tpl',
      1 => 1665859478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634c886199ae96_89301612 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="container">

          <h1>Informacion del viaje: </h1>

          <ul class="list-group">
      
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trips']->value, 'trip');
$_smarty_tpl->tpl_vars['trip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trip']->value) {
$_smarty_tpl->tpl_vars['trip']->do_else = false;
?>
            
                  <a href="trips" type="button" class="btn btn-light">Seleccionar otro viaje</a>
                  
                <li class='list-group-item d-flex justify-content-between align-items-center'>

                  <p>Lugar de salida: <?php echo $_smarty_tpl->tpl_vars['trip']->value->placeOfDeparture;?>
</p>

                </li>

                <li class='list-group-item d-flex justify-content-between align-items-center'>

                  <p>Destino: <?php echo $_smarty_tpl->tpl_vars['trip']->value->placeOfDestination;?>
</p>

                </li>
                <li class='list-group-item d-flex justify-content-between align-items-center'>

                <p>Fecha: <?php echo $_smarty_tpl->tpl_vars['trip']->value->date;?>
</p>

              </li>
                <li class='list-group-item d-flex justify-content-between align-items-center'>

              <p>Aerolinea: <?php echo $_smarty_tpl->tpl_vars['trip']->value->airline;?>
</p>

                </li>

                <li class='list-group-item d-flex justify-content-between align-items-center'>

                <p>Lugares disponibles en el vuelo: <?php echo $_smarty_tpl->tpl_vars['trip']->value->passengers;?>
 asientos</p>

              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'>

              <p>Precio: $ <?php echo $_smarty_tpl->tpl_vars['trip']->value->price;?>
</p>

            </li>

               

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                
          </ul>

      </div>  
    

    <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
