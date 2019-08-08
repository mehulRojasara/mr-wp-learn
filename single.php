<?php get_header(); ?>

<main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><?php the_title(); ?></h1>
          <p class="lead text-muted"><?php the_excerpt(); ?></p>
          <p>
            <a href="<?php echo home_url() ?>" class="btn btn-primary my-2"><i class="fas fa-arrow-left mr-2"></i>GO BACK</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
			
			<?php the_post(); ?>
			
				<div class="col-md-8">
	              <div class="card box-shadow">
	                <?php 
		              		if ( has_post_thumbnail() ) { ?>
		              			<img src="<?php echo the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
              		 	<?php } ?>
	                <div class="card-body">
	                  <h3 class="card-text text-green mb-3"><?php the_title(); ?></h3>
	                  <p class="card-text"><?php the_content(); ?></p>
	                </div>
	              </div>
	            </div>
          		<div class="col-md-4">
          			<div class="card box-shadow">
	                <div class="card-body">
	                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, ratione ullam dolorum, officia quo illum asperiores incidunt ab quod repellat velit laudantium, quos. Earum eius dicta optio commodi repellat, mollitia.</p>
	                </div>
	              </div>
          		</div>
          </div>
          </div>
        </div>
    </main>

<?php get_footer(); ?>