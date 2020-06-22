@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Medlemsavgifter</div>
                <a href="home">Gå tillbaka</a>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3>Betalda medlemsavgifter</h3>
                    <ul>
                    @foreach ($payed as $pay)

                        <li>Antal: {{ $pay->total }}</li>
                        <li>Summa: {{ $pay->sum }} kr</li>
                    @endforeach
                    </ul>

                    <h3>Ej betalda medlemsavgifter</h3>
                    <ul>
                    @foreach ($unpayed as $unpay)
                        <li>Antal: {{ $unpay->total }}</li>
                        <li>Summa: {{ $unpay->sum }} kr</li>
                    </li>
                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection