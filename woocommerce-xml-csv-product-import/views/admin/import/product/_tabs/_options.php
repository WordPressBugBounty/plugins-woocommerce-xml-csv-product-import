<div class="panel woocommerce_options_panel" id="add_on_options" style="display:none;">
    <?php if (class_exists('PMWI_Plugin') && PMWI_EDITION == 'free'): ?>
    <div class="woo-add-on-free-edition-notice upgrade_template">
        <?php if(class_exists('PMXI_Plugin') && PMXI_EDITION == 'paid'):?>
        <a href="https://www.wpallimport.com/portal/discounts/?utm_source=import-plugin-pro&utm_medium=upgrade-notice&utm_campaign=import-woo" target="_blank" class="upgrade_woo_link"><?php _e('Upgrade to the Pro edition of the WooCommerce Add-On to Import to Variable, Affiliate, and Grouped Products', PMWI_Plugin::TEXT_DOMAIN);?></a>
        <?php else: ?>
        <a href="https://www.wpallimport.com/checkout/?edd_action=add_to_cart&download_id=5839961&edd_options%5Bprice_id%5D=1" target="_blank" class="upgrade_woo_link"><?php _e('Upgrade to the WooCommerce Import Package to Import to Variable, Affiliate, and Grouped Products', PMWI_Plugin::TEXT_DOMAIN);?></a>
        <?php endif; ?>
        <p><?php _e('If you already own it, remove the free edition and install the Pro edition.', 'wp_all_import_plugin'); ?></p>
    </div>
    <?php endif; ?>
    <p class="form-field"><?php _e('Import options',PMWI_Plugin::TEXT_DOMAIN);?></p>
    
    <div class="options_group">
        <p class="form-field wpallimport-radio-field">
            <input type="hidden" name="disable_auto_sku_generation" value="0" />
            <input type="checkbox" id="disable_auto_sku_generation" name="disable_auto_sku_generation" value="1" <?php echo $post['disable_auto_sku_generation'] ? 'checked="checked"' : '' ?> />
            <label for="disable_auto_sku_generation"><?php _e('Disable auto SKU generation', PMWI_Plugin::TEXT_DOMAIN) ?></label>
            <a href="#help" class="wpallimport-help" title="<?php _e('Plugin will NOT automaticaly generate the SKU for each product based on md5 algorithm, if SKU option is empty.', PMWI_Plugin::TEXT_DOMAIN) ?>" style="position:relative; top:-2px;">?</a>
        </p>
        <p class="form-field wpallimport-radio-field">
            <input type="hidden" name="disable_sku_matching" value="0" />
            <input type="checkbox" id="disable_sku_matching" name="disable_sku_matching" value="1" <?php echo $post['disable_sku_matching'] ? 'checked="checked"' : '' ?> />
            <label for="disable_sku_matching"><?php _e('Don\'t check for duplicate SKUs', PMWI_Plugin::TEXT_DOMAIN) ?></label>
            <a href="#help" class="wpallimport-help" title="<?php _e('Each product should have a unique SKU. If this box is checked, WP All Import won\'t check for duplicate SKUs, which speeds up the import process. Make sure the SKU for each of your products is unique. If this box is unchecked, WP All Import will import products with duplicate SKUs with a blank SKU.', PMWI_Plugin::TEXT_DOMAIN) ?>" style="position:relative; top:-2px;">?</a>
        </p>

    </div>
</div>
