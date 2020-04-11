@extends('layouts.registration')
@section('registerform')
<div class="form-container">
    <h2>Inscription </h2>
    <form id="regForm">
        <div class="input-control tab">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" placeholder="Votre Nom De Famille">
        </div>
        <div class="input-control tab">
            <label for="surname">Prénom</label>
            <input type="text" name="surname" id="surname" placeholder="Votre Prénom">
        </div>
        <div class="input-control tab">
            <label for="date_naissance">Date De Naissance</label>
            <input type="date" name="date_naissance" id="dateNaissance"></div>
        <div class="input-control tab"> <label for="lieu_naissance">Lieu De Naissance</label>
            <input type="text" name="lieu_naissance" id="lieuNaissance" placeholder="Votre Lieu De naissance"></div>
        <div class="input-control tab"><label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" placeholder="Votre Adresse"></div>
        <div class="input-control tab"><label for="niveau_scolaire">Niveau Scolaire Ou Diplôme Obtenu</label>
            <input type="text" name="niveau_scolaire" id="niveauScolaire" placeholder="Ex: BEM,BAC,LICENCE..."></div>
        <div class="input-control tab">
            <label for="num_tel">Numéro De Téléphone</label>
            <input type="text" name="num_tel" id="numTel" placeholder="Votre Numéro De Téléphone"></div>
        <div class="input-control tab"> <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Votre Email"></div>
        <div class="input-control tab"><label for="num_piece_id">Numéro De Pièce D'identité</label>
            <input type="text" name="num_piece_id" id="numPieceId" placeholder="Numéro Inscrit Sur Votre Carte Nationale Ou Permis">
        </div>
        <div class="input-control tab"> <label for="father_surname">Prénom Du Père</label>
            <input type="text" name="father_surname" id="fatherSurname" placeholder="Le Prénom de Votre Père">
        </div>
        <div class="input-control tab"><label for="mother_name">Nom Et Prenom De La Mère</label>
            <input type="text" name="mother_name" id="motherName" placeholder="Nom Et Prénom De Votre Mère">
        </div>
        <div class="input-control tab">
            <label for="specialite">Spécialité</label>

            <select name="specialite" id="specialite">
                <option selected value="aide_soignant">Aide Soignant(e)</option>
                <option value="auxiliare_pueri">Auxiliaire De Puériculture </option>
            </select></div>
        <div class="input-control  tab">
            <label for="password">Mot De Passe</label>
            <input type="password" name="password" id="password" placeholder="Mot De Passe">
        </div>
        <div class="input-control  tab">
            <label for="confirm_password">Confirmer Le Mot De Passe</label>
            <input type="password" name="confirm_password" id="confirmPassword" placeholder="Confirmer Le Mot De Passe">
        </div>
        <button type="button" id="prevBtn" class="btn" onclick="nextPrev(-1)">Precédent</button>
        <button type="button" class="btn" onclick="nextPrev(1)" id="nextBtn">Suivant</button>
        
        <div class="steps-container">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>            
        </div>
    </form>

</div>
@endsection