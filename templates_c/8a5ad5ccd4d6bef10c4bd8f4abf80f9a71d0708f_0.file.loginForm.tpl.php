<?php
/* Smarty version 4.2.1, created on 2022-10-16 02:24:02
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b4f225b5e89_36818581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5ad5ccd4d6bef10c4bd8f4abf80f9a71d0708f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\loginForm.tpl',
      1 => 1665840041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634b4f225b5e89_36818581 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="container">
            <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">
                <h1>Iniciar Sesion</h1>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Ingrese email">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Ingrese Password">
                </div>


                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>

            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>


        </div>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
