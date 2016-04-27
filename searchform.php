<?php get_header() ?>
<div class="jumbotron">
    <div class="container">
        <h1>Search <span class="keyword">&ldquo;<?php the_search_query(); ?>&rdquo;</span></h1>
        <?php if ($results_count == '' || $results_count == 0) { // No Results ?>
            <p><span class="label label-danger"><?php _e('No Results'); ?></span>&nbsp; <?php _e('Try different search terms.'); ?></p>
        <?php } else { // Results Found ?>
            <p><span class="label label-success"><?php echo $results_count . __(' Results'); ?></span></p>
        <?php } // end results check ?>
        <div class="row">
            <div class="col-md-3">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .jumbotron -->