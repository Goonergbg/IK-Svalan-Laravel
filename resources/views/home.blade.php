@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (auth()->user()->admin())
                <div class="card-header">Adminpanel</div>
                @else
                <div class="card-header">Medlemspanel</div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (auth()->user()->admin())
                <ul>
                <li><a href="{{ route('user.index') }}">Alla Medlemmar</a></li>
                <li><a href="{{ route('fee.index') }}">Medlemsavgifter</a></li>
                </ul>
                

                @else
                   <table class="crud-table">
                    <tr>
                    <th>Förnamn</th>
                    <th>Efternamn</th>
                    <th>Födelsedag</th>
                    <th>E-post</th>
                    </tr>

                    <tr>
                    <td>{{auth()->user()->firstname}}</td>
                    <td>{{auth()->user()->lastname}}</td>
                    <td>{{auth()->user()->birthday}}</td>
                    <td>{{auth()->user()->email}}</td>
                    </td>
                    </tr>
                </table>
                @endif
            </div>
                </div>
                
        </div>
    </div>
</div>
@endsection
