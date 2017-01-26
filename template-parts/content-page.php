<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
	<header>
        <h1><?php the_title();?></h1>
    </header>
	<?php if(get_the_content()):?>
        <div class="copy">
			<?php the_content();?>
        </div>
	<?php endif;?>
</article><!-- #post-## -->
