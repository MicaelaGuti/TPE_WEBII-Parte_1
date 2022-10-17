<?php
/* Smarty version 4.2.1, created on 2022-10-17 07:29:14
  from 'C:\xampp\htdocs\web2\travellopedia-2\templates\updateTrip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ce82ab61415_48007032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f279fdc2042d516e5de0a49c7a39776aa31adfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\travellopedia-2\\templates\\updateTrip.tpl',
      1 => 1665857662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_634ce82ab61415_48007032 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    

    <div class="container">

        <h1>Actualizar</h1>

        <form action="confirmUpdTrip" method="POST" enctype="multipart/form-data">

            <h2>Ingrese los datos</h2>


            <div class="col-3">
                <div>

                    <input name="date" type="text" placeholder="Fecha en la que se realizara el viaje"></input>

                    <input name="passengers" type="text" placeholder="Cantidad de asientos disponibles"></input>

                            <label>Selecciona la aerolinea</label>

                        <select name="airline" class="form-selected">
                            
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['airlines']->value, 'airline');
$_smarty_tpl->tpl_vars['airline']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['airline']->value) {
$_smarty_tpl->tpl_vars['airline']->do_else = false;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['airline']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['airline']->value->id;?>
(<?php echo $_smarty_tpl->tpl_vars['airline']->value->airline;?>
)</option>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  

                        </select>

                        <input name="placeOfDepartures" type="text" placeholder="Lugar de salida del vuelo"></input>
                        <input name="placeOfDestination" type="text" placeholder="Lugar de destino del vuelo"></input>
                        <input name="price" type="text" placeholder="Precio del pasaje por pasajero"></input>

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
