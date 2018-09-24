<?php
/*
Template Name: JP_CONTACT
 */
?><?php get_header() ?>
<div id="content" class="page">
		<section class="page-header">
			<h1>Contact</h1>
			<p>Please feel free to contact us anytime if you have any questions or concerns. We will look forward to assisting you.</p>
		</section>
        <section class="contact-form">

        <?php echo do_shortcode('[mwform_formkey key="76"]'); ?>

            <!--<div class="wrap">
                <div class="col">
                    <label>Your Name<sup>*</sup></label>
                    <input type="text" value="" placeholder="" />
                </div>
                <div class="col">
                    <label>Your Company Name</label>
                    <input type="text" value="" placeholder="" />
                </div>
            </div>
            <div class="wrap">
                <div class="col">
                    <label>Your Phone Number</label>
                    <input type="text" value="" placeholder="" />
                </div>
                <div class="col">
                    <label>Your Email Address<sup>*</sup></label>
                    <input type="text" value="" placeholder="" />
                </div>
            </div>
            <div class="wrap">
                <div class="col">
                    <label>Details<sup>*</sup></label>
                    <textarea></textarea>
                </div>
            </div>-->

        </section>
</div>
<?php get_footer() ?>










