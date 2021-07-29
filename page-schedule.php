<?php
/*
Template Name: SCHEDULE
*/
get_header(); ?>
<?php get_template_part('nav'); ?>

<!-- main -->
<main>
    <div class="schedule_wrap">
        <div class="flexbox">
            <div class="schedule_title">
                <h2>SCHEDULE</h2>
                <p>スケジュール</p>
            </div>
        </div>
        <?php echo do_shortcode('[eo_fullcalendar]'); ?>
    </div>
</main>

<?php get_footer(); ?>