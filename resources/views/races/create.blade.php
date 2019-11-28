@extends('layouts.template')

@section('content')

<div class="container">
  <div class="row card text-info bg-grey">
    <h4 class="card-header">Ajouter une race</h4>
      <div class="card-body">
         <form class="" action="{{ route('race.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nom :</label>
              <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
              <label for="lifeExpectancy">Espérance de vie :</label>
              <input type="text" class="form-control {{ $errors->has('lifeExpectancy') ? 'is-invalid' : '' }}" name="lifeExpectancy" id="lifeExpectancy" value="{{ old('lifeExpectancy') }}">
                                {!! $errors->first('lifeExpectancy', '<div class="invalid-feedback">:message</div>') !!}
            </div>
          </div>
            <div class="form-group">
              <label for="classification_id">Race :</label>
              <select class="form-control {{ $errors->has('classification_id') ? 'is-invalid' : '' }}" id="classification_id" name="classification_id">
                @foreach ($classifications as $classification)
                  <option value="{{ $classification->id }}">{{ $classification->name }}</option>
                @endforeach;
              </select>
              {!! $errors->first('classification_id', '<div class="invalid-feedback">:message</div>') !!}

            </div>
            <input type="submit" class="btn btn-info" value="Ajouter">
         </form>
       </div>
     </div>
</div>
@endsection
