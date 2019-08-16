<?php

get_header();
the_post();

?>

<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="article-title title-page">

                <?php

                the_title();
                ?>
            </div>
            <div class='article-image'>
                <?php the_post_thumbnail(); ?>
            </div>
            <div class='article-info'>
                <div class='post-date'><?php the_time('d.m.Y'); ?></div>
            </div>
            <div class='article-text'>
                <?php the_content() ?>
            </div>

            <div class="article-pagination">


                <?php
                if ($previous = get_previous_post()) : ?>
                <div class="article-pagination__block pagination-prev-left">
                    <a href="<?php echo get_permalink($previous->ID); ?>" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                    <div class="wrap-pagination-preview pagination-prev-left">
                        <div class="preview-article__img"><?php echo get_the_post_thumbnail($previous->ID, 'thumbnail') ?></div>
                        <div class="preview-article__content">
                            <div class="preview-article__info"><a href="#" class="post-date"><?php echo get_the_time('d.m.Y', $previous->ID); ?></a></div>
                            <div class="preview-article__text"><?php echo get_the_title($previous->ID); ?></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php
                if ($next = get_next_post()) : ?>
                <div class="article-pagination__block pagination-prev-right">
                    <a href="<?php echo get_permalink($next->ID); ?>" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                    <div class="wrap-pagination-preview pagination-prev-right">
                        <div class="preview-article__img"><?php echo get_the_post_thumbnail($next->ID, 'thumbnail') ?></div>
                        <div class="preview-article__content">
                            <div class="preview-article__info"><a href="#" class="post-date"><?php echo get_the_time('d.m.Y', $next->ID); ?></a></div>
                            <div class="preview-article__text"><?php echo get_the_title($next->ID); ?></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>


    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
</div>