<?php
/**
 * Template Name: Menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pibar
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container p-0 bg-light">


		<?php
            $taxonomy = 'menu_categories';
            $args = array('hide_empty' => false);
            $terms = get_terms($taxonomy, $args);

            foreach($terms as $term){
                echo '<h2>'.$term->name.'</h2>';
            }
		?>
        </div>
	</main><!-- #main -->

<?php
get_footer();
