<?php/*Template Name: создать обычную страницу блогаTemplate Post Type: page*/ get_header(); ?> <?php get_template_part( 'template-parts/content-breadcrumb' ); ?><div class="container">  <div class="row">    <div class="page_content clearfix">      <div class="page_maincontent"><?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>        <article class="post">          <div class="post-thumb">          <?php the_post_thumbnail('post_thumb'); ?>          </div>          <div class="entry-header">            <h2><?php the_title();?></h2>            <div class="post-content">               <?php the_content(); ?>           </div>         </div><?php if (get_post_meta($post->ID, 'dell_usualpage', true ) !='off') : ?>   <div class="single_offfer">     <div class="single_offfer_pic">       <?php if (get_post_meta($post->ID, 'baner_usualpage', true )) : ?>        <img src="<?php echo get_post_meta($post->ID, 'baner_usualpage', true ); ?>" alt="это банер для продажи товара на странице: <?php the_title(); ?>">      <?php endif; ?>    </div>    <div class="single_offfer_text">      <?php if (get_post_meta($post->ID, 'usualpage_textarea', true )) : ?>        <?php echo get_post_meta($post->ID, 'usualpage_textarea', true ); ?>      <?php endif; ?>      <?php if (get_post_meta($post->ID, 'usualpage_link', true )) : ?>        <a href="<?php echo get_post_meta($post->ID, 'usualpage_link', true ); ?>" target="_blank">        <?php endif; ?>        <?php if (get_post_meta($post->ID, 'usualpage_ankor', true )) : ?>         <?php echo get_post_meta($post->ID, 'usualpage_ankor', true ); ?>       <?php endif; ?>     </a>   </div> </div><?php endif; ?>       </article><?php endwhile; ?><?php endif; ?>     </div>     <div id="sidebar" class="page_sidebarcontent">      <div class="widget">       <h2 class="footer_title">Быстрые ссылки</h2>       <div class="footer_links">        <ul>          <li class="fa-caret-right"><a href="#"> О нас</a></li>          <li><a href="#">Блог</a></li>          <li><a href="#">Наши контакты</a></li>          <li><a href="#">Вопросы-Ответы</a></li>          <li><a href="#">О нас</a></li>          <li><a href="#">Гарантии</a></li>        </ul>      </div>    </div>    <div class="widget">     <h2 class="footer_title">Наши услуги</h2>     <div class="footer_links">      <ul>        <li><a href="#">рбочие травмы</a></li>        <li><a href="#">спортивные травмы</a></li>        <li><a href="#">холодная лазераня терапия</a></li>        <li><a href="#">Вопросы-Ответы</a></li>        <li><a href="#">Массажная терапия</a></li>        <li><a href="#">Физеотерапия</a></li>        <li><a href="#">Химеотерапия</a></li>      </ul>    </div>  </div></div></div></div></div><?php get_footer(); ?>