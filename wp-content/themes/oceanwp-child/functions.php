<?php
/**
* Child theme stylesheet einbinden in Abhängigkeit vom Original-Stylesheet
*/

function child_theme_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));

}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
/*
//Navbar based on role:
if (current_user_can('subscriber')){
    //menu for editor role
    wp_nav_menu( array('menu' => 'subscriber' ));

}elseif(current_user_can('contributor')||current_user_can('administrator')){
    //menu for author role
    wp_nav_menu( array('menu' => 'contributor' ));

}else{
    //default menu
    wp_nav_menu( array('menu' => 'default' ));
}
*/

//Shortcode for all User, which have an account.
function alluser(){

/*$users = get_users( array( 'fields' => array( 'ID' ) ) );
foreach($users as $user){
        print_r(get_user_meta ( $user->ID));
    };*/
$users = get_users();
echo '<ol>';
echo '<h2>Alle registrierten Unternehmen auf der Platform </h2>';
foreach($users as $user){
	//print_r($user);
	echo '<li><span>' . esc_html($user->user_email). '<br> Rolle: ' .esc_html($user->roles[0]). '</span></li>';
};
echo '</ol>'; 

};

add_shortcode('all-user', 'alluser');


?>