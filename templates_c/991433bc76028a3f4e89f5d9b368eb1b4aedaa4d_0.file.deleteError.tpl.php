<?php
/* Smarty version 4.2.1, created on 2022-10-17 07:28:30
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\deleteError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ce7fe9938f2_50219587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991433bc76028a3f4e89f5d9b368eb1b4aedaa4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\deleteError.tpl',
      1 => 1665852125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634ce7fe9938f2_50219587 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h2><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>

        <a href="airlines">Volver</a>

    <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    <?php }
}
