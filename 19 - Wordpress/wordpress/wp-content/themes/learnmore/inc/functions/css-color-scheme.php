<?php
/**
 * Generate the CSS gradient for header.
 *
 * @package LearnMore
 */
function learnmore_color_scheme_css() {
    $primary_color = learnmore_get_option( 'primary-color' );
    $color = $primary_color == '#232526' ? '#1e90ff' : $primary_color;

	$css = '
        .site-header,
        mark,
        ins {
            background:' . sanitize_hex_color( $color ) . ';
        }

        .knowledgebase-layout-1 .learnmore-articles-link:hover,
        .knowledgebase-layout-1 .learnmore-articles-link:focus,
        .knowledgebase-layout-1 .learnmore-category-link:hover,
        .knowledgebase-layout-1 .learnmore-category-link:focus,
        .entry-title a:hover,
        .site-breadcrumbs a:hover,
        .entry-content a:not(:hover),
        .primary-menu .sub-menu .menu-item a:hover,
        .sidebar-layout-default .blog-sidebar .widget ul li a:hover,
        .sidebar-layout-default .blog-sidebar .widget ul li a:focus {
            color:' . sanitize_hex_color( $color ) . '
        }

        .post-navigation a:hover .post-title,
        .post-navigation a:focus .post-title {
            border-bottom: 2px solid ' . sanitize_hex_color( $color ) . '
        }
        
        .form-submit input,
        .post-password-form input[type="submit"],
        .search-submit {
            border: 1px solid ' . sanitize_hex_color( $color ) . ';
            background: ' . sanitize_hex_color( $color ) . ';
        }

        blockquote {
            border-left: 8px solid ' . sanitize_hex_color( $color ) . ';
        }

        .calendar_wrap a {
            border-bottom: 2px solid ' . sanitize_hex_color( $color ) . ';
            color: ' . sanitize_hex_color( $color ) . ';
        }

        .widget a,
        .comment-metadata a  {
            border-color: ' . sanitize_hex_color( $color ) . ';
        }

        abbr[title],
        acronym {
            border-bottom: 2px dotted ' . sanitize_hex_color( $color ) . ';
        }

        .entry-content .wp-block-file a {
            color: #4a4a4a;
        }

        .entry-content .wp-block-file a.wp-block-file__button {
            color: white;
        }
    ';
    
	return apply_filters( 'learnmore_color_scheme_css', $css );
}
