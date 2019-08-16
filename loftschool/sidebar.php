<?php

?>

<div class="sidebar__sidebar-item">
                    <div class="sidebar-item__title">Теги</div>
                    <div class="sidebar-item__content">

                    <ul class="tags-list">
                       <?php
wp_tag_cloud( $args );
$args = array(
	'smallest'			=> 8,
	'largest'			=> 22,
	'unit'				=> 'pt',
	'number'			=> 45,
	'format'			=> 'flat',
	'separator'			=> '\n',
	'orderby'			=> 'name',
	'order'				=> 'ASC',
	'exclude'			=> null,
	'include'			=> null,
	'link'				=> 'view',
	'taxonomy'			=> 'post_tag',
	'echo'				=> true,
	'child_of'			=> null
);

?>

                        </ul>
                    </div>
                </div>


             <?php
dynamic_sidebar('true_side'); ?>
