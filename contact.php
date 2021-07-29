<?php
/*
Template Name: CONTACT
*/
get_header(); ?>
<?php get_template_part('nav'); ?>
<main>
    <div class="main_box">
        <div class="contact_box">
            <div class="contact_title_list">
                <div class="contact_title">
                    <h2>お問い合わせ</h2>
                    <p>contact</p>
                </div>
            </div>
            <div class="contact_wrap">
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>