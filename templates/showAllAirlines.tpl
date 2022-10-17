
    {include 'templates/header.tpl'}


    <div class="container">

      <h1>Lista de Aerolineas</h1>

      <ul class="list-group">
      
           {foreach $airlines as $airline}

                <li class='list-group-item d-flex justify-content-between align-items-center'>
                  <span> <b>{$airline->airline}</b> - <b> {$airline->country} </b> </span>
              
            {if $logged}
                  <a href='deleteAirline/{$airline->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                <a href='updateAirline/{$airline->id}' type='button' class='btn btn-danger ml-auto'>Actualizar</a>
            {/if}
                  </li> 

            <!-- {if $confirm == false}
              <p>No se puede borrar, está en uso</p>
            {/if}      -->

            {/foreach}

      </ul>

      {if $logged}
      {include 'templates/form_airline.tpl'}
      {/if}

    </div>  


      


      {include 'templates\footer.tpl'}


