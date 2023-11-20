<?php

function career_form_error_message( $error, $key, $rule ) {
  switch ( $key ) {

    default:
      $error = 'この項目を入力してください';
      break;
  }

  return $error;
}

add_filter( 'mwform_error_message_mw-wp-form-278', 'career_form_error_message', 10, 3 );

function contact_form_error_message( $error, $key, $rule ) {
  switch ( $key ) {

    default:
      $error = 'この項目を入力してください';
      break;
  }

  return $error;
}

add_filter( 'mwform_error_message_mw-wp-form-153', 'contact_form_error_message', 10, 3 );