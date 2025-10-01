<?php
// Main reading time calculation function
function calculate_reading_time($custom_words_per_minute = 200) {
    $post_content = get_post_field('post_content', get_the_ID());
    
    if (empty($post_content)) {
        return 'Less than a minute';
    }
    
    $clean_content = strip_tags($post_content);
    $word_count = str_word_count($clean_content);
    
    $reading_time_minutes = max(1, ceil($word_count / $custom_words_per_minute));
    
    // Format with proper pluralization
    if ($reading_time_minutes === 1) {
        return '1 minute';
    } else {
        return $reading_time_minutes . ' minutes';
    }
}

// Shortcode function
function reading_time_shortcode($atts) {
    // Parse shortcode attributes
    $attributes = shortcode_atts(array(
        'speed' => 200,  // words per minute
        'prefix' => 'Reading time: ',
        'suffix' => ''
    ), $atts);
    
    // Set custom reading speed if provided
    $reading_time = calculate_reading_time($attributes['speed']);
    
    // Return formatted output
    return $attributes['prefix'] . $reading_time . $attributes['suffix'];
}

// Register the shortcode
add_shortcode('reading_time', 'reading_time_shortcode');
?>