
         <!-- Zone d'affichage de la recherche de personne -->
           <div id="result_search">
                 @if(sizeof($personne) != 0 )
                    <h1> détail de la recherche.. </h1>
                    <table>
                      <th><u>No</u></th>
                      <th><u>Nom</u></th>
                      <th><u>Prénom</u></th>
                      <th><u>Email</u></th>
                      <th><u>Téléphone</u></th>
                      <th><u>GSM</u></th>
                      <th><u>Groupe</u></th>
                      <th style="outline:1px solid green; color:green; font-style:bold"><u>ACTION</u></th>

                      <?php $compteur = 1; ?>
                      @foreach ($personne as $p)
                        <tr>
                          <td> {{ $compteur++ }} </td>
                          <td> {{ $p['nom'] }} </td>
                          <td> {{ $p['prenom'] }} </td>
                          <td> {{ $p['mail'] }} </td>
                          <td> {{ $p['telephone'] }} </td>
                          <td> {{ $p['gsm'] }} </td>
                        </tr>
                      @endforeach
                    </table>
                 @else

               @endif
              <?php //} else {
                        //echo "";
              //}?>
          </div>
