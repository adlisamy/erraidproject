<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Erraid</title>


    <!-- Styles -->
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">

</head>

<body>

    <div class="wrapper">
        <!-- Top Area -->
        @include('header')
        <!-- End Top Area -->

        <!-- Header Area -->
        <header>
            <div class="slider">
                <div class="slide current">
                    <div class="content">
                        <h2>Hall De L'&Eacute;cole</h2>
                        <p>Un hall où toutes les informations nécessaires et relatives à l'éducation sont  à dispotion des élèves</p>
                    </div>
                    <img src="{{url('/img/couloir_img.jpg')}}" alt="couloir">
                </div>
                <div class="slide">
                    <div class="content">
                        <h2>Salles De Classes  </h2>
                        <p>Les classes de l'école ERRAID accueillent un nombre limité d'élèves pour avoir un apprentissage qualitatif </p>
                    </div>
                    <img src="{{url('/img/classe_img.jpg')}}" alt="classe">
                </div>
                <div class="slide">
                    <div class="content">
                        <h2>Corps D'apprentissage</h2>
                        <p>L'école ERRAID donne les outils necessaires à ses élèves pour mieux visualiser 
                            les concepts théoriques comme ce corps humain qui aide à
                            la compréhension de l'antomie humaine </p>
                    </div>
                    <img src="{{url('/img/corps_img.jpg')}}" alt="corps">
                </div>
                <div class="slide">
                    <div class="content">
                        <h2>Laboratoire D'Analyse</h2>
                        <p>L'école ERRAID donne la possibilité à ses élèves de mettre en pratique les connaissances acquises, comme par exemple l'utilisation d'un laboratoire d'analyse
                           muni de la technologie nécessaire pour mener à bien les expériences</p>
                    </div>
                    <img src="{{url('/img/labo_analyse_img.jpg')}}" alt="labo">
                </div>
            </div>

            <div class="buttons">
                <button id="prev"> <i class="fas fa-arrow-left"></i></button>
                <button id="next"> <i class="fas fa-arrow-right"></i></button>
            </div>
        </header>
        <!-- End Header Area -->
        <!-- Content Area -->
        <div class="content-container">
            <h1>Pendant les stages L'&Eacute;cole ERRAID Met à disposition des élèves</h1>
            <section>
                <div class="content">
                    <h2>Des salles de repos</h2>
                    <p>Espace d'accueil des patients admis où les élèves pourront les examiner dans le cadre de leurs stages</p>
                </div>
                <img src="{{url('/img/salle_img.jpg')}}" alt="salle">

            </section>
            <section>
                <img src="{{url('/img/accouchement_img.jpg')}}" alt="accouchement">
                <div class="content">
                    <h2>Des salles d'accouchement</h2>
                    <p>Espace pour les femmes enceintes où les élèves pourront assister un accouchement et mieux apprendre la procèdure</p>
                </div>
            </section>
            <section>
                <div class="content">
                    <h2>Des salles de consultation</h2>
                    <p>Espace où le patient en question pourra être consulté et aura accès à tous les examens utiles au diagnostic</p>
                </div>
                <img src="{{url('/img/consultation_img.jpg')}}" alt="consultation">
            </section>
        </div>
        <!-- End Content Area -->
        <!-- Formations Area -->
        <div class="offers">


            <h1>Nos Formations</h1>
            <p>Deux types de certificatitions sont disponibles une certification d'état et une autre d'aptitude</p>
            <div class="formations">
                <div class="formation">
                    <h2>Aide Soignant(e)</h2>
                    <p>Possibilté d'avoir une certification pour le métier d'Aide Soignant(e)</p>
                    <hr>
                    <div class="my-offer"><span> État </span></div>
                </div>
                <div class="formation">
                    <h2>Auxiliaire De Puericulture</h2>
                    <p>Possibilté d'avoir une certification pour le métier de Puericulture</p>
                    <hr>
                    <div class="my-offer">
                        <span> État </span>
                    </div>
                </div>
                <div class="formation">
                    <h2>Accoucheuse</h2>
                    <p>Possibilté d'avoir une certification pour le métier d'Acoucheuse</p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Assitant(e) Médical(e)</h2>
                    <p>Possibilté d'avoir une certification pour le métier d'Assitant(e) Médical(e)</p>
                    <hr>
                    <div class="my-offer"> Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Délégué(e) Pharmaceutique</h2>
                    <p>Possibilté d'avoir une certification pour le métier de Délégué(e) Pharmaceutique</p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Vendeur(se) En Pharmacie</h2>
                    <p>Possibilté d'avoir une certification pour le métier de Vendeur(se) En Pharmacie</p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Opérateur En Radiologie</h2>
                    <p>Possibilté d'avoir une certification pour le métier d'Opérateur En Radiologie</p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Téchnicien Supérieur En Laboratoire</h2>
                    <p>Possibilté d'avoir une certification pour le métier de Téchnicien Supérieur En Laboratoire</p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Chauffeur Ambulancier</h2>
                    <p>Possibilté d'avoir une certification pour le métier de Chauffeur Ambulancier</p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Brancardier</h2>
                    <p>Possibilté d'avoir une certification pour le métier de Brancardier </p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
                <div class="formation">
                    <h2>Kinésithérapeute</h2>
                    <p>Possibilté d'avoir une certification pour le métier de Kinésithérapeute </p>
                    <hr>
                    <div class="my-offer">Aptitude</div>
                </div>
            </div>

        </div>

        <!-- End Formations Area -->
        <!-- Testimonials Area -->
        <div class="testimonials">
            <h2>&Eacute;cole Avec Une Certification Agrée Par L'&Eacute;tat</h2>
            <p>Les formations proposés par l'école privée ERRAID offre la possibilité d'avoir une certification agrée par l'état (شهادة دولة) pour certaines
                formations et une certification d'aptitude (شهادة كفاءة) pour d'autres.</p>
            <div class="success-testimonial">
                <img src="{{url('/img/agree_img.png')}}" alt="conformite">
            </div>

        </div>
        <!-- End Testimonials Area -->
    </div>

    <!-- Footer Area  -->
    @include('footer')
    <!-- End Footer Area -->

    <script src="{{url('/js/app.js')}}"></script>
</body>

</html>