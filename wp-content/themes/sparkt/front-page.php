<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <?php get_template_part("components/menage-operations-component") ?>
    <?php get_template_part("components/bespoke-algorithms-component") ?>
    <?php get_template_part("components/insurance-companies-component") ?>
    <?php get_template_part("components/approaches-companies-component") ?>
    <?php get_template_part("components/contact-us-component") ?>
<?php endwhile;
else : ?>
    <p><?php __("No page found!") ?></p>
<?php endif; ?>

<?php get_footer(); ?>