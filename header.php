<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @since 1.0.0
 *
 * @package Bald_Parent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
  <meta name="robots" content="noindex, nofollow" />
  <?php wp_head(); ?>
  <style type="text/css">* { box-sizing: border-box; width: 100%; margin: 0; padding: 0; text-shadow: 0 1px 0 rgba(255, 255, 255, 1); }html, body { background-color: #eeeeee; height: 100%; padding: 5px; position: relative; color: #343434; font-size: 16px; font-weight: 400; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif; line-height: 26px; text-align: center; }header, footer { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); }footer { top: auto; bottom: 10px; transform: translate(-50%, 0); }a { color: #343434; text-decoration: underline; }a:hover, a:focus { text-decoration: none; }</style>
</head>
<body <?php body_class( 'bald' ); ?>>
  <header>
    <h1 class="site-title" style="margin: 0 0 20px;"><?php echo get_bloginfo( 'name' ); ?></h1>
    <p class="tagline" style="font-style: italic;"><?php echo get_bloginfo( 'description' ); ?></p>
  </header>