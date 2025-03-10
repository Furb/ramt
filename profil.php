<?php

/*
Template Name: Profil
*/

?>

<?php get_header(); ?>

<?php get_template_part('components/profil-dots') ?>


<div id="hero" class="bg-dark bg-[url(/wp-content/uploads/2025/03/mapramtstill.jpg)] bg-no-repeat bg-cover bg-center pt-72 pb-[5%] text-white h-[90svh]]">
    <div class="md:grid grid-cols-3 container mx-auto">
    <h2 class="col-span-full md:col-span-2 z-40">Tegnestue I tætte samarbejder med specialiserede faggrupper der  tilbyder 
rådgivning i alle byggeriets faser. </h2>
    <div class="hidden justify-end hero__logo col-span-full md:col-span-2 md:col-start-2 "><img src="/wp-content/uploads/2025/02/logo_green.svg" alt="Tegnestuen ramt logo" class="max-w-[38rem]"></div>
</div>
</div>

<?php get_template_part('template-parts/projekter'); ?>

<section id="profil" class="py-24 relative">
    <div class="grid grid-cols-12 container">
        
        <div id="left__side" class="col-span-full md:col-start-2 md:col-span-5">
            

        <div class="text__box font-600 mb-16">
                <p>Tegnestuen RAMT blev stiftet i marts 2024 af Søren Theodor Vedsted, stifter og indehaver, som har en årelang erfaring erfaring fra arkitektbranchen.</p>
            </div>
          
            
            <div class="text__box mb-16">
                
                <p>RAMT er en kreativ tegnestue, der fokuserer på klodens ressourcer – et vigtigt designparameter i alle opgaver, der skal løses. Vi arbejder med en bred vifte af projekter – fra offentlige byggerier til transformation og restaurering – altid med fokus på at integrere funktionalitet og æstetik.</p>
            </div>

            <div class="text__box mb-16">
                
                <p>Vi yder professionel rådgivning og sikrer altid helhedsorienterede løsninger, der skaber kvalitet i byggeprocessen. Vi står nemlig altid ved siden af vores kunder og samarbejdspartnere med en fokuseret projekterings- og byggeledelse, der sikrer effektiv koordinering og styring af projekter fra idé til færdiggørelse.</p>
            </div>

            <div class="text__box mb-16">
       
                <p>RAMT varetager alle byggeriets faser i tæt samarbejde med specialiserede faggrupper. Sådan levere de bedste og mest gennemarbejdede løsninger.

</p>
            </div>
        </div>

        <div id="right__side">

        </div>
    </div>
</section>
<section id="medarbejdere" class="pb-24">
    <div class="container mx-auto">
    <div class="grid grid-cols-12 gap-x-8 gap-y-12 2xl:gap-16">
        <div class="col-span-full md:col-span-4">
            <img src="/wp-content/uploads/2025/02/sorentheodor2-768x512.jpg" alt="medarbejder" class="rounded-xl mb-4">
            <p class="label">Søren Theodor Vedsted</p>
          <small class="block">Indehaver & bygningskonstruktør</small>
          <small class="block"><a href="mailto:theodor@ramt.dk">theodor@ramt.dk</a></small>
          <small class="block">Tlf: 60 13 14 18</small>
        </div>
        <div class="col-span-full md:col-span-4 md:-mt-24">
            <img src="/wp-content/uploads/2025/02/anna-768x512.jpg" alt="medarbejder" class="rounded-xl mb-4">
            <p class="label">Anna Baumann</p>
            <small class="block">Bygningskonstruktør MAK</small>
            <small class="block"><a href="mailto:anna@ramt.dk">anna@ramt.dk</a></small>
        </div>
        <div class="col-span-full md:col-span-4 md:-mt-48">
            <img src="/wp-content/uploads/2025/03/billede_paa_vej.jpg" alt="medarbejder" class="rounded-xl mb-4">
            <p class="label">Celina Alison Aballe Nielsen</p>
            <small class="block">Bygningskonstruktør MAK</small>
            <small class="block"><a href="mailto:celina@ramt.dk">celina@ramt.dk</a></small>
        </div>
    </div>
    </div> 
</section>
<section id="hverdag"></section>
<?php get_footer(); ?>