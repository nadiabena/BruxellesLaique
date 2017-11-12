@extends('template')
 
@section('contenu')
	<h1>Ajouter une personne</h1>

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

    {!! Form::open(['url' => 'personne']) !!}
        {!! Form::label('nom', 'Nom : ') !!}
        {!! Form::text('nom') !!} <br/>

        {!! Form::label('prenom', 'Prénom : ') !!}
        {!! Form::text('prenom') !!} <br/>

        {!! Form::label('date_de_naissance', 'Date de naissance : ') !!}
        {!! Form::date('birthday') !!} <br/>

        {!! Form::label('lieu_de_naissance', 'Lieu de naissance : ') !!}
        {!! Form::text('place_of_birthday') !!} <br/>

		{!! Form::label('genre', 'Genre : ') !!}
		{!! Form::select('genre', ['-choix-', 'Femme', 'Homme']) !!} <br/>

        {!! Form::label('id_national', 'ID National : ') !!}
        {!! Form::text('id_national') !!} <br/>

        {!! Form::label('etat_civil', 'Etat Civil : ') !!}
        {!! Form::text('etat_civil') !!} <br/>

        {!! Form::label('nationality', 'Nationalité : ') !!}
        {!! Form::text('nationality') !!} <br/>

		{!! Form::label('address', 'Addresse : ') !!}
        {!! Form::text('address') !!} <br/>

		{!! Form::label('gsm', 'GSM : ') !!}
        {!! Form::text('gsm') !!} <br/>

		{!! Form::label('phone', 'Téléphone Fixe : ') !!}
        {!! Form::text('phone') !!} <br/>

		{!! Form::label('email', 'Email : ') !!}
        {!! Form::text('email') !!} <br/><br/>


        {!! Form::submit('Envoyer ', ['class' => 'btn btn-info']) !!}
    {!! Form::close() !!}

	<a href="{{ URL::previous() }}">Retour</a>

@endsection




			
          
		  