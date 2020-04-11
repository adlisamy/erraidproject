 <!-- Top Area  -->
 <div class="top-area-container">
     <div class="welcome">Bienvenue sur - Erraid - مرحبا بكم في</div>
     <div class="connect-with-us">
         <div class="login">
             <i class="fas fa-lock" aria-hidden="true"></i>
             <a href="{{url('/login')}}"><span class="connect">Connexion</span>
             </a>
         </div>
         <div class="register">
             <i class="fa fa-sign-in-alt" aria-hidden="true"></i>
             <a href="{{url('/registration')}}"><span class="register-me">Inscription</span></a>
         </div>
         <div class="social">
             <a href="https://www.facebook.com/erraiddz">
                 <i class="fab fa-facebook-f"></i>
             </a>
             <a href="https://www.facebook.com/messages/t/1227315477412121">
                 <i class="fab fa-facebook-messenger"></i>
             </a>
         </div>
     </div>
 </div>
 <!--  End Top Area -->
 <!-- Naviagtion Area -->

 <nav class="navigation" id="navbar">
     <div class="brand">
         <div class="brand-logo">
             <img src="{{url('/img/official_logo.png')}}" alt="logo">
         </div>
         <div class="brand-title">
             <div class="brand-title-fr"> Erraid </div>
             <div class="brand-title-ar" lang="ar"> الرائد</div>
         </div>

     </div>
     <div class="links">
         <a href="{{url('/home')}}">ACCUEIL</a>
         <a href="{{url('/about')}}">Qui Sommes Nous ?</a>
         <a href="{{url('/contact')}}">CONTACTEZ NOUS</a>
     </div>
 </nav>


 <!-- End Naviagtion Area -->