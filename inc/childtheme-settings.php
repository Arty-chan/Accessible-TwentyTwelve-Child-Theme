<?php
/**
 * Theme Footer Settings
 *
 * @package Twenty_Twelve
 * @subpackage Twenty_Twelve_Child
 * @since Twenty Twelve Child 1.0
 */

// add the admin options page
add_action('admin_menu', 'plugin_admin_add_page');
function plugin_admin_add_page() {
    add_theme_page('Footer Options', 'Footer', 'manage_options', 'custom-footer', 'childoptions_page');
}

/* Generate options page */
function childoptions_page() {
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
?>
<div class="wrap">
    <?php screen_icon(); ?><h2>Footer Options</h2>
    <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
    <div class="updated">
        <p><strong><?php _e('Options saved'); ?></strong></p>
    </div>
    <?php endif; ?>
    <p>You can customize the footer using the options on this page.</p>
    <form method="post" action="options.php">
        <?php settings_fields('childoptions'); ?>
        <?php do_settings_sections('custom-footer'); ?>
        <br>
        <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
    </form>
</div>
<?php
}

// add the admin settings and such
add_action('admin_init', 'plugin_admin_init');
function plugin_admin_init(){
    register_setting( 'childoptions', 'childoptions', 'childoptions_validate' );
    add_settings_section('footer_sect', 'Footer Text', 'footer_section_text', 'custom-footer');
    add_settings_field('footerinfo_text', 'Add or change the text in the footer of the website.', 'footerinfo_setting_string', 'custom-footer', 'footer_sect');
}

// display Footer Links option
function footerinfo_setting_string() {
    $options = get_option('childoptions');
    echo "<textarea id='footerinfo_text' name='childoptions[footerinfo]' rows='3' cols='70'>" . esc_textarea($options['footerinfo']) . "</textarea>";
}

// validate our input options
function childoptions_validate($input) {
    $input['footerinfo'] = wp_kses_stripslashes(wp_filter_kses($input['footerinfo'])); //strips non-allowed HTML and \ from \" inserted by the filter or user
    return $input;
}

?>