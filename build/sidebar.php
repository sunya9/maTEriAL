      <aside id="page__search">
        <h2 class="nocontent">Search</h2>
        <?php get_search_form(); ?>
      </aside>

      <aside id="page__sidebar" role="complementary">
        <h2 class="nocontent">Other contents</h2>
        <div id="sidebar__inner">
        <?php
	        if ( is_active_sidebar( 'sidebar1' ) ) :
				dynamic_sidebar( 'sidebar1' );
			endif;
		?>
        </div>
      </aside>
