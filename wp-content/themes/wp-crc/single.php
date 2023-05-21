<?php get_header(); ?>
    <article>
        <div class="container pt-4">
            <div class="row pt-4">
                <?php
                    the_title( '<h1 class="font-xl family-exo2-bold text-details mb-2">', '</h1>' );
                    the_content();
                ?>
            </div>
        </div>
    </article>
<?php get_footer(); ?>