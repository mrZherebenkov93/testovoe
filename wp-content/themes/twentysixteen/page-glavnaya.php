<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
  <div class="row">
<div class="block-nedvizhimost col-sm">
	<h5>Квартиры</h5>
<?php	
$args=array(
'post_type' => 'nedvizhimost',
'realty'    => 'apartment',
'showposts'=>5,
);

$acsessuar = get_posts($args);
foreach ($acsessuar as $post) :
setup_postdata($post);
?>
<figure>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>	</a>		
<figcaption><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></figcaption>
			</figure>
<?php endforeach; ?>
</div>
		<div class="block-nedvizhimost col-sm">
			<h5>Офисы</h5>
<?php	
$args=array(
'post_type' => 'nedvizhimost',
'realty'    => 'office',
'showposts'=>5,
);

$acsessuar = get_posts($args);
foreach ($acsessuar as $post) :
setup_postdata($post);
?>
<figure>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>	</a>		
<figcaption><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></figcaption>
			</figure>
<?php endforeach; ?>
</div>	
		<div class="block-nedvizhimost col-sm">
			<h5>Частные дома</h5>
<?php	
$args=array(
'post_type' => 'nedvizhimost',
'realty'    => 'house',
'showposts'=>5,
);

$acsessuar = get_posts($args);
foreach ($acsessuar as $post) :
setup_postdata($post);
?>
<figure>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>	</a>		
<figcaption><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></figcaption>
			</figure>
<?php endforeach; ?>
</div>	
	  </div>	
			</div>	
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
