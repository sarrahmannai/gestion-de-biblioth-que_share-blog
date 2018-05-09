<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php get_header(); ?>
<div class="row">
 <div class="col-sm-8 blog-main">
 <?php get_template_part( 'content', get_post_format() ); ?>
 </div> <!-- /.blog-main -->
 <?php get_sidebar(); ?>
</div> <!-- /.row -->
<?php get_footer(); ?>


