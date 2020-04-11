@extends('admin.dashboard')
@section('content')
<div class="col-md-12">
    <div class="row">
        <div class="heading">
            <h1>Espace Administrateur</h1>
            <p>Bienvenue dans la partie gestion des comptes</p>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="row">
        <table class="users-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Tel</th>
                    <th>Adresse</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="logo-user">SA</span> Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                </tr>
                <tr>
                    <td><span class="logo-user">SA</span>Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                </tr>

            </tbody>

        </table>
    </div>
</div>
@endsection