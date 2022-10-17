<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:46:03
  from 'C:\xampp\htdocs\web2\TPE-WEB2-Gutierrez\templates\showAllAirlines.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d78bbc6de29_46258466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf2e909d1912b56f2bfe24d4f51ac92f0b00384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-WEB2-Gutierrez\\templates\\showAllAirlines.tpl',
      1 => 1666018259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form_airline.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634d78bbc6de29_46258466 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container">

      <h1>Lista de Aerolineas</h1>

      <ul class="list-group">
      
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['airlines']->value, 'airline');
$_smarty_tpl->tpl_vars['airline']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['airline']->value) {
$_smarty_tpl->tpl_vars['airline']->do_else = false;
?>

                <li class='list-group-item d-flex justify-content-between align-items-center'>
                  <span> <b><?php echo $_smarty_tpl->tpl_vars['airline']->value->airline;?>
</b> - <b> <?php echo $_smarty_tpl->tpl_vars['airline']->value->country;?>
 </b> </span>
              
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                  <a href='deleteAirline/<?php echo $_smarty_tpl->tpl_vars['airline']->value->id;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                <a href='updateAirline/<?php echo $_smarty_tpl->tpl_vars['airline']->value->id;?>
' type='button' class='btn btn-danger ml-auto'>Actualizar</a>
            <?php }?>
                  </li> 

            <!-- <?php if ($_smarty_tpl->tpl_vars['confirm']->value == false) {?>
              <p>No se puede borrar, está en uso</p>
            <?php }?>      -->

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </ul>

      <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/form_airline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>

    </div>  


      


      <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
