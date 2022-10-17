

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
                                                    
                            {foreach $airlines as $airline }
                            <option value="{$airline->id}">{$airline->airline}</option>
                            {/foreach} 
                            

                        </select>

                    {* <input name="input_name" id="imageToUpload" type="file" placeholder="Archivo Imagen-Serie"></input> *}

                    <input name="placeOfDeparture" type="text" placeholder="Lugar de donde sale el vuelo" required></input>   
                    <input name="placeOfDestination" type="text" placeholder="Lugar de destino del vuelo" required></input>   
                    <input name="price" type="text" placeholder="Precio del vuelo por pasajero" required></input>  
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Crear viaje</button>

        </form>

    </div>

