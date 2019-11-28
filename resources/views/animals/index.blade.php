@extends('layouts.template')

@section('content')

@if (session('status'))
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" >
  <div class="toast-header">
    <strong class="mr-auto">Status</strong>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body alert-success">
    {{ session('status') }}
  </div>
</div>
@endif



  <div class="card-group">
    @foreach ($animals as $animal)
    <div class="col-sm-4">
      <div class="card border-info">
        <div class="card-header bg-info text-white">{{ $animal->name }}</div>
        <div class="card-body" style="height: 15rem;">
          <h5 class="card-title">Race : {{ $animal->race->name }}</h5>
          <p class="card-text">{{ $animal->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
         <li class="list-group-item">Sexe : {{ $animal->sexe }}</li>
         <li class="list-group-item">Age : {{ $animal->age }} ans</li>
         <li class="list-group-item">Poids : {{ $animal->weight }} kg</li>
         <li class="list-group-item">Taille : {{ $animal->size }} cm</li>
       </ul>
        <div class="card-footer">
          <a href="{{ route('race.show', $animal->race_id) }}" class="btn btn-primary">+ d'infos sur les {{ $animal->race->name }}</a>
          @if (Auth::check() && Auth::user()->role_id === 1 )
            <a href="{{ route('animal.edit', $animal->id) }}" class="btn btn-info"> Modifier</a>
            <form action="{{ route('animal.delete') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $animal->id }}">
              <input type="submit" class="btn btn-danger" style="width:100px;" value="Supprimer">
            </form>
          @endif
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
