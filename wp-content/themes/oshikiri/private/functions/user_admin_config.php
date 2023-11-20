<?php


// remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

// if ( ! function_exists( 'cor_remove_personal_options' ) ) {

//   function cor_remove_personal_options( $subject ) {
//     $subject = preg_replace( '#<h3>Personal Options</h3>.+?/table>#s', '', $subject, 1 );
//     return $subject;
//   }

//   function cor_profile_subject_start() {
//     ob_start( 'cor_remove_personal_options' );
//   }

//   function cor_profile_subject_end() {
//     ob_end_flush();
//   }
// }
// add_action( 'admin_head-profile.php', 'cor_profile_subject_start' );
// add_action( 'admin_footer-profile.php', 'cor_profile_subject_end' );