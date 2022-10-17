<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:02:04
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6e6c6ad847_78420306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3530f37fdd2ea01855ce4e6557bb685c6816cb03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\home.tpl',
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
function content_634d6e6c6ad847_78420306 (Smarty_Internal_Template $_smarty_tpl) {
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
