<?php/*Template Name: services*/?><?php get_header(); ?><section class="block_portfolio_page">  <div class="container">    <?php if (get_post_meta($post->ID, 'services_page_title', true )) : ?>      <h2 class="block_title"><?php echo get_post_meta($post->ID, 'services_page_title', true ); ?></h2>    <?php endif; ?>    <?php if (get_post_meta($post->ID, 'services_page_descript', true )) : ?>      <div class="block_descr"> <?php echo get_post_meta($post->ID, 'services_page_descript', true ); ?>    </div>  <?php endif; ?>  <div class="row">       <?php $sliders_services = get_post_meta( $post->ID, 'servicespage_slider_list', true );// echo '<pre>';// print_r($sliders_services);// echo '</pre>';?>    <div class="portfolio_box"><?php  foreach ($sliders_services as $sliderservices) :    $slide_header_services = $sliderservices['servicespage_list_header'] ? $sliderservices['servicespage_list_header'] : '';    $slider_upload_services = $sliderservices['servicespage_list_upload'] ? $sliderservices['servicespage_list_upload'] : ''; $slider_descr_services = $sliderservices['servicespage_list_descr'] ? $sliderservices['servicespage_list_descr'] : '';$slider_link_services = $sliderservices['servicespage_list_link'] ? $sliderservices['servicespage_list_link'] : '';$slider_linkankor_services = $sliderservices['servicespage_list_linkankor'] ? $sliderservices['servicespage_list_linkankor'] : '';  ?>      <div class="portfolio_box_items servicespage_box_items">        <div class="servicespage_pic">          <img src="<?php echo $slider_upload_services; ?>" alt="медицина">        </div>        <div class="servicespage_title"><?php echo $slide_header_services; ?></div>        <div class="servicespage_discr"><?php echo $slider_descr_services; ?>        </div>        <a href="<?php echo get_the_permalink($slider_link_services); ?>" class="header_button">        <?php echo $slider_linkankor_services; ?></a><!-- <?php echo get_the_permalink(get_post_meta($post->ID, 'link_pageselect', true )); ?> -->      </div> <?phpendforeach;?>    </div>  </div></div></section><section class="block_with_buton" >  <div class="container">    <div class="row">      <div class="with_buton">        <?php if (get_post_meta($post->ID, 'services_spesial_propose_title', true )) : ?>          <h2><?php echo get_post_meta($post->ID, 'services_spesial_propose_title', true ); ?></h2>        <?php endif; ?>        <?php if (get_post_meta($post->ID, 'services_spesial_propose_link_pageselect', true ))  : ?>          <a href="<?php echo get_the_permalink(get_post_meta($post->ID, 'services_spesial_propose_link_pageselect', true )); ?>" class="header_button">          <?php endif; ?>          <?php if (get_post_meta($post->ID, 'services_spesial_propose_link', true ))  : ?>            <?php echo get_post_meta($post->ID, 'services_spesial_propose_link', true ); ?></a>          <?php endif; ?>        </div>      </div>    </div>  </section><?php get_footer(); ?>