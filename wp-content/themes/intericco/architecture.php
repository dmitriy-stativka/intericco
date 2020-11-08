<?php
/*
Template Name: architecture
*/
get_header(); ?>


<div class="design-wrapper">

  <div class="middle-line middle-line-first"></div>
  <div class="middle-line middle-line-second"></div>
  <div class="middle-line middle-line-third"></div>
  <div class="middle-line middle-line-fourth"></div>
  <div class="middle-line middle-line-fifth"></div>
  <?php include("menu.php") ?> 
    <div class="design-container">
        <div class="top-crumbs">
            <a class="crumbs-item" href="/dizajn">Дизайн</a>
            <div class="crumbs-last">
               <span>Архитектура</span>
                <span class="line line-purple"></span>
                <span class="line line-corner"></span>
                <span class="line line-blue"></span>  
            </div>
        </div>

        <div class="design-tabs">

            <?php
                wp_reset_postdata();
                global $post;
            ?>
          
              <?php 
                $terms = get_terms(
                  array(
                    'taxonomy'   => 'categoryarchitecture',
                    'hide_empty' => true,
                    'hierarchical' => false,
                    'orderby' => 'name',
                    'order' => 'ASC',
                  )
                );
                $categoryNumbs = count($terms); ?>

                <?php
                $nunbOfCategory;
                foreach (  $terms as $categoryNumb ) { 
                  $nunbOfCategory++;
                  ?>
                  
                    <input id="design-tab<?php echo $nunbOfCategory;?>" type="radio" name="design" />

              <?php }?>

                <?php
                    wp_reset_postdata();
                    global $post;
                ?>
      
            <ul class="design-tabs-labels">
              <?php 
                $terms = get_terms(
                  array(
                    'taxonomy'   => 'categoryarchitecture',
                    'hide_empty' => true,
                    'hierarchical' => false,
                    'orderby' => 'name',
                    'order' => 'ASC',
                  )
                );
                $number;
                foreach ( $terms as $term ) { 
                  $number++;
                  ?>
                  <li class="tab<?php echo $number;?>">
                    <label for="design-tab<?php echo $number;?>"><?php echo $term->name; ?></label>
                  </li>
                <?php } ?>
            </ul>
    
            <section class="tabs-content-container">
              <span class="line line-purple"></span>
              <span class="line line-corner"></span>
              <span class="line line-blue"></span>  
              <div class="design-icon"><img src="/wp-content/themes/intericco/images/design-icon.svg" alt=""></div>

              <?php 
                $terms = get_terms(
                  array(
                    'taxonomy'   => 'categoryarchitecture',
                    'hide_empty' => true,
                    'hierarchical' => false,
                    'orderby' => 'name',
                    'order' => 'ASC',
                  )
                );
               
                  $categoryNumbs = count($terms);
                  $totot = -1;
                  foreach ($terms as $categoryNumbs ) { 
                    $totot++;
                    $oooo = $terms[$totot]->term_taxonomy_id;
                    $lolo;
                    $lolo++;
                    ?>
                      <div class="tabs-block block-tab<?php echo $lolo;?>">
                      <?php
                        $tax = $oooo;
                        $params = array(
                            'post_type' => 'architecture',
                            'tax_query' => array(
                              array(
                                  'taxonomy' => 'categoryarchitecture',
                                  'field'     => 'term_id',
                                  'terms'     => $tax,
                              )
                            ),
                            'posts_per_page' => -1
                        );
                        $query = new WP_Query( $params );
                        ?>
                        <?php if($query->have_posts()): ?>
                            
                            <?php while ($query->have_posts()): $query->the_post() ?>
                                <?php $miniImg = get_field('miniatyura');  
                                      $opisanie = get_field('opisanie')
                                ?>

                                <a href="<?php the_permalink();?>" style="background: url(<?php echo $miniImg['url']?>); background-size: cover;" class="tabs-block-item">
                                  <h2><?php the_title();?></h2>
                                  <p><?php echo $opisanie;?></p>
                                </a>

                                <?php endwhile; ?>
                        <?php endif; 
                      ?>


                      </div>

                  <?php } ?>

                  <?php
                    wp_reset_postdata();
                    global $post;
                  ?>

            </section>
          </div>

          <div class="design-seo">

            <div class="design-icon"><img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt=""></div>

            <div class="lines-title-wrapper">
              <h1 class="lines-title info-middle-top-title"><?php the_field('title_seo')?></h1>
              <span class="line line-purple line-purple-mob"></span>
              <span class="line line-corner line-corner-mob"></span>
              <span class="line line-blue line-blue-mob"></span>             
            </div>  

           

            <div class="design-seo-middle">
                <?php the_content();?>
            </div>

          </div>
    </div>
</div>

<?php get_footer(); ?>