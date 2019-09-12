/*Add-Logo-To-Login*/
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'NetForks.com';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
function my_login_logo() { ?>
    <style type="text/css">
        body.login {
			background-color: #ffffff;
			color: #53565a;
		}
        body.login div#login {
			padding-top: 4%;
		}
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/NetforksLogo2019sm.png);
			background-size: 100%;
            width: 100%;
			height: 30px;
			padding: 0 0 15.873015873015873015873015873016%;
			outline: 0 none;
        }
    </style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
