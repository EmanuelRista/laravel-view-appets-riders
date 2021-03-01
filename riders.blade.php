@extends('templates.layout')
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div class="hero-container">
       <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
             <div class="carousel-item active" style="background: url(img/slide/slide-2.jpg); background-size: cover;">
                <div class="carousel-container">
                   <div class="carousel-content">
                      <h2 class="animate__animated animate__fadeInDown">Consegna con <span>Appets</span></h2>
                      <h2 class="animate__animated animate__fadeInDown"><span>Decidi tu</span> quando lavorare</h2>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch">
                 <div class="content">
                    <h3>Una squadra su cui <strong>poter contare</strong></h3>
                    <br>
                    <p class="about-text">
                      Se ti trovi in questa pagina probabilmente starai considerando di unirti al nostro team di riders. E' una scelta importante, questo perchè Appets non è un'azienda di food delivery come tutte le altre.
                    </p>
                    <p class="about-text"><strong>Noi siamo i Pirati del Food Delivery!</strong></p>
                    <p class="about-text">
                        Se deciderai di collaborare con noi ti garantiamo un riconoscimento economico adeguato al tuo lavoro unito con una notevole flessibilità di orario senza alcuna pressione da parte del personale di staff e dirigente. Inoltre sarai costantemente supportato dal nostro <strong>operations team</strong>.
                      </p>
                    <div class="about-image">
                       <img src="img/bomba.jpg" alt="">
                    </div>
                 </div>
                 <br>
                 <p class="about-text"><strong>Marco Zong detto "Il Bomba"<br>CEO & Fondatore</strong></p>
              </div>
           </div>
        </div>
     </section>
     <!-- End About Section -->
   <!-- ======= Requirements Section ======= -->
   <section id="requirements" class="requirements">
    <div class="container">
       <div class="section-title">
          <h2 v-observe-visibility="{ callback: (isVisible, entry) => animation_visibility(isVisible, entry, 'events') }" :class="{ 'visible animate__animated animate__fadeInLeft': animateSection.events, 'invisible': !animateSection.events }">Scegli tu dove e quando guadagnare <span>in Scooter, Bici o Auto</span></h2>
       </div>
       <div class="row requirement-item">
          <div class="col-lg-6">
             <img src="img/rider-req.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
             <h3>Sii padrone di te stesso e realizza i tuoi obiettivi di guadagno</h3>
             <div class="price">
                <p><span>Cosa ti serve</span></p>
             </div>
             <p class="font-italic">
                &check; Bicicletta, scooter o auto (con patente e assicurazione);
             </p>
             <p>
                &check; Smartphone con sistema operativo iOS 12, Android 6.0 o successivo;
             </p>
             <p>
                &check; Permesso di lavorare in Italia come lavoratore autonomo;
             </p>
             <p>
                &check; Essere maggiorenne;
             </p>
             <p>
                &check; Voglia di lavorare (e di guadagnare!);
             </p>
             <p>
                &check; Conoscenza della lingua italiana;
             </p>
          </div>
       </div>
    </div>
 </section>
  <!-- ======= End Requirements Section ======= -->
   <!-- =======  Apply now Section ======= -->
   <section id="apply-now" class="apply-now">
    <div class="container">

      <div class="section-title">
        <h2>Candidati <span>Subito</span></h2>
        <p>Non vediamo l'ora di averti nella nostra squadra! Abbiamo bisogno di te!</p>
      </div>

      <form action="" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Il tuo nome" data-rule="minlen:4" data-msg="Inserire almeno 4 caratteri">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="La tua email" data-rule="email" data-msg="Inserire una email valida">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Il tuo numero di telefono" data-rule="minlen:4" data-msg="Inserire almeno 4 caratteri">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Il tuo messaggio"></textarea>
          <div class="validate"></div>
        </div>
        <div class="text-center"><br><button class="btn btn-appets" type="submit">Invia messaggio</button></div>
      </form>

    </div>
  </section><!-- End Apply Now Section -->
@endsection