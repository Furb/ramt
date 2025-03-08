<?php 
/*
Template part for projekter
*/
?>





<section id="projekter" class="py-8 md:py-24 scroll-mt-12 px-8">
    <div class="container">
    <h2>Projekter</h2>

<?php 
    $projekter = new WP_Query(
        array(
            'post_type' => 'projekt', 
            'posts_per_page' => 12
        )
    );

    if ($projekter->have_posts()) :
        while ($projekter->have_posts()) : $projekter->the_post(); 

        $projekt_info = get_field('projekt_info');

    ?>
    
    <div class="projekt mb-24 md:mb-56">
    <div class="grid grid-cols-12 gap-8 mb-8">
        
     
        <div class="left col-span-full md:col-span-4">
            <hr class="border-softGrey py-4">
            <h3 class="pb-8"><?php echo esc_html($projekt_info['projekt_overskrift']); ?></h3>

            <div class="grid grid-rows-auto space-y-4 small">
                <div><p class="text-[0.875rem]">Rolle</p><div class="font-bold"><?php echo esc_html($projekt_info['rolle']); ?></div></div>
                
                <div><p class="text-[0.875rem]">Ca. m²</p><div class="font-bold"><?php echo esc_html($projekt_info['m2']); ?></div></div>
                <div><p class="text-[0.875rem]">Årstal</p><div class="font-bold"><?php echo esc_html($projekt_info['aarstal']); ?></div></div>
                <div><p class="text-[0.875rem]">Kunde</p><div class="font-bold"><?php echo esc_html($projekt_info['kunde']); ?></div></div>

<?php if (have_rows('projekt_info_samarbejdspartner')) : ?>
    <div>
        <p class="text-[0.875rem]">Samarbejdspartnere</p>
        <div class="font-bold">
            <?php 
            while (have_rows('projekt_info_samarbejdspartner')) : the_row();
                $firma = esc_html(get_sub_field('firma'));
                $firma_link = esc_url(get_sub_field('firma_link'));

                
                if ($firma_link) {
                    echo '<a href="' . $firma_link . '" target="_blank" rel="noopener" class="underline underline-offset-1 hover:text-secondary">' . $firma . '</a><br>';
                } else {
                    echo $firma . '<br>';
                }
            endwhile;
            ?>
        </div>
    </div>
<?php endif; ?>

<?php if (have_rows('projekt_info_enterprise')) : ?>
    <div>
        <p class="text-[0.875rem]">Enterprise</p>
        <div class="font-bold">
            <?php 
            while (have_rows('projekt_info_enterprise')) : the_row();
                $firma = esc_html(get_sub_field('firma'));
                $firma_link = esc_url(get_sub_field('firma_link'));

                
                if ($firma_link) {
                    echo '<a href="' . $firma_link . '" target="_blank" rel="noopener" class="underline underline-offset-1 hover:text-secondary">' . $firma . '</a><br>';
                } else {
                    echo $firma . '<br>';
                }
            endwhile;
            ?>
        </div>
    </div>
<?php endif; ?>


              
            </div>
        </div>

        <div class="right col-span-full md:col-span-8">
    <!-- gallery -->




   
    <div class="columns-1 sm:columns-2 2xl:columns-3 gap-4>
        <?php 
        $billeder = get_field('projekt_billeder'); 

        if ($billeder) : 
            foreach ($billeder as $billede) :
                $billede_url = esc_url($billede['url']);
                $billede_alt = esc_attr($billede['alt']);
        ?>
                <img src="<?php echo $billede_url; ?>" alt="<?php echo $billede_alt; ?>" class="mb-4 break-inside-avoid rounded-xl">
        <?php 
            endforeach; 
        endif; 
        ?>
    </div>
</div>
    </div>

   
    </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>



</div>

</section>
