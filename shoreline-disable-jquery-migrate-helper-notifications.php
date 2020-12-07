<?php 
/**
 * Plugin Name: Disable "Enable jQuery Migrate Helper" plugin email notifications
 * Author: Shoreline Media
 * Plugin URI: https://shoreline.media
 * Description: The "Enable jQuery Migrate Helper" plugin enables support for older and outdated plugins during Wordpress' update of jQuery, but it also emails the <code>admin_email</code> for the site every week. This plugin disables email notifications entirely, even for automatic downgrades.
 * GitHub Plugin URI: https://github.com/shorelinemedia/shoreline-disable-jquery-migrate-helper-notifications
 * Version: 1.0.1
 */

if ( !function_exists( 'sl9_jqmh_email_message_disable' ) ) {
  function sl9_jqmh_email_message_disable( $message, $template ) {
    // Disable the message by passing empty value to $message
    return false;
  }
  add_filter( 'jqmh_email_message', 'sl9_jqmh_email_message_disable', 200, 2 );
}
