    {include 'templates\header.tpl'}

    

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
                            
                                {foreach $airlines as $airline }

                                <option value="{$airline->id}">{$airline->id}({$airline->airline})</option>

                                {/foreach}  

                        </select>

                        <input name="placeOfDepartures" type="text" placeholder="Lugar de salida del vuelo"></input>
                        <input name="placeOfDestination" type="text" placeholder="Lugar de destino del vuelo"></input>
                        <input name="price" type="text" placeholder="Precio del pasaje por pasajero"></input>

                        <select name="id" class="form-selected">

                                <option value="{$id}">{$id}</option>
                                
                        </select>   

                    {* <input name="input_name" id="imageToUpload" type="file" placeholder="Archivo Imagen-Serie"></input> *}


                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Enviar</button>

        </form>

    </div>



    {include 'templates\footer.tpl'}

