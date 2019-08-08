<?php get_header(); ?>

<main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><?php the_title(); ?></h1>
          <p class="lead text-muted"><?php the_excerpt(); ?></p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

		<?php if ( have_posts() ) { ?>
          <div class="row">
			<div class="col">
				<ul class="portfolio-grid card-group">
					<li class="grid-sizer"></li>
					<?php $i = 0; ?>
					<?php while ( have_posts() ) : 
					the_post(); $count1 += $i + 0.2; ?>
					<li class="grid-item wow fadeInUp" data-wow-delay="<?php echo $count1 . 's' ?>">
						<div class="card box-shadow">
			              	<?php 
			              		if ( has_post_thumbnail() ) { ?>
			              			<img src="<?php echo the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
		          		 	<?php } else{ ?>
									<img src="<?php echo get_template_directory_uri() . '/assets/images/default.jpg'?>" class="card-img-top" alt="<?php the_title(); ?>">
		              		 <?php } ?>
			                <div class="card-body">
			                  <h5 class="card-text text-green"><?php the_title(); ?></h5>
			                  <p class="card-text"><?php the_excerpt(); ?></p>
			                  <div class="d-flex justify-content-between align-items-center">
			                    <div class="btn-group">
			                      <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">Read more</a>
			                    </div>
			                    <small class="text-muted">9 mins</small>
			                  </div>
			                </div>
			              </div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>          
          </div>
  	
  		<?php } ?>
          </div>
        </div>
    </main>

<?php get_footer(); ?>