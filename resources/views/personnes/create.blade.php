@extends('personnes/template')
 
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

    {!! Form::open(['url' => 'personnes']) !!}
        {!! Form::label('nom', 'Nom : ') !!}
        {!! Form::text('nom') !!} <br/>

        {!! Form::label('prenom', 'Prénom : ') !!}
        {!! Form::text('prenom') !!} <br/>

        {!! Form::label('date_de_naissance', 'Date de naissance : ') !!}
        {!! Form::date('date_de_naissance') !!} <br/>  <!-- date -->

        {!! Form::label('lieu_de_naissance', 'Lieu de naissance : ') !!}
        {!! Form::text('lieu_de_naissance') !!} <br/>

        {!! Form::label('id_national', 'ID National : ') !!}
        {!! Form::text('id_national') !!} <br/>

        {!! Form::label('etat_civil', 'Etat Civil : ') !!}
        {!! Form::text('etat_civil') !!} <br/>

        {!! Form::label('nationalite', 'Nationalité : ') !!}
        {!! Form::text('nationalite') !!} <br/>

        {!! Form::label('numero_ibis', 'Numero Ibis : ') !!}
        {!! Form::text('numero_ibis') !!} <br/><br/>        

		{!! Form::label('adresse', 'Adresse : ') !!}
        {!! Form::text('adresse') !!} <br/>

		{!! Form::label('gsm', 'GSM : ') !!}
        {!! Form::text('gsm') !!} <br/>

        {!! Form::label('telephone', 'Téléphone Fixe : ') !!}
        {!! Form::text('telephone') !!} <br/>

    	{!! Form::label('mail', 'Email : ') !!}
        {!! Form::text('mail') !!} <br/><br/>

         
        {!! Form::submit('Enregistrer ', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

	<a href="{{ url('http://127.0.0.1:8000/personnes') }}">Retour</a>

@endsection


