<?php

function myFiles()
{
    wp_enqueue_style(
        'aj-style',
        get_stylesheet_uri(),
        array(),
        time()
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/main.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'myFiles');

function create_tech_taxonomy()
{
    $labels = array(
        'plurals' => 'testings',
        'singular' => 'testing'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'testing'
        )
    );

    register_taxonomy('testing', array('post'), $args);
}

// add_action('init','create_tech_taxonomy');

function create_taxonomy()
{
    $args = array(

        'labels' => array(
            'name'          => 'Technologies',
            'singular_name' => 'Technology',
        ),


        'public'             => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,

        'hierarchical' => false,
        'sort'         => false,

        'description' => 'Technology used in the project.',

        'query_var' => 'technology',

        'rewrite' => array(
            'slug'         => 'technology',
            'with_front'   => true,
            'hierarchical' => false,
            'ep_mask'      => EP_NONE,
        ),

        'capabilities' => array(
            'manage_terms' => 'manage_categories',
            'edit_terms'   => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'edit_posts',
        ),


        'rest_base'           => 'technology',
        'rest_controller_class' => 'WP_REST_Terms_Controller',

        'meta_box_cb' => null,

        'meta_box_sanitize_cb' => null,
    );
    register_taxonomy('testing', array('post'), $args);
}

add_action('init', 'create_taxonomy');

function test_taxonomy()
{
    $args = array(
        "labels" => array(
            "singular" => "testTaxonomy",
            "name"     => "TestTaxonomy",
            "plural"   => "testTaxonomies"
        ),
        "rewrite" => array(
            "slug" => 'testTax',

        ),
        "capabilities" => array(
            'edit_post' => 'edit',
        ),
        "rest_api" => true,
        'public'             => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
    );
    register_taxonomy('testTaxonomy', array('post'), $args);
}

add_action('init', 'test_taxonomy');

// function themename_widgets_init()
// {

//     register_sidebar(array(
//         'name'          => __('My Primary Sidebar', 'theme_name'),
//         'id'            => 'myprimary',
//         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</aside>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ));

//     register_sidebar(array(
//         'name'          => __('My Secondary Sidebar', 'theme_name'),
//         'id'            => 'mysecondary',
//         'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</li></ul>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ));
// }

// add_action('widgets_init', 'themename_widgets_init');

// function aj_multi_sidebars()
// {
//     register_sidebars(
//         2,
//         array(
//             'name' => 'Footer Column %d',
//             'before_widget' => 'div id="%1$s" class="footer-widget %2$s">',
//             'after_widget' => '</div>',
//             'before_title' => '<h3 class="footer-widget-title">',
//             'after_title' => '</h3>'
//         )
//     );
// }

// add_action('widgets_init', 'aj_multi_sidebars');

// creating your menus

function register_menu()
{
    register_nav_menus(
        array(
            "primary-menu" => __('Top Menu'),
            'footer-menu' => __('Footer Menu'),
            'another-menu' => __('Another Menu'),
        )
    );
}

add_action('init', 'register_menu');


function register_menu1()
{
    register_nav_menus(
        array(
            "primary-menu1" => __('demo_menu'),
            "footer-menu" => __('fdemo_menu')
        )
    );
}

add_action('init','register_menu1');

// function aj_posts_per_page( $query ) {

//     if ( ! is_admin() && $query->is_main_query() ) {

//         if ( is_home() ) {
//             $query->set( 'posts_per_page', 4 );
//         }

//     }
// }

// add_action( 'pre_get_posts', 'aj_posts_per_page' );

// function callme() {

//     $args = array(
//         'posts_per_page' => 1,
//         'post_parent'    => get_the_ID(),
//         'post_type'      => 'attachment',
//         'post_mime_type' => 'image',
//     );

//     $attachments = get_posts( $args );
//     $attachments = get_children( $args );
//     if ( $attachments ) {

//         foreach ( $attachments as $attachment ) {

//             echo '<p>';
//             echo 'Attachment ID: ' . $attachment->ID;
//             echo '</p>';

//             echo wp_get_attachment_image(
//                 $attachment->ID,
//                 'medium'
//             );
//         }

//         // echo '<pre>';
//         // print_r( $attachments );
//         // echo '</pre>';

//     } else {

//         echo 'No attachments found.';
//     }
// }

// function callme() {

//     //echo '<p>Current Post ID: ' . get_the_ID() . '</p>';

//     $args = array(
//         //'numberposts' => 1,
//         'post_parent'    => get_the_ID(),
//         'post_type'      => 'attachment',
//         'post_mime_type' => 'image',
//         //'category' => 'it-field'
//         // 'posts_per_page' => -1,
//     );

//     $posts = get_posts( $args );
//     $attachments = get_children( $args );
//     $metaData = wp_get_attachment_metadata( 423,true );
//     $imgs = wp_get_attachment_image(423, 'thumbnail');

//     echo wp_get_attachment_image_url( 423, 'thumbnail' );

//     echo '<pre>';
//     for($i = 0; $i < sizeof($posts); $i++){
//         $img = wp_get_attachment_url( $posts[$i]->ID );
//         echo '<img src="' . esc_url( $img ) . '" alt="">';
//     }
//     // print_r( $attachments );
//     // $img = $posts[1]->guid;
//     // echo "<img src='$img' >";
//     print_r( $metaData );
//     echo '</pre>';
// }

// add_shortcode( 'mediaw', 'callme' );
// add_shortcode( 'mediaw', 'callme' );

function imagedemo()
{
    $args = array(
        "postperpage" => 5,
        "post_type" => "attachment",
        'post_mime_type' => 'image',
        "post_parent" => get_the_ID()
    );

    $data = get_posts($args);
    $data1 = get_children($args);

    // echo wp_get_attachment_image(423, 'thumbnail');
    // echo wp_get_attachment_url(423);
    // echo wp_get_attachment_link(423);
    // echo wp_get_attachment_metadata(423);

    echo "<pre>";
    print_r($data1);
}

add_shortcode('mediaw', 'imagedemo');

function nonce_demo()
{
    $nonce = wp_create_nonce('delete-message');
    $url = "http://example.com/wp-admin/post.php?post=123&action=trash&_wpnonce=$nonce";

    $url1 = admin_url('admin.php?page=aj-demo');
    $nonce_url = wp_nonce_url($url1, 'delete-message');

    if (wp_verify_nonce($nonce, "delete-message")) {
        echo "<br>";
        echo $nonce_url;
        // echo $url;
        echo "<p>Nonce is been verified</p>";
    } else {
        echo "<p>errro</p>";
    }
}

add_shortcode('nonce', 'nonce_demo');

function formdemo()
{
    ob_start();
?>
    <form method="post">
        <?php
        wp_nonce_field("aj_demo_field");
        ?>
        <input type="text"
            name="message">

        <button type="submit">
            save
        </button>
        <?php ?>
    </form>
<?php

    return ob_clean();
}

add_shortcode('nonceform', 'formdemo');



// function my_customise_settings($wp_customize)
// {
//     // ==========================================
//     // SECTION
//     // ==========================================

//     $wp_customize->add_section('my_footer_section', array(
//         'title' => 'Footer Settings',
//         'priority' => 30,
//     ));


//     // ==========================================
//     // PHONE
//     // ==========================================

//     $wp_customize->add_setting('myplugin_options[phone]', array(
//         'type' => 'option',
//         'capability' => 'manage_options',
//         'default' => '+91 98765 43210',
//         'sanitize_callback' => 'sanitize_text_field',
//     ));

//     $wp_customize->add_control('myplugin_options[phone]', array(
//         'label' => 'Phone Number',
//         'type' => 'tel',
//         'section' => 'my_footer_section',
//     ));


//     // ==========================================
//     // EMAIL
//     // ==========================================

//     $wp_customize->add_setting('myplugin_options[email]', array(
//         'type' => 'option',
//         'capability' => 'manage_options',
//         'default' => 'info@example.com',
//         'sanitize_callback' => 'sanitize_email',
//     ));

//     $wp_customize->add_control('myplugin_options[email]', array(
//         'label' => 'Email Address',
//         'type' => 'email',
//         'section' => 'my_footer_section',
//     ));


//     // ==========================================
//     // COPYRIGHT
//     // ==========================================

//     $wp_customize->add_setting('myplugin_options[copyright]', array(
//         'type' => 'option',
//         'capability' => 'manage_options',
//         'default' => '© 2026 My Company',
//         'sanitize_callback' => 'sanitize_text_field',
//     ));

//     $wp_customize->add_control('myplugin_options[copyright]', array(
//         'label' => 'Copyright Text',
//         'type' => 'text',
//         'section' => 'my_footer_section',
//     ));


//     // ==========================================
//     // FOOTER COLOR
//     // ==========================================

//     $wp_customize->add_setting('myplugin_options[color]', array(
//         'type' => 'option',
//         'capability' => 'manage_options',
//         'default' => '#ffffff',
//         'sanitize_callback' => 'sanitize_hex_color',
//     ));

//     $wp_customize->add_control('myplugin_options[color]', array(
//         'label' => 'Footer Text Color',
//         'type' => 'color',
//         'section' => 'my_footer_section',
//     ));
// }

// add_action('customize_register', 'my_customise_settings');

function my_customizer_settings($wp_customize)
{
    // SECTION
    $wp_customize->add_section('my_heading_section', array(
        'title'    => 'Site Title Settings',
        'priority' => 30,
    ));

    // SETTING
    $wp_customize->add_setting('my_custom_heading', array(
        'default'           => 'Welcome to My Website',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // CONTROL
    $wp_customize->add_control('my_custom_heading', array(
        'label'   => 'Custom Heading',
        'type'    => 'text',
        'section' => 'my_heading_section',
    ));
}

add_action('customize_register', 'my_customizer_settings');


add_action('customize_register', 'my_customize_register');

function my_customize_register($wp_customize)
{
    // SECTION
    $wp_customize->add_section(
        'my_theme_section',
        array(
            'title'    => 'Test Theme Options',
            'priority' => 20
        )
    );

    // SETTING
    $wp_customize->add_setting(
        'my_background_color',
        array(
            'default'           => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    // CONTROL
    $wp_customize->add_control(
        'my_background_color',
        array(
            'label'   => 'Background Color',
            'section' => 'my_theme_section',
            'type'    => 'color'
        )
    );
}

function my_custom_background_css()
{
    $background_color = get_theme_mod(
        'my_background_color',
        '#ffffff'
    );
    ?>

    <style>
        body {
            background-color: <?php echo esc_attr($background_color); ?>;
        }
    </style>

    <?php
}

add_action('wp_head', 'my_custom_background_css');

function test_footer($wp_customize)
{
    $wp_customize -> add_section(
        'test_section',
        array(
            'title' => 'Test Section',
            'priority' => 10
        )
    );

    $wp_customize -> add_setting(
            'test_setting_fn',
            array(
                'default' => '© 2026 My Website',
                'sanitize_callback' => 'sanitize_text_field'
            )
    );

    $wp_customize -> add_control(
        'test_setting_fn',
        array(
            'type' => 'text',
            'section' => 'test_section',
            'label' => "Add your footer here",
        )
    );
}

add_action('customize_register','test_footer');