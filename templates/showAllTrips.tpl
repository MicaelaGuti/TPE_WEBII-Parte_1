
    {include 'templates\header.tpl'}


      <div class="container">

        <h1>Lista de viajes</h1>

          <ul class="list-group">
          
              {foreach $trips as $trip }

                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                  <div class="card-header">Aerolinea: {$trip->airline}</div>
                  <div class="card-body">
                    <h5 class="card-title">{$trip->placeOfDestination} - {$trip->placeOfDeparture} </h5>
                    <a href="viewTrip/{$trip->id}" type='button' class="btn btn-info">Ver informacion del viaje</a>
                  </div>
                  {if $logged}
                    <a href='deleteTrip/{$trip->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                    <a href='updateTrip/{$trip->id}' type="button" class="btn btn-warning">Actualizar</a>
                    {/if}
                </div>

                  {* <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> {$trip->placeOfDestination} - {$trip->placeOfDeparure} - (Aerolinea: {$trip->airlines})</span>
                    <a href="viewTrip/{$trip->id}" type='button' class="btn btn-info">Ver informacion del viaje</a> *}
{* 
                    {if $logged}
                    <a href='deleteTrip/{$trip->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                    <a href='updateTrip/{$trip->id}' type='button' class='btn btn-danger ml-auto'>Actualizar</a>
                    {/if} *}

                                
                  </li>

              {/foreach}
  

          </ul>



    </div>  
          
    {if $logged}
    {include 'templates\form_trip.tpl'}
    {/if}


    {include 'templates\footer.tpl'}


