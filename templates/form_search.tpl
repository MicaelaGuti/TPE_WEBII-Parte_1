    {include 'templates\header.tpl'}


    <div class="container">

        <h2>Elige la aerolinea con la que deseas realizar tu viaje</h2>




        <div class="row">
            <div class="col-3">
                <div class="form-group">






                    {foreach $airlines as $airline }
                    <li><a href='filter/{$airline->id}'> {$airline->airline}</a> </li>
                    {/foreach}



                </div>
            </div>
        </div>


        

    </div>


{include 'templates\footer.tpl'}