<?php
/**
 * Title: List of posts, 1 column
 * Slug: twentytwentyfive/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ">
	<!-- wp:post-template -->
    <div class="wp-block-group md:grid md:grid-cols-2 bg-white border border-gray-100 shadow-md overflow-hidden mb-6 group post-item">
        <!-- Thumbnail -->
        <!-- wp:group {"className":"col-span-4 overflow-hidden flex items-center"} -->
        <div class="wp-block-group col-span-5 overflow-hidden flex items-center">
            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /-->
        </div>
        <!-- /wp:group -->

        <!-- Content -->
        <!-- wp:group {"className":"col-span-7 p-6 flex flex-col justify-between"} -->
        <div class="wp-block-group col-span-7 p-6 d-flex justify-between">
            
            <!-- Date + Title -->
            <!-- wp:group {"className":"flex flex-col md:flex-row mb-4"} -->
            <div class="wp-block-group flex flex-col md:flex-row mb-4">
                
                <!-- Date box -->
                <div class="datebox flex items-center ">
					<div class="day">
						<!-- wp:post-date {"format":"d","isLink":false,"style":{"typography":{"fontSize":"2rem"}}} /-->

					</div>

                    <div class="month-year flex flex-col text-sm leading-tight ml-2">
                        <span class="uppercase text-sm text-gray-500 whitespace-nowrap">Tháng <!-- wp:post-date {"format":"n","isLink":false} /--></span>
                        <span class="text-blue-600 text-sm font-medium"><!-- wp:post-date {"format":"Y","isLink":false} /--></span>
                    </div>
                </div>

                <!-- Title + Category -->
                <div>
					<div class="title">
						<!-- wp:post-title {"isLink":true,"className":"text-xl font-bold text-gray-900 mb-2 post-title line-clamp-2 mt-[10px] md:mt-0"} /-->

					</div>
                    
                    <div class="text-sm text-gray-600 space-x-4">
                        <div class="flex cateflex">
                            <div class="font-medium text-gray-800">Danh Mục: <!-- wp:post-terms {"term":"category"} /--></div>
                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wp:group -->

            <!-- Summary -->
			<div class="text-gray-700 text-sm line-clamp-2 excerpt">
				<!-- wp:post-excerpt {"moreText":"Xem thêm"} /-->
			</div>
        </div>
        <!-- /wp:group -->
		
    </div>

    <!-- /wp:group -->
<!-- /wp:post-template -->
</div>

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
