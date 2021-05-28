<section class="container menu-partie">
<?php

    if (have_rows('card_organization')): 
        while (have_rows('card_organization')): 
            the_row();
            
            /* Titre de la partie */
            if( get_row_layout() == 'basic_presentation_picture' ):

                $title_part = get_sub_field('title_part'); ?>

                    <h2 class="menu-partie--titre">
                        <?php echo $title_part ?>
                    </h2>
                            
            <?php endif;
                
            /* Contenu de la partie */
            if (have_rows('dishes')): while (have_rows('dishes')): the_row();


                $dish_name = get_sub_field('dish_name');
                $ingredients = get_sub_field('ingredients');
                $dish_price = get_sub_field('dish_price');
                $dish_picture = get_sub_field('dish_picture'); $size = 'medium'; ?>

                

                <div class="menu-partie--plat">

                    <div class="menu-partie--plat--description">
                        <div class="menu-partie--plat--description-img"> 
                            <?php echo wp_get_attachment_image($dish_picture, $size) ?>  
                        </div>
                       
                        <div class="menu-partie--plat--description-texte">
                            <h3><?php echo $dish_name ?></h3>
                            <p><?php echo $ingredients ?></p>
                        </div>
                    </div>

                    
                    <div class="menu-partie--plat--prix">
                        <p class="prix"><?php echo $dish_price ?></p>
                    </div>  

                </div>
                
            

            <?php endwhile; endif;


        endwhile;
    endif;


?>
</section>