<?php
/* Smarty version 4.2.1, created on 2022-10-16 03:25:38
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\emptyError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b5d92269b58_23925247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50591b80d5476cd2c4fd19c58bb5292499504d99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\emptyError.tpl',
      1 => 1665840040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634b5d92269b58_23925247 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h2><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>

        <a href="home">Volver</a>

    <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    <?php }
}
