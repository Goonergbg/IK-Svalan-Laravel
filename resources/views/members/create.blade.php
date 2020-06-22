@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lägg till en ny medlem</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form action="{{ route('user.store') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="name">Förnamn</label>
            <input type="text" class="form-control" name="firstname">
        </div>

            <div class="form-group">
            <label for="name">Efternamn</label>
            <input type="text" class="form-control" name="lastname">
        </div>

            <div class="form-group">
            <label for="name">Födelsedatum</label>
            <input type="date" class="form-control" name="birthday">
        </div>

        <div class="form-group">
            <label for="name">E-post</label>
            <input type="email" class="form-control" name="email">
        </div>

            <div class="form-group">
            <label for="name">Lösenord</label>
            <input type="password" class="form-control" name="password">
        </div>
        
        <input class="btn btn-dark" type="submit" value="Lägg till medlem">
    </form>
    <a class="btn btn-dark float-right" href="{{ route('user.index') }}">Gå tillbaka</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection