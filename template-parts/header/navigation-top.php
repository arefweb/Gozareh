<?php
/**
 * Displays top navigation
 */
?>

  <article id="top-header" class="container-fluid">
    <section class="top-social">
      <?php if ( is_active_sidebar( 'header-1' ) ) : ?>
        <ul id="top-header-text">
          <?php dynamic_sidebar( 'header-1' ); ?>
        </ul>
      <?php endif; ?>
    </section>
    <section class="top-empty"></section>
    <section class="top-text">
      <?php if ( is_active_sidebar( 'header-2' ) ) : ?>
        <ul id="top-header-text">
          <?php dynamic_sidebar( 'header-2' ); ?>
        </ul>
      <?php endif; ?>
    </section>
  </article>

  <article class="header-nav">

      <div class="container">
        <div class="row justify-content-center">

          <section class="navigation">
            <?php
            if ( has_nav_menu( 'top' ) ) :
            wp_nav_menu(
              array(
                'theme_location' => 'top',
              )
            );
            ?>

            <div id="menu-icon">
              <a id="mobile-icon" href="javascript:void(0)" onclick="openMenu()" >
                <i class="fas fa-bars"></i>
              </a>
            </div>

            <div id="search-icon">
              <a href="javascript:void(0)" onclick="openSearch(this)" ><i class="fas fa-search"></i></a>

              <div id="search-box">
                <?php get_search_form(); ?>
                <div id="close-search"><a href="javascript:void(0)" onclick="closeSearch()" >&times;</a></div>
              </div>
            </div>
          </section>

          <section class="empty"></section>

          <section class="logo">
            <div id="logo">
              <?php the_custom_logo(); ?>
            </div>
          </section>

        </div>
      </div>

    <?php endif; ?>
  </article>
