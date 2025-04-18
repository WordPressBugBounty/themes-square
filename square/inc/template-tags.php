<?php

/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Square
 */
if (!function_exists('square_posted_on')) {

    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function square_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf($time_string, esc_attr(get_the_date('c')), esc_html(get_the_date()), esc_attr(get_the_modified_date('c')), esc_html(get_the_modified_date())
        );

        $posted_on = '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>';

        $byline = sprintf(
            /* translators: author */
            esc_html_x('by %s', 'post author', 'square'), '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        $comment_count = get_comments_number(); // get_comments_number returns only a numeric value

        if (comments_open()) {
            if ($comment_count == 0) {
                $comments = esc_html__('No Comments', 'square');
            } elseif ($comment_count > 1) {
                $comments = $comment_count . esc_html__(' Comments', 'square');
            } else {
                $comments = esc_html__('1 Comment', 'square');
            }
            $comment_link = '<a href="' . get_comments_link() . '">' . $comments . '</a>'; // WPCS: XSS OK.
        } else {
            $comment_link = esc_html__(' Comment Closed', 'square');
        }

        echo '<span class="posted-on"><i class="fa-regular fa-clock"></i>' . $posted_on . '</span><span class="byline"> ' . $byline . '</span><span class="comment-count"><i class="fa-regular fa-comments"></i>' . $comment_link . "</span>"; // WPCS: XSS OK.
    }

}

if (!function_exists('square_entry_footer')) {

    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function square_entry_footer() {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(', ');
            if ($categories_list) {
                echo '<span class="cat-links"><i class="fa-solid fa-folder"></i>' . $categories_list . '</span>'; // WPCS: XSS OK.
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', ', ');
            if ($tags_list) {
                echo '<span class="tags-links"><i class="fa-solid fa-tag"></i>' . $tags_list . '</span>'; // WPCS: XSS OK.
            }
        }
    }

}

if (!function_exists('square_social_share')) {

    /**
     * Prints HTML with social share
     */
    function square_social_share() {
        global $post;
        $post_url = get_permalink();

        // Get current page title
        $post_title = str_replace(' ', '%20', get_the_title());

        // Get Post Thumbnail for pinterest
        if (has_post_thumbnail($post->ID)) {
            $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            $thumb = $post_thumbnail[0];
        } else {
            $thumb = '';
        }

        // Construct sharing URL
        $twitterURL = 'https://twitter.com/intent/tweet?text=' . $post_title . '&amp;url=' . $post_url;
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;
        $googleURL = 'https://plus.google.com/share?url=' . $post_url;
        $pinterestURL = 'https://pinterest.com/pin/create/button/?url=' . $post_url . '&amp;media=' . $thumb . '&amp;description=' . $post_title;
        $mailURL = 'mailto:?Subject=' . $post_title . '&amp;Body=' . $post_url;

        $content = '<div class="square-share-buttons">';
        $content .= '<a target="_blank" href="' . $facebookURL . '" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>';
        $content .= '<a target="_blank" href="' . $twitterURL . '" target="_blank"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>';
        $content .= '<a target="_blank" href="' . $pinterestURL . '" target="_blank"><i class="fa-brands fa-pinterest-p" aria-hidden="true"></i></a>';
        $content .= '<a target="_blank" href="' . $mailURL . '"><i class="fa-regular fa-envelope" aria-hidden="true"></i></a>';
        $content .= '</div>';

        echo $content;  // WPCS: XSS OK.
    }

}