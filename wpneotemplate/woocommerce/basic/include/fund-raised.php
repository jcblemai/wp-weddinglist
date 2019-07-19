<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$wpneo_campaign_end_method = get_post_meta(get_the_ID(), 'wpneo_campaign_end_method', true);
?>

<div class="campaign-funding-info">
    <ul>
        <li><p class="funding-amount"><?php echo wpneo_crowdfunding_price(wpneo_crowdfunding_get_total_goal_by_campaign(get_the_ID())); ?></p>
            <span class="info-text"><?php _e('Funding Goal', 'wp-crowdfunding') ?></span>
        </li>
        <li>
            <p class="funding-amount"><?php echo wpneo_crowdfunding_price(wpneo_crowdfunding_get_total_fund_raised_by_campaign()); ?></p>
            <span class="info-text"><?php _e('Déjà donné', 'wp-crowdfunding') ?></span>
        </li>
        <?php if ($wpneo_campaign_end_method != 'never_end'){
            ?>
            <li>
                
            </li>
        <?php } ?>


    </ul>
</div>