<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Barre de recherche</title>
      {!!Html::style('resources/assets/personne/bootstrap.css')!!}
      {!!Html::style('resources/assets/personne/bootstrap.min.css')!!}

<!--       <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery.js"></script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     -->
</head>
<body>

<h1> Rechercher </h1>

<div class="row">
  <div class="col-md-6" col-md-offset-3>
    <section class="panel panel-default">
      <header class="panel-heading">
        <!-- <i class="glyphicon glyphicon-search"></i> --> 
        <input type="text" name="searchname" class="form-control" id="searchname" placeholder="Recherche">
      </header>

      <div class="panel-body">
        <table>
          <tr>
            <td> ID </td>
            <td> <input type="text" name="id" id="id" class="form-control" placeholder="ID"> </td>
          </tr>

          <tr>
            <td></td>
            <td> <br/> </td>
          </tr>
          <tr>
            <td>Nom</td>
            <td> <input type="text" name="name" id="name" class="form-control" placeholder="Nom"> </td>
          </tr>
        </table>
      </div>

    </section>
  </div>
</div>

</body>

<!-- <script type="text/javascript"> -->
<!--   $('#searchname').autocomplete({
    source : '{!!URL::route('/pers/search')!!}',
    minlenght:1,
    autoFocus:true,
    select:function(e,uri){
      alert(ui);
  }
 --><!-- </script> -->
 

</html>