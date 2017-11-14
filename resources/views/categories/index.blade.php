<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page Categorie</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <h1> Listing des catégories </h1>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $categorie)
      <tr>
        <td>{{$categorie['id_categorie']}}</td>
        <td>{{$categorie['nom_categorie']}}</td>
        <td><a href="{{action('CategorieController@edit', $categorie['id_categorie'])}}" class="btn btn-info">Mettre à jour</a></td>
        <td>
          <form action="{{action('CategorieController@destroy', $categorie['id_categorie'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

  <div style="text-align:center">
    <a href="{{ url('http://127.0.0.1:8000/categories/create')}}"> <button class="btn btn-success" type="submit">Ajouter catégorie</button> </a>
  </div>

  <br/><br/>
  <div style="text-align:right;">
    <a href="{{ url('http://127.0.0.1:8000') }}"> <button class="btn btn-default" type="submit">Retour</button> </a>
  </div>

  </body>
</html>