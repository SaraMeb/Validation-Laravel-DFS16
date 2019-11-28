@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row card text-info bg-grey">
    <h4 class="card-header">{{ $animal->name }}</h4>
      <div class="card-body">
         <form class="" action="{{ route('animal.update') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nom :</label>
              <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ $animal->name }}">
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
              <label for="description">Description :</label>
              <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" rows="3" name="description">{{ $animal->description }}</textarea>
                {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
              <label for="sexe">Sexe :</label>
              <select class="form-control {{ $errors->has('sexe') ? 'is-invalid' : '' }}" id="sexe" name="sexe">
                  <option value="Mâle" @if($animal->sexe == 'Mâle') selected @endif>Mâle</option>
                  <option value="Femelle" @if($animal->sexe == 'Femelle') selected @endif >Femelle</option>
              </select>
              {!! $errors->first('sexe', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="age">Age</label>
              <input type="number" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" name="age" id="age" value="{{ $animal->age }}">
              {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4 mb-3">
              <label for="weight">Poids :</label>
              <input type="number" class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" id="weight" name="weight" value="{{ $animal->weight }}">
              {!! $errors->first('weight', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4 mb-3">
              <label for="size">Taille :</label>
              <input type="number" class="form-control {{ $errors->has('size') ? 'is-invalid' : '' }}" id="size" name="size" value="{{ $animal->size }}">
              {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
            </div>
          </div>
            <input type="hidden" name="id" value="{{$animal->id }}">
            <div class="form-group">
              <label for="race_id">Race :</label>
              <select class="form-control {{ $errors->has('race_id') ? 'is-invalid' : '' }}" id="race_id" name="race_id">
                @foreach ($races as $race)
                  <option value="{{ $race->id }}"
                  @if($race->id == $animal->race_id)
                    selected
                  @endif >{{ $race->name }}</option>
                @endforeach;
              </select>
              {!! $errors->first('race_id', '<div class="invalid-feedback">:message</div>') !!}

            </div>
            <input type="submit" class="btn btn-info" value="Sauvegarder">
         </form>
       </div>
     </div>
</div>
@endsection
