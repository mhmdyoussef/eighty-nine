<?php get_header(); ?>

<?php
    $result = wp_remote_retrieve_body( wp_remote_get( 'https://reqres.in/api/users?page=2' ) );

    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>

<?php get_footer(); ?>