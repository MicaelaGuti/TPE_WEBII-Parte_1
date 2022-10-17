<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:45:30
  from 'C:\xampp\htdocs\web2\TPE-WEB2-Gutierrez\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d789a41bb20_94049674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a0d406aa7ce780ed1f8bfdf9c68d9dbc61f505' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-WEB2-Gutierrez\\templates\\home.tpl',
      1 => 1666018825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634d789a41bb20_94049674 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="presentation">

            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
         <h4>Bienvenido a la seccion admin</h4>
            <?php }?>

            
            

         

         


      </div>

   </div> <!-- conecta con el contenedor del header.tpl -->

    <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
