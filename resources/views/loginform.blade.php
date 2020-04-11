@extends('layouts.login')
@section('loginform')
<div class="form-container">
    <h2>Se Connecter </h2>
    <form id="login-form">
        <div class="input-control">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Votre Email"></div>
        <div class="input-control">
            <label for="password">Mot De Passe</label>
            <input type="password" name="password" id="password" placeholder="Mot De Passe">
        </div>
        <button type="submit" class="btn">Se Connecter</button>

        <a href="#">Mot De Passe Oublié ?</a>
    </form>

</div>
@endsection