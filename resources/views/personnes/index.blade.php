<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page Personne</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <h1> Listing des personnes </h1>
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
        <th>Nom</th>
        <th>Prénom</th>
        <th colspan="2">Action</th>
        <th>Pièces jointes</th>
        <th>Télécharger un document</th>
      </tr>
    </thead>
    <tbody>
      @foreach($personnes as $personne)
      <?php $v = $personne['id_personne'];?>
      <tr>
        <td>{{$personne['id_personne']}}</td>
        <td>{{$personne['nom']}}</td>
        <td>{{$personne['prenom']}}</td>
        <td><a href="{{action('PersonneController@edit', $personne['id_personne'])}}" class="btn btn-info">Mettre à jour</a></td>
        <td>
          <form action="{{action('PersonneController@destroy', $personne['id_personne'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>

        <td><button data-id="{{ $personne['id_personne']}}" name="liste_doc" class="id_button" class="btn btn-warning" data-toggle="modal" data-target="#idModal">Consulter les pièces jointes {{ $personne['id_personne'] }} </button>

 

        </td>

        <td>
          <div class="form-group"> 
           <!--  {!! Form::label('Télécharger un document') !!} -->
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div> <br/>
            @endif

            <!-- $personne['id_personne']
           --> 
            <!-- egals to enctype="multipart/form-data" -->

           <!-- {!! Form::open( array('files'=> true) ) !!}   ['url' => '/']  
              {!! Form::label('nom', 'Intitulé : ') !!}
              {!! Form::text('intitule') !!}
              
              {!! Form::file('document', null) !!}
              
              {!! Form::submit('Upload ', ['class' => 'btn']) !!}
            {!! Form::close() !!}   -->


          <form style="border:1px solid red" action="{{action('UploadController@uploadSubmit', $personne['id_personne'])}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              Intitulé: <input type="text" name="intitule" />
              <input type="file" name="documents[]" id="id_documents" multiple />
              <input type="hidden" name="id_personne" value="{{$personne['id_personne']}}">
              <br/>
              <input type="submit" value="Upload" />
          </form>

          </div>

          <!-- <button class="btn">Télécharger document</button> -->
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>







  <div style="text-align:center">
    <a href="{{ url('http://127.0.0.1:8000/personnes/create')}}"> <button class="btn btn-success" type="submit">Ajouter personne</button> </a>
  </div>

  <br/><br/>
  <div style="text-align:right;">
    <a href="{{ url('http://127.0.0.1:8000') }}"> <button class="btn btn-default" type="submit">Retour</button> </a>
  </div>


  <script type="text/javascript" src="{{ asset('js/modal_refresh.js') }}"></script>  
  </body>

<script>
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

</html>