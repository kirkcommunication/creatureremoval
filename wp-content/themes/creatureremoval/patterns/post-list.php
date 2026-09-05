<?php
/**
 * Title: Post list
 * Slug: creatureremoval/post-list
 * Categories: posts
 * Inserter: no
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"default"}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"medium"} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="gap:var(--wp--preset--spacing--30)">
				<!-- wp:post-date {"format":"M j, Y","textColor":"accent-4","fontSize":"small"} /-->
				<!-- wp:post-terms {"term":"category","textColor":"accent-4","fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:post-excerpt {"moreText":"Read more","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->