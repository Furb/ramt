<?php

/*
Template Name: Profil
*/

?>

<?php get_header(); ?>

<?php get_template_part('components/profil-dots') ?>


<div id="hero" class="bg-dark pt-72 pb-24 text-white">
    <div class="md:grid grid-cols-12 container mx-auto md:h-[80svh]">
    <h2 class="col-span-full md:col-span-7 z-40">Tegnestue I tætte samarbejder med specialiserede faggrupper der  tilbyder 
rådgivning i alle byggeriets faser. </h2>
    <div class="hidden md:flex hero__logo col-start-6 col-span-6 self-end"><img src="/wp-content/uploads/2025/02/logo_green.svg" alt="Tegnestuen ramt logo"></div>
</div>
</div>

<section id="profil" class="py-24">
    <div class="grid grid-cols-12 container">
        <div id="left__side" class="col-span-full md:col-start-2 md:col-span-5">
            <p class="label mb-24">tegnestuens ekspertise</p>
            <div class="text__box mb-24">
                <h3 class="mb-8">Frostbadning</h3>
                <p>En detaljeret analyse af kundens behov og lokalets potentiale. Vi udvikler skræddersyede designforslag, der optimerer pladsen og skaber moderne og indbydende bygninger med fokus på bæredygtighed og kvalitet.</p>
            </div>

            <div class="text__box mb-24">
                <h3 class="mb-8">Pælesidning</h3>
                <p>En detaljeret analyse af kundens behov og lokalets potentiale. Vi udvikler skræddersyede designforslag, der optimerer pladsen og skaber moderne og indbydende bygninger med fokus på bæredygtighed og kvalitet.</p>
            </div>

            <div class="text__box mb-24">
                <h3 class="mb-8">Svedhytte rekorder</h3>
                <p>En detaljeret analyse af kundens behov og lokalets potentiale. Vi udvikler skræddersyede designforslag, der optimerer pladsen og skaber moderne og indbydende bygninger med fokus på bæredygtighed og kvalitet.</p>
            </div>
        </div>

        <div id="right__side">

        </div>
    </div>
</section>
<section id="medarbejdere" class="pb-24">
    <div class="container">
  
    <div class="grid grid-cols-12 gap-x-8 gap-y-48 md:gap-16">
        <div class="col-span-full sm:col-span-6">
            <img src="/wp-content/uploads/2025/02/sorentheodor2-768x512.jpg" alt="medarbejder" class="rounded-xl mb-4">
            <p class="label">Søren Theodor Vedsted</p>
          <small>Indehaver & bygningskonstruktør</small>
        </div>
        <div class="col-span-full sm:col-span-6 -mt-24">
            <img src="/wp-content/uploads/2025/02/anna-768x512.jpg" alt="medarbejder" class="rounded-xl mb-4">
            <p class="label">Anna Baumann</p>
            <small>Bygningskonstruktør MAK</small>
        </div>
    </div>
    </div> 
</section>
<section id="hverdag"></section>
<?php get_footer(); ?>