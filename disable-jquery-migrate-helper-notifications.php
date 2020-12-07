<?php 
/**
 * Plugin Name: Disable jQuery Migrate helper email notifications
 * Plugin Author: Shoreline Media
 * Plugin Homepage: https://shoreline.media
 */

if ( !function_exists( 'sl9_jqmh_email_message_disable' ) ) {
  function sl9_jqmh_email_message_disable( $message, $template ) {
    // Disable the message by passing empty value to $message
    return false;
  }
  add_filter( 'jqmh_email_message', 'sl9_jqmh_email_message_disable', 200, 2 );
}
