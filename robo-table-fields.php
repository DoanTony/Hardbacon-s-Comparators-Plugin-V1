<?php 

function add_robo_custom_fields()
{
	add_meta_box( 
		'robo_meta',
		'Robo Information',
		'robo_meta_callback',
		'robos',
		'normal',
		'high'
		);

}

add_action('add_meta_boxes','add_robo_custom_fields');


function robo_meta_callback($post)
{ 
	wp_nonce_field(basename(__FILE__), 'robo_nonce');
	$robo_stored_data = get_post_meta( $post-> ID); 
	?>

<div>
<p  class="information">
<b> ************************** Use /n to format breaklines ************************** </b>
</p>
<br/>
<!-- ================ Minimum Deposit ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="minimum-deposit" class="row-title">Minimum Deposit</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="minimum-deposit" id="minimum-deposit" value="<?php if(!empty($robo_stored_data['minimum-deposit'])) echo esc_attr($robo_stored_data['minimum-deposit'][0]); ?>"/>
 	</div>
 </div>
<br/>
<!-- ================ Pricing ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="pricing" class="row-title">Pricing</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="pricing" id="pricing" value="<?php if(!empty($robo_stored_data['pricing'])) echo esc_attr($robo_stored_data['pricing'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Portfolio ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="portfolio" class="row-title">Portfolio</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="portfolio" id="portfolio" value="<?php if(!empty($robo_stored_data['portfolio'])) echo esc_attr($robo_stored_data['portfolio'][0]); ?>"/>
 	</div>
 </div>
 <br/>
 <!-- ================ Promotional Offer ========================= -->
 <div class="meta-row">
  <div class="meta-th">
    <label for="promotional-offer" class="row-title">Promotional Offer Text</label>
  </div>
  <div class="meta-td">
    <input type="text" name="promotional-offer" id="promotional-offer" value="<?php if(!empty($robo_stored_data['promotional-offer'])) echo esc_attr($robo_stored_data['promotional-offer'][0]); ?>"/>
  </div>
  </div>
  <br/>
 <!-- ================ Promotional Offer Url ========================= -->
 <div class="meta-row">
    <div class="meta-th">
      <label for="promotional-offer-url" class="row-title"> Promotional Offer Url</label>
    </div>
    <div class="meta-td">
      <input type="text" name="promotional-offer-url" id="promotional-offer-url" value="<?php if(!empty($robo_stored_data['promotional-offer-url'])) echo esc_attr($robo_stored_data['promotional-offer-url'][0]); ?>"/>
    </div>
 </div>
 <br/>
 <!-- ================ Promotional Offer Popout ========================= -->
 <div class="meta-row">
    <div class="meta-th">
      <label for="promotional-offer-popout" class="row-title"> Promotional Offer Popout</label>
    </div>
    <div class="meta-td">
      <input type="text" name="promotional-offer-popout" id="promotional-offer-popout" value="<?php if(!empty($robo_stored_data['promotional-offer-popout'])) echo esc_attr($robo_stored_data['promotional-offer-popout'][0]); ?>"/>
    </div>
 </div>
 <br/>
<!-- ================ Rebalancing ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="rebalacing" class="row-title">Rebalancing</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="rebalacing" id="rebalacing" value="<?php if(!empty($robo_stored_data['rebalacing'])) echo esc_attr($robo_stored_data['rebalacing'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Tax Optimization ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="tax-optimization" class="row-title">Tax Optimization</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="tax-optimization" id="tax-optimization" value="<?php if(!empty($robo_stored_data['tax-optimization'])) echo esc_attr($robo_stored_data['tax-optimization'][0]); ?>"/>
 	</div>
 </div>
 <br/>

<!-- ================ Personnalized Help ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="personnalized-help" class="row-title">Personnalized Help</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="personnalized-help" id="personnalized-help" value="<?php if(!empty($robo_stored_data['personnalized-help'])) echo esc_attr($robo_stored_data['personnalized-help'][0]); ?>"/>
 	</div>
 </div>
 <br/>
 <br/>

 <!-- ================ Mobile ========================= -->
 <div class="meta-row">
  <div class="meta-th">
    <label for="mobile" class="row-title">Mobile</label>
  </div>
  <div class="meta-td">
    <input type="text" name="mobile" id="mobile" value="<?php if(!empty($robo_stored_data['mobile'])) echo esc_attr($robo_stored_data['mobile'][0]); ?>"/>
  </div>
 </div>
 <br/>
 <br/>

 </div>

<?php	
}

function robo_save_data($post_id)
{
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);
	$is_valid_nonce = (isset($_POST['robo_nonce']) && wp_verify_nonce($_POST['robo_nonce'],basename(__FILE__))) ? 'true' : 'false';

	
   if($is_autosave || $is_revision || !$is_valid_nonce)
   {
   	return;
   }

   if(isset($_POST['minimum-deposit']))
   {
   	 update_post_meta($post_id,'minimum-deposit',sanitize_text_field($_POST['minimum-deposit']));
   }	
    if(isset($_POST['pricing']))
   {
   	 update_post_meta($post_id,'pricing',sanitize_text_field($_POST['pricing']));
   }
    if(isset($_POST['portfolio']))
   {
   	 update_post_meta($post_id,'portfolio',sanitize_text_field($_POST['portfolio']));
   }
    if(isset($_POST['rebalacing']))
   {
   	 update_post_meta($post_id,'rebalacing',sanitize_text_field($_POST['rebalacing']));
   }
    if(isset($_POST['tax-optimization']))
   {
   	 update_post_meta($post_id,'tax-optimization',sanitize_text_field($_POST['tax-optimization']));
   }
    if(isset($_POST['promotional-offer']))
   {
   	 update_post_meta($post_id,'promotional-offer',sanitize_text_field($_POST['promotional-offer']));
   }
    if(isset($_POST['promotional-offer-url']))
   {
   	 update_post_meta($post_id,'promotional-offer-url',sanitize_text_field($_POST['promotional-offer-url']));
   }
    if(isset($_POST['promotional-offer-popout']))
   {
     update_post_meta($post_id,'promotional-offer-popout',sanitize_text_field($_POST['promotional-offer-popout']));
   }
    if(isset($_POST['personnalized-help']))
   {
   	 update_post_meta($post_id,'personnalized-help',sanitize_text_field($_POST['personnalized-help']));
   }
    if(isset($_POST['mobile']))
   {
     update_post_meta($post_id,'mobile',sanitize_text_field($_POST['mobile']));
   }
    
}
add_action('save_post','robo_save_data');