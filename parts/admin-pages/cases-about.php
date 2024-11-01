<?php
/*

Page: about_cases
*/

global $current_user;
get_currentuserinfo();
?>
<style type="text/css">
body {
  background: white;
  color: #222222;
  padding: 0;
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
  font-weight: normal;
  font-style: normal;
  line-height: 1.5;
  position: relative;
  cursor: auto; }
	
 ul.list {list-style-type:circle;list-style-position: outside; margin-left: 1.1rem;}
	.row {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 62.5em; }
  .row:before, .row:after {
    content: " ";
    display: table; }
  .row:after {
    clear: both; }
  .row.collapse > .column,
  .row.collapse > .columns {
    padding-left: 0;
    padding-right: 0; }
  .row.collapse .row {
    margin-left: 0;
    margin-right: 0; }
  .row .row {
    width: auto;
    margin-left: -0.9375em;
    margin-right: -0.9375em;
    margin-top: 0;
    margin-bottom: 0;
    max-width: none; }
    .row .row:before, .row .row:after {
      content: " ";
      display: table; }
    .row .row:after {
      clear: both; }
    .row .row.collapse {
      width: auto;
      margin: 0;
      max-width: none; }
      .row .row.collapse:before, .row .row.collapse:after {
        content: " ";
        display: table; }
      .row .row.collapse:after {
        clear: both; }

.column,
.columns {
  padding-left: 0.9375em;
  padding-right: 0.9375em;
  width: 100%;
  float: left; }
	 .column,
  .columns {
    position: relative;
    padding-left: 0.9375em;
    padding-right: 0.9375em;
    float: left; }

  .small-1 {
    width: 8.33333%; }

  .small-2 {
    width: 16.66667%; }

  .small-3 {
    width: 25%; }

  .small-4 {
    width: 33.33333%; }

  .small-5 {
    width: 41.66667%; }

  .small-6 {
    width: 50%; }

  .small-7 {
    width: 58.33333%; }

  .small-8 {
    width: 66.66667%; }

  .small-9 {
    width: 75%; }

  .small-10 {
    width: 83.33333%; }

  .small-11 {
    width: 91.66667%; }

  .small-12 {
    width: 100%; }

[class*="column"] + [class*="column"]:last-child {
  float: right; }

[class*="column"] + [class*="column"].end {
  float: left; }

</style>
<div class="wrap about-wrap">
	<h1>
		<?php echo __('Welcome to WP Legal Cases','cases');?>
	</h1>
<div class="row">
	<div class="small-6 columns">
		
	<p>
	
	<?php echo _e('WP Legal Cases creates a custom post type for showcasing your firm&apos;s important cases.', 'cases',ENT_QUOTES | ENT_HTML5);?>
	</p>
	
	<h2>
	<?php echo _e('Display Pertinent Information Like:','cases',ENT_QUOTES | ENT_HTML5); ?>
			</h2>
	<p>
		<ul class="list">
			<li><?php echo _e('Year','cases');?></li>
			<li><?php echo _e('Case Type','cases');?></li>
			<li><?php echo _e('Charges','cases');?></li>
			<li><?php echo _e('Verdict','cases');?></li>
			<li><?php echo _e('Sentence or Other Outcome','cases');?></li>
	</ul>
	</p>
	
	<h2>
		<?php echo _e('Custom Templates for Your Cases','cases');?>
	</h2>
	<p>
		<?php echo _e('WP Legal Cases comes with two templates for displaying your cases.  Individual cases are displayed using single-case.php and archive pages are displayed using the archive-case.php file.  Both are found in the /templates folder of the plugin.','cases');?>
	</p>
	<p>
		<?php echo _e('You can customize the look of your cases using the Custom CSS box on the Settings page.','cases');?>
	</p>
</div>
	<div class="small-4 columns">
		<h3>
			<?php echo _e('Tell the world you&apos;re using WP Legal Cases','cases', ENT_QUOTES | ENT_HTML5);?>
		</h3>
		<a href="http://ctt.ec/PUfQ5">Tweet: I'm using WP Legal Cases for my blog.  http://ctt.ec/PUfQ5+</a>
	</div>
</div>
</div>