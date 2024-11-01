<?php
/*
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * @var YITH_Vendor $vendor
 */
?>
<div class="wrap yith-vendor-admin-wrap" id="vendor_details">
    <div class="icon32" id="icon-options-general"><br /></div>
    <h2><?php esc_html_e( 'Vendor Details', 'yith_wc_product_vendors' ) ?></h2>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="action" value="yith_admin_save_fields" />
        <input type="hidden" name="update_vendor_id" value="<?php echo esc_attr( $vendor->id ); ?>" />
        <?php echo wp_nonce_field( 'yith_vendor_admin_update', 'yith_vendor_admin_update_nonce', true, false ) ?>

        <div class="form-field">
            <label for="vendor_name"><?php esc_html_e( 'Name:', 'yith_wc_product_vendors' ) ?></label>
            <input id="vendor_name" type="text" name="vendor_name" value="<?php echo esc_attr( $vendor->name ); ?>" class="regular-text" style="width:auto;" />
        </div>

        <div class="form-field">
            <label for="vendor_slug"><?php esc_html_e( 'Slug:', 'yith_wc_product_vendors' ) ?></label>
            <input id="vendor_slug" type="text" name="vendor_slug" value="<?php echo esc_attr( $vendor->slug ); ?>" class="regular-text" style="width:auto;" />
        </div>

        <div class="form-field">
            <label for="vendor_paypal_address"><?php esc_html_e( 'PayPal email address:', 'yith_wc_product_vendors' ) ?></label>
            <input id="vendor_paypal_address" type="text" name="vendor_paypal_address" value="<?php echo esc_attr( $vendor->paypal_email ); ?>" class="regular-text" style="width:auto;" />
        </div>

        <div class="form-field">
            <label for="vendor_description"><?php  esc_html_e( 'Description:', 'yith_wc_product_vendors' ) ?></label>
            <textarea id="vendor_description" name="vendor_description" rows="10" cols="50" class="large-text"><?php echo esc_attr( $vendor->description ); ?></textarea>
        </div>

        <div class="form-field">
            <span class="vendor-extra-info">
                <?php esc_html_e( 'Commission Rate: ', 'yith_wc_product_vendors' ); ?>
            </span>
            <?php echo esc_html( $vendor->get_commission() * 100 ); ?>%
        </div>

        <div class="form-field">
            <span class="vendor-extra-info">
                <?php esc_html_e( "Vendor's selling status: ", 'yith_wc_product_vendors' ); ?>
            </span>
            <?php 'yes' == $vendor->enable_selling ? esc_html_e( 'Enabled', 'yith_wc_product_vendors' ) : esc_html_e( 'Disabled', 'yith_wc_product_vendors' ) ?>
        </div>

        <?php do_action( 'yith_product_vendors_details_fields', $vendor->id ); ?>

        <div class="submit">
            <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e( 'Save Vendor Information', 'yith_wc_product_vendors' ); ?>" />
        </div>
    </form>
</div>
