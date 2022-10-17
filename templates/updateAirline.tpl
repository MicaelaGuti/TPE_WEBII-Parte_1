
    {include 'templates\header.tpl'}

    <div class="container">

        <h1>Actualizar</h1>

        <form action="confirmUpdAirline" method="POST">

            <h2>Ingrese los datos</h2>

            <div class="col-3">
                <div>

                    <input name="country" type="text" placeholder="Pais de la aerolinea"></input>

                    <input name="airline" type="text" placeholder="Nombre de la aerolinea"></input>

                    <select name="id" class="form-selected">

                      <option value="{$id}">{$id}</option>
                      
                    </select>   

                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Enviar</button>

        </form>

    </div>

 {include 'templates\footer.tpl'}

