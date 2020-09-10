<?php
    get_header();
?>


<div class="container" style="min-height:65vh">
    <div class="my-5"></div>
    <h1>
        <?php the_title(); ?>
    </h1>
    <?php
if( have_posts() ){
    while( have_posts() ){
        // fetch single post from db
        the_post();

        get_template_part('template-parts/content', 'basic-page');
    }
}
?>
<div class="my-5"></div>
</div>

</header>
<?php
    get_footer();
?>