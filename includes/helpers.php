<?php
/**
 * Get first post's term by id
 */
function get_first_term_by_id( $post_id, $taxonomy, $output = 'term_id' ) {
   if ( isset( $post_id ) && isset( $taxonomy ) ) {
      $terms = get_the_terms( $post_id, $taxonomy );
      if ( ! empty( $terms ) ){
         $term = array_shift( $terms );
         return $term->$output;
      }
   }
   return false;
}

/**
 * Get nav menu items by location
 *
 * @param $location The menu location id
 */
function get_nav_menu_items_by_location( $location, $args = [] ) {

   // Get all locations
   $locations = get_nav_menu_locations();
   // Get object id by location
   if ( empty( $locations[$location] ) )
      return;

   if ( $object = wp_get_nav_menu_object( $locations[$location] ) ) {
      // Get menu items by menu name
      $menu_items = wp_get_nav_menu_items( $object->name, $args );
      // Return menu post objects
      return $menu_items;
   }
   return false;
}
