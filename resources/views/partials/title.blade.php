<?php
$title = get_field('block_title');
$color = get_field('block_color'); 
$centerTitle = get_field('center_title_main');
?>

<div class="col-12 <?php echo $centerTitle ? 'mx-auto text-center' : '' ?>">            
    <h1 class="h1 font-serif" style="color: <?php echo $color ?>"><?php echo $title ?></h1>
</div>