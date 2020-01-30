<?php 
/*
* Template Name: About Us
*/
?>
<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_about_page_sections',true);
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;
?>
<?php 
get_header();
?>
<?php 
    get_template_part("/page-templates/common/hero");
    ?>
<?php 
    get_template_part("/page-templates/common/about-common");
?>
   <?php get_template_part("/page-templates/common/attorneys-common");
?>
<?php 
    get_template_part("/page-templates/common/contact-common");
?>
<?php 
    get_template_part("/page-templates/common/testimonials-common");
?> 
<?php 
    get_template_part("/page-templates/common/gallery-common");
?>
<?php 
    get_template_part("/page-templates/common/email");
    ?>
<?php get_footer();?>
