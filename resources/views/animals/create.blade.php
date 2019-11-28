@extends('layouts.template')

@section('content')
  {{-- @dd($animal, $races); --}}
<div class="container">
  <div class="row card text-info bg-grey">
    <h4 class="card-header">Ajouter un animal</h4>
      <div class="card-body">
         <form class="" action="{{ route('animal.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nom :</label>
              <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
              <label for="description">Description :</label>
              <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
              <label for="sexe">Sexe :</label>
              <select class="form-control {{ $errors->has('sexe') ? 'is-invalid' : '' }}" id="sexe" name="sexe">
                  <option value="Mâle">Mâle</option>
                  <option value="Femelle">Femelle</option>
              </select>
              {!! $errors->first('sexe', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="age">Age</label>
              <input type="number" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" name="age" id="age" value="{{ old('age') }}">
              {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4 mb-3">
              <label for="weight">Poids :</label>
              <input type="number" class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" id="weight" name="weight" value="{{ old('weight') }}">
              {!! $errors->first('weight', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4 mb-3">
              <label for="size">Taille :</label>
              <input type="number" class="form-control {{ $errors->has('size') ? 'is-invalid' : '' }}" id="size" name="size" value="{{ old('size') }}">
              {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
            </div>
          </div>
            <div class="form-group">
              <label for="race_id">Race :</label>
              <select class="form-control {{ $errors->has('race_id') ? 'is-invalid' : '' }}" id="race_id" name="race_id">
                @foreach ($races as $race)
                  <option value="{{ $race->id }}">{{ $race->name }}</option>
                @endforeach;
              </select>
              {!! $errors->first('race_id', '<div class="invalid-feedback">:message</div>') !!}

            </div>
            <input type="submit" class="btn btn-info" value="Ajouter">
         </form>
       </div>
     </div>
</div>
@endsection
