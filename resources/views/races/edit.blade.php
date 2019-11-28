@extends('layouts.template')

@section('content')
  <div class="container">
    <div class="row card text-info bg-grey">
      <h4 class="card-header">Ajouter une race</h4>
        <div class="card-body">
           <form class="" action="{{ route('race.update') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ $race->name }}">
                                  {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
              </div>
              <div class="form-group">
                <label for="lifeExpectancy">Espérance de vie :</label>
                <input type="text" class="form-control {{ $errors->has('lifeExpectancy') ? 'is-invalid' : '' }}" name="lifeExpectancy" id="lifeExpectancy" value="{{ $race->lifeExpectancy }}">
                                  {!! $errors->first('lifeExpectancy', '<div class="invalid-feedback">:message</div>') !!}
              </div>
            </div>
            <input type="hidden" name="id" value="{{$race->id }}">

              <div class="form-group">
                <label for="classification_id">Race :</label>
                <select class="form-control {{ $errors->has('classification_id') ? 'is-invalid' : '' }}" id="classification_id" name="classification_id">
                  @foreach ($classifications as $classification)
                    <option value="{{ $classification->id }}"
                    @if($classification->id == $race->classification_id)
                      selected
                    @endif >{{ $classification->name }}</option>
                  @endforeach;
                </select>
                {!! $errors->first('classification_id', '<div class="invalid-feedback">:message</div>') !!}

              </div>
              <input type="submit" class="btn btn-info" value="Sauvegarder">
           </form>
         </div>
       </div>
  </div>
@endsection
