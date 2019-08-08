<?php get_header(); ?>

<main role="main">
	  <?php the_post(); ?>
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><?php the_title(); ?></h1>
          <p class="lead text-muted"><?php the_excerpt(); ?></p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>
      <section>
	      	<div class="container">
		      	<div class="row">
		      		<div class="col">
		      			<?php the_content(); ?>
		      		</div>
		      	</div>
	      	</div>
      	</section>
    </main>

<?php get_footer(); ?>

https://www.youtube.com/watch?v=EeuICRNMqRg



https://unknowntest.myshopify.com/admin/themes/42507501619?key=sections/product-template-gallery.liquid

{% if section.settings.video_product and product.description contains 'iframe' %}

changed to 
{% if section.settings.video_product %}