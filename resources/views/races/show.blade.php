@extends('layouts.template')

@section('content')

  <div class="container">
      <div class="card border-info d-flex justify-content-center text-center">
        <div class="card-header bg-info text-white">{{ $race->name }}</div>
        <div class="card-body" style="height: 10rem;">
          <p class="card-title">Classification : {{ $race->classification->name }}</p>
          <p class="card-text">{{ $race->lifeExpectancy }}</p>
        </div>
        <div class="card-footer d-flex justify-content-around">
          @if (Auth::check() && Auth::user()->role_id === 1 )
            <a href="{{ route('race.edit', $race->id) }}" class="btn btn-info"> Modifier</a>
            <form action="{{ route('race.delete') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $race->id }}">
              <input type="submit" class="btn btn-danger" style="width:100px;" value="Supprimer">
            </form>
          @endif
        </div>
      </div>
</div>

@endsection
