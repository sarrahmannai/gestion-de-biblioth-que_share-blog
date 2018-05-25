<?php
function create_post_your_post(){
 register_post_type('post-grid',
 array(
 'labels'=>array(
 'name'=>__('Your Post'),
 ),
 'public'=>true,
 'hierarchical'=>true,
 'has_archive'=>true,
 'supports'=>array(
 'title',
'editor',
'excerpt',
'thumbnail',
 ),
 'taxonomies'=>array(
 'post_tag',
'category',
 )
 )
);
 register_taxonomy_for_object_type('category','post-grid');
 register_taxonomy_for_object_type('post_tag','post-grid');
}
add_action('init','create_post_your_post');
