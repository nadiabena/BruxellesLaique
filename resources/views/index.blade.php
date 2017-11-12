<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page Categorie</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
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
        <td><a href="{{action('CategorieController@edit', $categorie['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CategorieController@destroy', $categorie['id'])}}" method="post">
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
  </body>
</html>