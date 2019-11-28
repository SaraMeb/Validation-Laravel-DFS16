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
  @foreach ($races as $race)
    <div class="col-sm-4">
      <div class="card border-info">
        <div class="card-header bg-info text-white">{{ $race->name }}</div>
        <div class="card-body" style="height: 5rem;">
          <p class="card-title">Classification : {{ $race->classification->name }}</p>
          <p class="card-text">{{ $race->lifeExpectancy }}</p>
        </div>
        <div class="card-footer">
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
  @endforeach
</div>

@endsection
