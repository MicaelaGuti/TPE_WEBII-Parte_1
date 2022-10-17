<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:45:54
  from 'C:\xampp\htdocs\web2\TPE-WEB2-Gutierrez\templates\form_trip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d78b2d70c81_46125333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e73f08ebc8d78ee0e0e0c8a03a693fab80bfb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-WEB2-Gutierrez\\templates\\form_trip.tpl',
      1 => 1665986602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d78b2d70c81_46125333 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">

        <h1>Crear viaje</h1>

        <form action="addTrip" method="POST" enctype="multipart/form-data">

            <h2>Ingrese los datos</h2>


            <div class="col-3">
                <div>

                    <input name="date" type="text" placeholder="Fecha a realizarse el viaje"></input>

                    <input name="passengers" type="text" placeholder="Cantidad de asientos disponibles en el vuelo" required></input>

                            <label>Selecciona la aerolinea</label>
                        <select name="airline" class="form-selected" required>
                                                    
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['airlines']->value, 'airline');
$_smarty_tpl->tpl_vars['airline']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['airline']->value) {
$_smarty_tpl->tpl_vars['airline']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['airline']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['airline']->value->airline;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                            

                        </select>

                    
                    <input name="placeOfDeparture" type="text" placeholder="Lugar de donde sale el vuelo" required></input>   
                    <input name="placeOfDestination" type="text" placeholder="Lugar de destino del vuelo" required></input>   
                    <input name="price" type="text" placeholder="Precio del vuelo por pasajero" required></input>  
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Crear viaje</button>

        </form>

    </div>

<?php }
}
