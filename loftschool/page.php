<?php
get_header();?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="article-title title-page">

                <?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile;
else:
    _e('Sorry, no posts matched your criteria.');
endif;
?>


            </div>
        </div>
    </div>
</div>



<?php


get_footer();?>