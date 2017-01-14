<?php get_header(); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><?php echo get_theme_mod('banner_heading', 'Banner Heading'); ?></h1>
        <p class="lead"><?php echo get_theme_mod('banner_text','Welcome to the WordPress Business Theme. This theme uses the Twitter Bootstrap 3 framework and can be customized to your liking'); ?></p>
        <p><a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod('banner_btn_url','http://test.com'); ?>" role="button"><?php echo get_theme_mod('banner_btn_text','Sign Up Today'); ?></a></p>
      </div>
    </div>
    
    <section class="row marketing">
      <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('box1_icon','bar-chart'); ?> fa-3"></i>
            <h2><?php echo get_theme_mod('box1_heading','Box 1 Heading'); ?></h2>
            <p><?php echo get_theme_mod('box1_text','Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'); ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('box2_icon','code'); ?> fa-3"></i>
            <h2><?php echo get_theme_mod('box2_heading','Box 2 Heading'); ?></h2>
            <p><?php echo get_theme_mod('box2_text','Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'); ?></p>
          </div>
       </div>
        <div class="col-md-4">
          <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('box3_icon','desktop'); ?> fa-3"></i>
            <h2><?php echo get_theme_mod('box3_heading','Box 3 Heading'); ?></h2>
            <p><?php echo get_theme_mod('box3_text','Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'); ?></p>
          </div>
        </div>
      </div>
    </section>
    
      <?php if(is_active_sidebar('content-region-1')) : ?>
	<?php dynamic_sidebar('content-region-1'); ?>	
      <?php endif; ?>

      <?php if(is_active_sidebar('content-region-2')) : ?>
	<?php dynamic_sidebar('content-region-2'); ?>	
      <?php endif; ?>

        </div>
      </section>
     <?php get_footer(); ?>

