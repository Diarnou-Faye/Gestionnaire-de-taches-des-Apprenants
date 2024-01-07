@extends('./Connection/connect')

@section('page-content')
<div class="flex-row mt-4 cont d-flex justify-content-center align-items-center">
    <div class="mt-5 w-50 section1">
        <img src="images/Group 3.svg" id="logoTD-xxl" alt="LogoTD" />
        <p class="float-left lienconnex ms-0">J'ai déja un compte <a href="{{ route('Connection') }}">Me Connecter</a>
        </p>
    </div>

    <div class="w-50 section2">
        <img src="images/Ilustrer.svg" id="Ilustrer" alt="Ilustrer" />
    </div>
</div>


@endsection