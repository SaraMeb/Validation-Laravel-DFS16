@extends('layouts.template')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Ajouter un utilisateur</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('user.store') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

                              <div class="col-md-6">
                                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">
                                                  {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">Addresse E-Mail</label>

                              <div class="col-md-6">
                                  <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" required>
                                                      {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                              <div class="col-md-6">
                                 <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" value="{{ old('password') }}" required>
                                   {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="role_id" class="col-md-4 col-form-label text-md-right">Role</label>

                              <div class="col-md-6">
                                  <select class="form-control {{ $errors->has('role_id') ? 'is-invalid' : '' }}" id="role_id" name="role_id">
                                    @foreach ($roles as $role)
                                      <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach;
                                  </select>
                                  {!! $errors->first('role_id', '<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Ajouter
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
