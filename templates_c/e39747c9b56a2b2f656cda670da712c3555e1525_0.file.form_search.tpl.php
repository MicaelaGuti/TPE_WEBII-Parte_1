<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:43:38
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\form_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cc15a80d483_78495748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e39747c9b56a2b2f656cda670da712c3555e1525' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\form_search.tpl',
      1 => 1665974615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634cc15a80d483_78495748 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container">

        <h2>Elige la aerolinea con la que deseas realizar tu viaje</h2>




        <div class="row">
            <div class="col-3">
                <div class="form-group">






                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['airlines']->value, 'airline');
$_smarty_tpl->tpl_vars['airline']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['airline']->value) {
$_smarty_tpl->tpl_vars['airline']->do_else = false;
?>
                    <li><a href='filter/<?php echo $_smarty_tpl->tpl_vars['airline']->value->id;?>
'> <?php echo $_smarty_tpl->tpl_vars['airline']->value->airline;?>
</a> </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                </div>
            </div>
        </div>


        

    </div>


<?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
