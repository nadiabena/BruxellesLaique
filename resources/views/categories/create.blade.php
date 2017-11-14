@extends('categories/template')
 
@section('contenu')
	<h1>Ajouter une Categorie</h1>

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

    {!! Form::open(['url' => 'categories']) !!}
        {!! Form::label('nom', 'categorie : ') !!}
        {!! Form::text('nom_categorie') !!} <br/>

        {!! Form::submit('Enregistrer ', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

	<a href="{{ URL::previous() }}">Retour</a>

@endsection




			
          
		  