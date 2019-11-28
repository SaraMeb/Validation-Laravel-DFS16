@extends('layouts.template')

@section('content')
@if (session('status'))
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000" style="position: absolute; top: 60px; right: 80px;">
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
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
         <table class="table table-hover table-bordered">
           <tr>
             <th scope="col">Name</th>
             <th scope="col">Email</th>
             <th scope="col">Role</th>
             @if (Auth::id() === 1)
               <th scope="col">Modifier</th>
               <th scope="col">Supprimer</th>
             @endif

           </tr>
             @foreach ($users as $user)
               <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role->name }}</td>
                  @if (Auth::id() === 1)
                  <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Modifier</a>
                  </td>
                  <td style="width:100px;">
                    <form action="{{ route('user.delete') }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{ $user->id }}">
                      <input type="submit" class="btn btn-danger" style="width:100px;" value="Supprimer">
                    </form>
                  </td>
                  @endif
              </tr>
             @endforeach
         </table>
      </div>
    </div>
</div>
@endsection
