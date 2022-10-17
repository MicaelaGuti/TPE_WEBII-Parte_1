<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:50:32
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\showFiltredTrips.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cc2f88a97c8_34167502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5e093aa24efed524ef00ed4184e6837062c928b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\showFiltredTrips.tpl',
      1 => 1665970885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634cc2f88a97c8_34167502 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="container">

         <h1>Los viajes que coinsiden con tu criterio de busqueda son: </h1>

          <ul class="list-group">
          
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tripByAirline']->value, 'trip');
$_smarty_tpl->tpl_vars['trip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trip']->value) {
$_smarty_tpl->tpl_vars['trip']->do_else = false;
?>

                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                      <span> <b><?php echo $_smarty_tpl->tpl_vars['trip']->value->placeOfDeparture;?>
</b> - <b> <?php echo $_smarty_tpl->tpl_vars['trip']->value->placeOfDestination;?>
</b> </span>
                    </li>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </ul>

          <a href="search">Buscar otra vez</a>


      </div>  
    

  <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
