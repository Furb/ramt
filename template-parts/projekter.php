<?php 
/*
Template part for projekter
*/
?>





<section id="projekter" class="py-24 scroll-mt-24">
    <h2 class="container col-span-full">Projekter</h2>

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
    
    <div class="projekt mb-56">
    <div class="grid grid-cols-12 gap-8 mb-8">
        
     
        <div class="left col-span-6 md:col-span-3 md:col-start-2">
            <hr class="border-softGrey py-4">
            <h3 class="pb-8"><?php echo esc_html($projekt_info['projekt_overskrift']); ?></h3>

            <div class="grid grid-rows-auto space-y-4 small">
                <div class="flex gap-4"><div>Rolle</div><div class="font-bold"><?php echo esc_html($projekt_info['rolle']); ?></div></div>
                
                <div class="flex gap-4"><div>Ca. m²</div><div class="font-bold"><?php echo esc_html($projekt_info['m2']); ?></div></div>
                <div class="flex gap-4"><div>Årstal</div><div class="font-bold"><?php echo esc_html($projekt_info['aarstal']); ?></div></div>
                <div class="flex gap-4"><div>Kunde</div><div class="font-bold"><?php echo esc_html($projekt_info['kunde']); ?></div></div>

<?php if (have_rows('projekt_info_samarbejdspartner')) : ?>
    <div class="flex gap-4">
        <div>Samarbejdspartnere</div>
        <div class="font-bold">
            <?php 
            while (have_rows('projekt_info_samarbejdspartner')) : the_row();
                $firma = esc_html(get_sub_field('firma'));
                $firma_link = esc_url(get_sub_field('firma_link'));

                // If a link exists, wrap in <a>, otherwise just show the name
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


                <div class="flex gap-4"><div>Enterprise</div><div class="font-bold"><?php echo esc_html($projekt_info['entreprise']); ?></div></div>
            </div>
        </div>

        <div class="right col-span-8">
    <!-- Image Slider -->
    <div class="slider flex items-end gap-4 projektBilleder overflow-hidden whitespace-nowrap transition-all duration-300">
        <?php 
        $billeder = get_field('projekt_billeder'); // Get ACF Gallery

        if ($billeder) : 
            foreach ($billeder as $billede) :
                $billede_url = esc_url($billede['url']);
                $billede_alt = esc_attr($billede['alt']);
        ?>
                <img src="<?php echo $billede_url; ?>" alt="<?php echo $billede_alt; ?>" class="object-cover h-80 flex-shrink-0">
        <?php 
            endforeach; 
        endif; 
        ?>
    </div>
</div>
    </div>

    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-8 col-start-5">
            <div class="flex items-center gap-x-24">
                <div class="flex gap-x-4">
                    <button class="prevButton cursor-pointer">
                        <span class="material-symbols-outlined text-secondary !text-4xl font-light">arrow_circle_left</span>
                    </button>
                    <button class="nextButton cursor-pointer">
                        <span class="material-symbols-outlined text-secondary !text-4xl font-light">arrow_circle_right</span>
                    </button>
                </div>

                <div class="indicators flex gap-x-4">
                   
                </div>
            </div>
        </div>
    </div>

   
    </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>





</section>
