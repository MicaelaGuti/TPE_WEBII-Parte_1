<?php
/* Smarty version 4.2.1, created on 2022-10-17 05:12:09
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\showAllTrips.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cc80974be06_68682822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583bcff6231d959ab2d1d866e891308e525a555c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\showAllTrips.tpl',
      1 => 1665976326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\form_trip.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634cc80974be06_68682822 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="container">

        <h1>Lista de viajes</h1>

          <ul class="list-group">
          
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trips']->value, 'trip');
$_smarty_tpl->tpl_vars['trip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trip']->value) {
$_smarty_tpl->tpl_vars['trip']->do_else = false;
?>

                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                  <div class="card-header">Aerolinea: <?php echo $_smarty_tpl->tpl_vars['trip']->value->airline;?>
</div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['trip']->value->placeOfDestination;?>
 - <?php echo $_smarty_tpl->tpl_vars['trip']->value->placeOfDeparture;?>
 </h5>
                    <a href="viewTrip/<?php echo $_smarty_tpl->tpl_vars['trip']->value->id;?>
" type='button' class="btn btn-info">Ver informacion del viaje</a>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                    <a href='deleteTrip/<?php echo $_smarty_tpl->tpl_vars['trip']->value->id;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                    <a href='updateTrip/<?php echo $_smarty_tpl->tpl_vars['trip']->value->id;?>
' type="button" class="btn btn-warning">Actualizar</a>
                    <?php }?>
                </div>

                  
                                
                  </li>

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  

          </ul>



    </div>  
          
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates\form_trip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>


    <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
