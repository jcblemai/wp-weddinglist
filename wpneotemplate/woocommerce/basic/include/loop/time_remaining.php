<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$days_remaining = apply_filters('date_expired_msg', __('0', 'wp-crowdfunding'));
if (WPNEOCF()->dateRemaining()){
    $days_remaining = apply_filters('date_remaining_msg', __(WPNEOCF()->dateRemaining(), 'wp-crowdfunding'));
}

$wpneo_campaign_end_method = get_post_meta(get_the_ID(), 'wpneo_campaign_end_method', true);
