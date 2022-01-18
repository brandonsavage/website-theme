<?php

// disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// Register nav menus

register_nav_menus( array(
	'primary' => 'Primary Navigation',
	'bottom' => 'Footer Navigation',
) );

// Activate post thumbnails 
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
}

function avatar()
{
    ob_start();
    comment_author_email();
    $email = ob_get_clean();

    //$md5email = md5(strtolower($email));

    //return 'http://www.gravatar.com/avatar/' . $md5email . '?s=50';

    return get_avatar($email, 100);
}

function create_excerpt($content, $postUrl = null, $maxLength = 1000, $readMoreText = '(Read More)')
{
  $length = strlen($content);
  if($length < $maxLength) {
    if($postUrl) {
      $content .= ' <a href="' . $postUrl . '">' . $readMoreText . '</a>';
    }
    return $content;
  }

  $string = substr($content, 0, strpos($content, ' ', $maxLength));
  if(empty($string)) {
    $string = $content;
  } else {
    $string .= '...';
  }
  if($postUrl) {
    $string .= ' <a href="' . $postUrl . '">' . $readMoreText . '</a>';
  }

  return $string;
}
