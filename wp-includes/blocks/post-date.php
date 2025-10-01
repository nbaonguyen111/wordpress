<?php
/**
 * Server-side rendering of the `core/post-date` block.
 *
 * @package WordPress
 */

/**
 * Renders the `core/post-date` block on the server.
 *
 * @since 5.8.0
 *
 * @param array    $attributes Block attributes.
 * @param string   $content    Block default content.
 * @param WP_Block $block      Block instance.
 * @return string Returns the filtered post date for the current post wrapped inside "time" tags.
 */
function render_block_core_post_date( $attributes, $content, $block ) {
    if ( ! isset( $block->context['postId'] ) ) {
        return '';
    }

    $post_ID = $block->context['postId'];

    // Tách ngày - tháng - năm
    $day   = get_the_date( 'd', $post_ID );
    $month = get_the_date( 'm', $post_ID );
    $year  = get_the_date( 'Y', $post_ID );

    $unformatted_date = esc_attr( get_the_date( 'c', $post_ID ) );

    $wrapper_attributes = get_block_wrapper_attributes();

    return sprintf(
        '<div %1$s><time datetime="%2$s"><span class="date-day">%3$s</span> Tháng %4$s %5$s</time></div>',
        $wrapper_attributes,
        $unformatted_date,
        $day,
        $month,
        $year
    );
}


/**
 * Registers the `core/post-date` block on the server.
 *
 * @since 5.8.0
 */
function register_block_core_post_date() {
	register_block_type_from_metadata(
		__DIR__ . '/post-date',
		array(
			'render_callback' => 'render_block_core_post_date',
		)
	);
}
add_action( 'init', 'register_block_core_post_date' );
