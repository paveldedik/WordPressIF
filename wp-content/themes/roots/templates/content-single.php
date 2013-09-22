<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <div id="post-socialbuttons">

        <!-- Google Plus Button-->
        <span class="google">
          <div class="g-plusone" data-size="medium"></div>
          <script type="text/javascript">
            window.___gcfg = {lang: 'cs'};
            (function() {
              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/plusone.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
          </script>
        </span>

        <!-- Twitter Button -->
        <span class="twitter">
          <a href="https://twitter.com/share" class="twitter-share-button"
             data-via="icefirecz" data-lang="cs">Tweet</a>
          <script>
            !function(d,s,id){
              var js,fjs=d.getElementsByTagName(s)[0];
              if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src="//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
              }}(document,"script","twitter-wjs");
          </script>
        </span>

        <!-- Facebook Like -->
        <span class="facebook">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-like" data-href="<?php echo get_permalink(); ?>"
               data-width="450" data-layout="button_count"
               data-show-faces="true" data-send="false"></div>
        </span>

      </div>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
