@extends('admin.dashboard')
@section('content')
<div class="col-md-12">
    <div class="row">
        <div class="heading">
            <h1>Emploi Du Temps</h1>
            <p>Bienvenue dans la partie plannification</p>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="row">
        <div class="info-container">
            <h3>Groupe : 1 </h3>
            <div class="year-spec">
                <span>Année : &nbsp; 2</span>
                <span>Option : &nbsp; Aide Soigant(e)</span>
            </div>
            <div class="sem-year">
                <span>Semestre : &nbsp; 1</span>
                <span>Année Scolaire : 2020-2021</span>
            </div>
            <h2>P&Eacute;RIODE : 10/12/2020 au 11/12/2020 </h2>
        </div>

        <div class="planning-table" editable>
            <div class="line">
                <span class="horaire">HORAIRE</span>
                <span class="journee">JOURN&Eacute;E</span>
            </div>
            <div class="horaires">
                <div><span> 8H30 - 10H </span> </div>
                <div><span>10H15 - 11H45 </span></div>
            </div>
            <div class="horaires">
                <div><span>13H - 14H30</span></div>
                <div><span>14H30 - 16h</span></div>
            </div>
            <div class="observation"><span> Observations </span></div>
            <div><span>Dimanche</span></div>
            <div><span contenteditable="true">num6</span></div>
            <div><span contenteditable="true">num7</span></div>
            <div><span contenteditable="true">num8</span></div>
            <div><span>Lundi</span></div>
            <div><span contenteditable="true">num10</span></div>
            <div><span contenteditable="true">num11<span></div>
            <div><span contenteditable="true">num12<span></div>
            <div><span> Mardi </span></div>
            <div><span>num14</span></div>
            <div><span contenteditable="true">num</span></div>
            <div><span contenteditable="true">num</span></div>
            <div> <span> Mercredi </span></div>
            <div><span contenteditable="true"> num </span></div>
            <div><span contenteditable="true">num </span></div>
            <div><span contenteditable="true">num </span></div>
            <div><span> Jeudi </span></div>
            <div><span contenteditable="true">nul</span></div>
            <div><span contenteditable="true">num</span></div>
            <div><span contenteditable="true">num</span></div>
        </div>
    </div>
</div>
@endsection