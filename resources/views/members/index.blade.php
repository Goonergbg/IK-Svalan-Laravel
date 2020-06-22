@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Medlemmar i IK Svalan</div>
                <div class="card-body">     
                <a href="{{ route('home') }}">Gå tillbaka</a> |
                <a href="{{ route('user.create') }}">Lägg till en ny medlem</a>              
    <table class="crud-table">
    <tr>
    <th>Förnamn</th>
    <th>Efternamn</th>
    <th>Födelsedag</th>
    <th>E-post</th>
    <th>Redigera</th>
    <th>Medlemsavgift</th>
    </tr>
        @foreach($users as $user)
    <tr>
    <td>{{ $user->firstname }}</td>
    <td>{{ $user->lastname }}</td>
    <td>{{ $user->birthday }}</td>
    <td>{{ $user->email }}</td>
    <td><button class="btn btn-sm btn-dark"><a href="{{ route('user.edit', $user->id)}}">Ändra</a></button>
    <form action=" {{ route('user.destroy', [$user]) }}" method="POST" style="display:inline-block">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-dark">Radera Medlem</button>
        </form>
    </td>
    
    @foreach ($user->fees as $fee)
    <td>
{{ $fee->payed ? 'Betald' : 'Ej betald' }}
@if (!$fee->payed)
<form action="{{ route('fee.update', $fee->id) }}" method="post" class="d-inline">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-sm btn-link">Ange som betald</button>
         </form>
        </td>
        </tr>
        @endif
        @endforeach 
        @endforeach
        </table>


        {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>
</div>

                  
@endsection
