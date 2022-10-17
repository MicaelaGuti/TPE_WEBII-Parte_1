
    {include 'templates\header.tpl'}


      <div class="container">

          <h1>Informacion del viaje: </h1>

          <ul class="list-group">
      
              {foreach $trips as $trip }
            
                  <a href="trips" type="button" class="btn btn-light">Seleccionar otro viaje</a>
                  
                <li class='list-group-item d-flex justify-content-between align-items-center'>

                  <p>Lugar de salida: {$trip->placeOfDeparure}</p>

                </li>

                <li class='list-group-item d-flex justify-content-between align-items-center'>

                  <p>Destino: {$trip->placeOfDestination}</p>

                </li>
                <li class='list-group-item d-flex justify-content-between align-items-center'>

                <p>Fecha: {$trip->date}</p>

              </li>
                <li class='list-group-item d-flex justify-content-between align-items-center'>

              <p>Aerolinea: {$trip->airline}</p>

                </li>

                <li class='list-group-item d-flex justify-content-between align-items-center'>

                <p>Lugares disponibles en el vuelo: {$trip->passengers} asientos</p>

              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'>

              <p>Precio: $ {$trip->price}</p>

            </li>

               {* <img class="img-thumbnail" src="{$serie->image}"/>          *}


              {/foreach}  
                
          </ul>

      </div>  
    

    {include 'templates\footer.tpl'}


