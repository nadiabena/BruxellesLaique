<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit page Categorie </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h1>Mise à jour d'une catégorie</h1><br/>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      <form method="post" action="{{action('CategorieController@update', $id_categorie)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Categorie:</label>
            <input type="text" class="form-control" name="name" value="{{$categorie->nom_categorie}}">
          </div>
        </div>

        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Mettre à jour</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>