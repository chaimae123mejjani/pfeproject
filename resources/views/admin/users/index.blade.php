@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs </div>

                <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Actions</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                  

                
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id}}</th>
                            <td>{{ $user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->usertype}}</td>
                            <td>
                            <a href="{{route('admin.users.edit',$user->id)}}"><button class="btn btn-primary">Editer</button></a>
                            @can('delete-users')
                            <form action="{{route('admin.users.destroy',$user->id)}}"method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning">Supprimer</button>
                            </form>
                            @endcan
                            </td>
                        </tr>
                            
                    @endforeach
                    </tbody>
                    </ttable>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
