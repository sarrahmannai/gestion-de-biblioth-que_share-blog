function create_my_custom_post() {
register_post_type( 'my-custom-post',
array(
'labels' => array(
'name' => __( 'My Custom Post' ),
'singular_name' => __( 'My Custom Post' ),
),
'public' => true,
'has_archive' => true,
'supports' => array(
'title',