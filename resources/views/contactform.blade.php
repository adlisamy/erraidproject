@extends('layouts.contact')
@section('contactform')

<div class="contact1">
    <div class="contacts">
        <ul class="contacts-list">
            <li>
                <div class="mobile1-icon">
                    <i class="fa fa-phone fa-2x "></i>
                </div>
                <div class="mobile1-infos">
                    <div class="mobile1-text">Mobile 1 :</div>
                    <div class="mobile1-number"><b>+213&nbsp;559365651</b></div>
                </div>
            </li>
            <li>
                <div class="mobile2-icon">
                    <i class="fa fa-phone fa-2x "></i>
                </div>
                <div class="mobile2-infos">
                    <div class="mobile2-text">Mobile 2 :</div>
                    <div class="mobile2-number"> <b>+213&nbsp;559430702</b></div>
                </div>
            </li>
            <li>
                <div class="fixe-icon">
                    <i class="fa fa-fax fa-2x "></i>
                </div>
                <div class="fixe-infos">
                    <div class="fixe-text">Mobile 2 :</div>
                    <div class="fixe-number"> <b>+213&nbsp; 031629819 </b></div>
                </div>
            </li>
        </ul>
    </div>
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="{{url('img/img-01.png')}}" alt="IMG">
        </div>

        <form class="contact1-form validate-form">
            <span class="contact1-form-title">
                Votre Commentaire
            </span>

            <div class="wrap-input1 validate-input" data-validate="Nom Et Prénom requis">
                <input class="input1" type="text" name="com_name" placeholder="Nom Et Prénom">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Email valide: ex@abc.xyz">
                <input class="input1" type="text" name="com_email" placeholder="Email">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Objet du message requis">
                <input class="input1" type="text" name="com_subject" placeholder="Sujet">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Message/Question sont requs">
                <textarea class="input1" name="com_message" placeholder="Message/Question"></textarea>
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn">
                    <span>
                        Envoyer 
                        <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection