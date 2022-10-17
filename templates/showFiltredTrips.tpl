
  {include 'templates\header.tpl'}


      <div class="container">

         <h1>Los viajes que coinsiden con tu criterio de busqueda son: </h1>

          <ul class="list-group">
          
              {foreach $tripByAirline as $trip }

                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                      <span> <b>{$trip->placeOfDeparture}</b> - <b> {$trip->placeOfDestination}</b> </span>
                    </li>

                {/foreach}

          </ul>

          <a href="search">Buscar otra vez</a>


      </div>  
    

  {include 'templates\footer.tpl'}


