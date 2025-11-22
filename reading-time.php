<?php
/**
 * WordPress Reading Time Calculator
 * Calculates estimated reading time of posts and appends it to content.
 */

if ( ! function_exists('calculate_reading_time') ) :

function calculate_reading_time($content, $words_per_minute = 100) {
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / $words_per_minute);
    return $reading_time;
}

function display_reading_time() {
    global $post;

    $content = $post->post_content;
    $reading_time = calculate_reading_time($content);

    return esc_html($reading_time . ' Min. Read');
}

// Append reading time to post content
add_action('wp', function() {
    if (is_single()) {
        add_filter('the_content', function($content) {
            $reading_time_html = '<div class="news-subheading-readingtime">' . display_reading_time() . '</div>';
            return $content . $reading_time_html;
        });
    }
});

endif;
