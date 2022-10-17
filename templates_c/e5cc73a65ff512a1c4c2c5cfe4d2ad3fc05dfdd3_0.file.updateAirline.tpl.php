<?php
/* Smarty version 4.2.1, created on 2022-10-17 07:47:20
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\updateAirline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cec681e9652_57741068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5cc73a65ff512a1c4c2c5cfe4d2ad3fc05dfdd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\updateAirline.tpl',
      1 => 1665857248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634cec681e9652_57741068 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">

        <h1>Actualizar</h1>

        <form action="confirmUpdAirline" method="POST">

            <h2>Ingrese los datos</h2>

            <div class="col-3">
                <div>

                    <input name="country" type="text" placeholder="Pais de la aerolinea"></input>

                    <input name="airline" type="text" placeholder="Nombre de la aerolinea"></input>

                    <select name="id" class="form-selected">

                      <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</option>
                      
                    </select>   

                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Enviar</button>

        </form>

    </div>

 <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
