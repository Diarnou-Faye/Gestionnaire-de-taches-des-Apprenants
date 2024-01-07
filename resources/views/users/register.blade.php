@extends('./../Connection/connect')


@section('page-content')
<div class="mt-3 d-flex justify-content-between align-items-start">
    <div class="gauche ">
        <img id="Tasks_list" src="images/Tasks list with flour.svg" alt="">
    </div>
    <form id="Inscription" action="{{ route('registration') }}" Method="POST">
        @method('POST')
        @csrf
        {{-- ceci est mis en commentaire
        @if ($errors)
        @foreach ($errors->all() as $error)
        <div class="alert"> {{ $error }}</div>
        @endforeach
        @endif --}}
        <h2 class="my-3"> Inscription</h2>
        <div id="form_Inscript_content">
            <label><b>Nom: </b></label>
            @error('Noms')
            <div class="alert">
                {{ $message }}
            </div>
            @enderror
            <input class="mx-auto" type="text" placeholder="Entrer votre nom" name="name" value="{{ old('name') }}"><br>


            <label><b>Prénom: </b></label>
            @error('Prenoms')
            <div class="alert">
                {{ $message }}
            </div>
            @enderror
            <input class="mx-auto" type="text" placeholder="Entrer votre prénom" name="fistName"
                value="{{ old('fistName') }}">

            <label><b>Tel: </b></label>
            @error('tel')
            <div class="alert">
                {{ $message }}
            </div>
            @enderror
            <input class="mx-auto" type="tel" placeholder="Entrer votre telephonne" name="tel"
                value="{{ old('tel') }}"><br><br>


            <label><b>Email: </b></label>
            @error('email')
            <div class="alert">
                {{ $message }}
            </div>
            @enderror
            <input class="mx-auto" type="email" placeholder="Entrer votre email" name="email"
                value="{{ old('email') }}"><br> <br>


            <label><b>Mot de passe: </b></label>
            @error('mot_d_passe')
            <div class="alert">
                {{ $message }}
            </div>
            @enderror
            <input class="mx-auto" type="password" placeholder="Entrer le votre de passe" name="password">

            <div class="sexe">
                <label class="me-5"><b>Sexe: </b></label>
                @error('sexe')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
                <input class="mx-auto" type="radio" name="sexe" value="Masculin"
                    value="{{ old('sexe') }}"><label>Masculin</label>
                <input class="mx-auto" type="radio" name="sexe" value="Feminin"
                    value="{{ old('sexe') }}"><label>Feminin</label>
            </div>

            <label><b>Etudes ou Profession: </b></label>
            @error('etudes_ou_profession')
            <div class="alert">
                {{ $message }}
            </div>
            @enderror
            <input id="etude_profesion" class="mx-auto" type="text" placeholder="Etudes ou profession"
                name="etudes_ou_profession" value="{{ old('etudes_ou_profession') }}">

        </div>
        <button class="mx-auto" type="submit">S'inscrire</button>
        <p>J'ai déja un compte <a href="{{ route('Connection') }}">Me Connecter</a></p>
    </form>
</div>
@endsection