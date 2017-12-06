<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

	  <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Barre de recherche</title>
      <!-- {!!Html::style('resources/assets/personne/bootstrap.css')!!}
      {!!Html::style('resources/assets/personne/bootstrap.min.css')!!} -->

<!--       <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery.js"></script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     -->
</head>
<body>

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div> <br/>
    @endif

    @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif

<h1> Rechercher </h1>

<!-- <div class="row">
  <div class="col-md-6" col-md-offset-3>
    <section class="panel panel-default">
      <header class="panel-heading">
        <i class="glyphicon glyphicon-search"></i>
        <input type="text" name="searchname" class="form-control" id="searchname" placeholder="Recherche">
      </header>

      inclure ici 'view_search_person'

    </section>
  </div>
</div> -->

<!-- //, $personne['id_personne']) -->
  <div class="col-md-4 col-md-offset-2">
    <form class="form-group" action="{{action('SearchPersonneController@autocomplete')}}" method="GET">
      {{csrf_field()}}
        <input name="id_nom_recherche" size="35" type="text" id="recherche" placeholder="Rechercher un nom..">
        <input type="hidden" name="id_personne" id="id_personne">
        <input id="id_zone_recherche" type="submit" value="Rechercher">
    </form>
  </div>

        <!-- <div style="border:1px solid red"> -->
          @if(isset($personne))
            <?php  echo 'test' //include 'vue_search.php'      sizeof($personne)!=0 ?>
          @endif

<!--           @//if(sizeof($personne) == 0)
            <?//= 'Aucun membre trouvé!' ?>
          @//endif  -->
        <!-- </div> -->

<br/><br/><br/>


         <!-- Zone d'affichage de la recherche de personne -->
           <div id="result_search">
            <?php if (isset($personne) && !empty($personne)) {?>
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
                   <?= 'Pas de données disponible pour cette recherche!'; ?>
               @endif

              <?php } ?>
          </div>

  <script type="text/javascript" src="{{ URL::asset('/js/jquery.js') }}"></script>
  <script src="{{ URL::asset('/js/bootstrap.js') }}" type="text/javascript" ></script>
  <script type="text/javascript" src="{{ URL::asset('/js/search.js') }}"></script>
</body>

</html>

