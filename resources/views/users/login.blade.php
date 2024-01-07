@extends('./../Connection/connect')


@section('page-content')
<form id="Connexion" action="{{ route('login') }}" Method="POST" class="mx-auto">
    @method('POST')
    @csrf

    @if (session()->has('success'))
    <div class="alert"> {{ session()->get('success') }}</div>
    @endif

    <h2 class="my-4"> Connexion</h2>
    @error('email')
    <div class="alert">
        {{ $message }}
    </div>
    @enderror
    <input class="my-4 w-75" type="email" name="email" placeholder="email" value="{{ old('email') }}">

    @error('password')
    <div class="alert">
        {{ $message }}
    </div>
    @enderror
    <input class="w-75" type="password" name="password" placeholder="mot de passe">

    <button class="my-5" type="submit">Se Connecter</button>
    <p>Je suis Nouveau <a href="{{ route('registration') }}">M'inscrire</a></p>
</form>
@endsection