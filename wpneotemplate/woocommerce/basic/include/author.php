<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
global $post;
$user_info = get_user_meta($post->post_author);
$creator = get_user_by('id', $post->post_author);
?>
