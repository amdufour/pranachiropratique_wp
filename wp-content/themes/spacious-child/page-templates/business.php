<?php
/**
 * Template Name: Business Template
 *
 * Displays the Business Template of the child theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
get_header(); ?>

<div id="content" class="clearfix">

  <div class="banner">
    <div class="container banner-tagline">
      <div class="row">
        <div class="col-7 tagline-wrapper">
          <?php if ( is_active_sidebar( 'prana-homepage-tagline' )) {
            dynamic_sidebar( 'prana-homepage-tagline' );
          } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="homepage-section homepage-services">
    <div class="container">
      <h2 class="section-title">Nos services</h2>
      <?php if( is_active_sidebar( 'spacious_business_page_top_section_sidebar' ) ) {
        // Calling the business page top section sidebar if it exists.
        if ( !dynamic_sidebar( 'spacious_business_page_top_section_sidebar' ) ):
        endif;
      } ?>
    </div>
  </div>

  <div class="homepage-section homepage-pillars">
    <div class="container">
      <h2 class="section-title">Les 4 piliers de votre santé</h2>
      <?php if( is_active_sidebar( 'spacious_business_page_top_second_section_sidebar' ) ) {
      	// Calling the business page top section sidebar if it exists.
      	if ( !dynamic_sidebar( 'spacious_business_page_top_second_section_sidebar' ) ):
      	endif;
      } ?>
    </div>
  </div>

  <div class="homepage-section homepage-team">
    <div class="container">
      <h2 class="section-title">Notre équipe</h2>
      <?php if( is_active_sidebar( 'spacious_business_page_middle_section_full_width' ) ) {
      	// Calling the business page top section sidebar if it exists.
      	if ( !dynamic_sidebar( 'spacious_business_page_middle_section_full_width' ) ):
      	endif;
      } ?>
    </div>
  </div>

  <div class="container">
    <?php
    if( is_active_sidebar( 'spacious_business_page_middle_section_left_half_sidebar' ) || is_active_sidebar( 'spacious_business_page_middle_section_right_half_sidebar' )) {
    ?>
    <!-- <div class="clearfix"> -->
    	<div class="tg-one-half">
    		<?php
    		// Calling the business page middle section left half sidebar if it exists.
    		if ( !dynamic_sidebar( 'spacious_business_page_middle_section_left_half_sidebar' ) ):
    		endif;
    		?>
    	</div>
    	<div class="tg-one-half tg-one-half-last">
    		<?php
    		// Calling the business page middle section right half sidebar if it exists.
    		if ( !dynamic_sidebar( 'spacious_business_page_middle_section_right_half_sidebar' ) ):
    		endif;
    		?>
    	</div>
    <div class="clearfix"></div>
    <?php
    }

    if( is_active_sidebar( 'spacious_business_page_bottom_section_sidebar' ) ) {
    	// Calling the business page bottom section sidebar if it exists.
    	if ( !dynamic_sidebar( 'spacious_business_page_bottom_section_sidebar' ) ):
    	endif;
    }
    ?>
  </div>

</div>

<?php get_footer(); ?>
