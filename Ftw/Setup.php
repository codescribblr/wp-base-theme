<?php namespace Ftw;

class Setup {

    public function __construct() {
        add_filter('init', [$this, 'cleanup'], 10, 2);
        add_filter('wp_title', [$this, 'title'], 10, 2);
        add_action('admin_head', [$this, 'adminSeperators']);
    }

    public function cleanup() {
        // Remove WP version
        remove_action('wp_head', 'wp_generator');

        // Remove the p from around imgs
        // (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
        add_filter('the_content', [$this, 'filterPtagsOnImages']);
    }

    public function title($title, $sep) {
        global $paged, $page;

        if (is_feed()) return $title;

        // Add the site name.
        $title .= get_bloginfo('name');

        return $title;
    }

    public function filterPtagsOnImages($content){
       return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    }

    public function adminSeperators() {
        echo '<style type="text/css">
        #adminmenu li.wp-menu-separator {margin: 0;}
        .admin-color-fresh #adminmenu li.wp-menu-separator {background: #444;}
        .admin-color-midnight #adminmenu li.wp-menu-separator {background: #4a5258;}
        .admin-color-light #adminmenu li.wp-menu-separator {background: #c2c2c2;}
        .admin-color-blue #adminmenu li.wp-menu-separator {background: #3c85a0;}
        .admin-color-coffee #adminmenu li.wp-menu-separator {background: #83766d;}
        .admin-color-ectoplasm #adminmenu li.wp-menu-separator {background: #715d8d;}
        .admin-color-ocean #adminmenu li.wp-menu-separator {background: #8ca8af;}
        .admin-color-sunrise #adminmenu li.wp-menu-separator {background: #a43d39;}
        </style>';
    }

}
