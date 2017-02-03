<?php 

function add_brokerage_custom_fields()
{
	add_meta_box( 
		'brokerage_meta',
		'Broker Information',
		'broker_meta_callback',
		'brokerages',
		'normal',
		'high'
		);

}

add_action('add_meta_boxes','add_brokerage_custom_fields');


function broker_meta_callback($post)
{ 
	wp_nonce_field(basename(__FILE__), 'brokerage_nonce');
	$brokerage_stored_data = get_post_meta( $post-> ID); 
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
 		<input type="text" name="minimum-deposit" id="minimum-deposit" value="<?php if(!empty($brokerage_stored_data['minimum-deposit'])) echo esc_attr($brokerage_stored_data['minimum-deposit'][0]); ?>"/>
 	</div>
 </div>
<br/>
<!-- ================ Commission Equity ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="commission-equity" class="row-title">Commission Equity</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="commission-equity" id="commission-equity" value="<?php if(!empty($brokerage_stored_data['commission-equity'])) echo esc_attr($brokerage_stored_data['commission-equity'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ ETF Offer ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="etf-offer" class="row-title">ETF Offer</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="etf-offer" id="etf-offer" value="<?php if(!empty($brokerage_stored_data['etf-offer'])) echo esc_attr($brokerage_stored_data['etf-offer'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Account Maintenance ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="account-maintenance" class="row-title">Account Maintenance</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="account-maintenance" id="account-maintenance" value="<?php if(!empty($brokerage_stored_data['account-maintenance'])) echo esc_attr($brokerage_stored_data['account-maintenance'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Dual Currency ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="dual-currency" class="row-title">Dual Currency</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="dual-currency" id="dual-currency" value="<?php if(!empty($brokerage_stored_data['dual-currency'])) echo esc_attr($brokerage_stored_data['dual-currency'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Promotional Offer ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="promotional-offer" class="row-title">Promotional Offer Text</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="promotional-offer" id="promotional-offer" value="<?php if(!empty($brokerage_stored_data['promotional-offer'])) echo esc_attr($brokerage_stored_data['promotional-offer'][0]); ?>"/>
 	</div>
  </div>
  <br/>
 <!-- ================ Promotional Offer Url ========================= -->
 <div class="meta-row">
   	<div class="meta-th">
   		<label for="promotional-offer-url" class="row-title"> Promotional Offer Url</label>
   	</div>
   	<div class="meta-td">
   		<input type="text" name="promotional-offer-url" id="promotional-offer-url" value="<?php if(!empty($brokerage_stored_data['promotional-offer-url'])) echo esc_attr($brokerage_stored_data['promotional-offer-url'][0]); ?>"/>
   	</div>
 </div>
 <br/>
  <!-- ================ Promotional Offer Popout ========================= -->
 <div class="meta-row">
    <div class="meta-th">
      <label for="promotional-offer-popout" class="row-title"> Promotional Offer Popout</label>
    </div>
    <div class="meta-td">
      <input type="text" name="promotional-offer-popout" id="promotional-offer-popout" value="<?php if(!empty($brokerage_stored_data['promotional-offer-popout'])) echo esc_attr($brokerage_stored_data['promotional-offer-popout'][0]); ?>"/>
    </div>
 </div>
 <br/>

<!-- ================ Robo Advisor ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="robo-advisor" class="row-title">Robo Advisor</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="robo-advisor" id="robo-advisor" value="<?php if(!empty($brokerage_stored_data['robo-advisor'])) echo esc_attr($brokerage_stored_data['robo-advisor'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Options - Commissions ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="option-commission" class="row-title">Options - Commissions</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="option-commission" id="option-commission" value="<?php if(!empty($brokerage_stored_data['option-commission'])) echo esc_attr($brokerage_stored_data['option-commission'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Resources ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="resources" class="row-title">Resources</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="resources" id="resources" value="<?php if(!empty($brokerage_stored_data['resources'])) echo esc_attr($brokerage_stored_data['resources'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Reduced Commission - Equity ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="reduced-commission-equity" class="row-title">Reduced Commission - Equity</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="reduced-commission-equity" id="reduced-commission-equity" value="<?php if(!empty($brokerage_stored_data['reduced-commission-equity'])) echo esc_attr($brokerage_stored_data['reduced-commission-equity'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ International Markets ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="international-market" class="row-title">International Markets</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="international-market" id="international-market" value="<?php if(!empty($brokerage_stored_data['international-market'])) echo esc_attr($brokerage_stored_data['international-market'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Usd Only ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="usd-only" class="row-title">USD Only</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="usd-only" id="usd-only" value="<?php if(!empty($brokerage_stored_data['usd-only'])) echo esc_attr($brokerage_stored_data['usd-only'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Account Maintenance Rebate Criteria ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="account-maintenance-criteria" class="row-title"> Account Maintenance Rebate Criteria</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="account-maintenance-criteria" id="account-maintenance-criteria" value="<?php if(!empty($brokerage_stored_data['account-maintenance-criteria'])) echo esc_attr($brokerage_stored_data['account-maintenance-criteria'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Option - Reduced Commissions ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="option-reduced-commission" class="row-title">Option - Reduced Commissions </label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="option-reduced-commission" id="option-reduced-commission" value="<?php if(!empty($brokerage_stored_data['option-reduced-commission'])) echo esc_attr($brokerage_stored_data['option-reduced-commission'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Level 1&2 Data ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="level-data" class="row-title"> Level 1&2 Data </label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="level-data" id="level-data" value="<?php if(!empty($brokerage_stored_data['level-data'])) echo esc_attr($brokerage_stored_data['level-data'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Margin Account Rate ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="margin-account-rate" class="row-title">Margin Account Rate</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="margin-account-rate" id="margin-account-rate" value="<?php if(!empty($brokerage_stored_data['margin-account-rate'])) echo esc_attr($brokerage_stored_data['margin-account-rate'][0]); ?>"/>
 	</div>
 </div>
 <br/>
<!-- ================ Mobile ========================= -->
 <div class="meta-row">
 	<div class="meta-th">
 		<label for="mobile" class="row-title">Mobile</label>
 	</div>
 	<div class="meta-td">
 		<input type="text" name="mobile" id="mobile" value="<?php if(!empty($brokerage_stored_data['mobile'])) echo esc_attr($brokerage_stored_data['mobile'][0]); ?>"/>
 	</div>
 </div>
<br/>
<br/>

 </div>

<?php	
}

function brokerage_save_data($post_id)
{
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);
	$is_valid_nonce = (isset($_POST['brokerage_nonce']) && wp_verify_nonce($_POST['brokerage_nonce'],basename(__FILE__))) ? 'true' : 'false';

	
   if($is_autosave || $is_revision || !$is_valid_nonce)
   {
   	return;
   }

   if(isset($_POST['minimum-deposit']))
   {
   	 update_post_meta($post_id,'minimum-deposit',sanitize_text_field($_POST['minimum-deposit']));
   }	
    if(isset($_POST['commission-equity']))
   {
   	 update_post_meta($post_id,'commission-equity',sanitize_text_field($_POST['commission-equity']));
   }
    if(isset($_POST['etf-offer']))
   {
   	 update_post_meta($post_id,'etf-offer',sanitize_text_field($_POST['etf-offer']));
   }
    if(isset($_POST['account-maintenance']))
   {
   	 update_post_meta($post_id,'account-maintenance',sanitize_text_field($_POST['account-maintenance']));
   }
    if(isset($_POST['dual-currency']))
   {
   	 update_post_meta($post_id,'dual-currency',sanitize_text_field($_POST['dual-currency']));
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
    if(isset($_POST['robo-advisor']))
   {
   	 update_post_meta($post_id,'robo-advisor',sanitize_text_field($_POST['robo-advisor']));
   }
    if(isset($_POST['option-commission']))
   {
   	 update_post_meta($post_id,'option-commission',sanitize_text_field($_POST['option-commission']));
   }
    if(isset($_POST['resources']))
   {
   	 update_post_meta($post_id,'resources',sanitize_text_field($_POST['resources']));
   }
    if(isset($_POST['reduced-commission-equity']))
   {
   	 update_post_meta($post_id,'reduced-commission-equity',sanitize_text_field($_POST['reduced-commission-equity']));
   }
    if(isset($_POST['international-market']))
   {
   	 update_post_meta($post_id,'international-market',sanitize_text_field($_POST['international-market']));
   }
    if(isset($_POST['usd-only']))
   {
   	 update_post_meta($post_id,'usd-only',sanitize_text_field($_POST['usd-only']));
   }
    if(isset($_POST['account-maintenance-criteria']))
   {
   	 update_post_meta($post_id,'account-maintenance-criteria',sanitize_text_field($_POST['account-maintenance-criteria']));
   }
   if(isset($_POST['option-reduced-commission']))
   {
     update_post_meta($post_id,'option-reduced-commission',sanitize_text_field($_POST['option-reduced-commission']));
   }
    if(isset($_POST['level-data']))
   {
   	 update_post_meta($post_id,'level-data',sanitize_text_field($_POST['level-data']));
   }
    if(isset($_POST['margin-account-rate']))
   {
   	 update_post_meta($post_id,'margin-account-rate',sanitize_text_field($_POST['margin-account-rate']));
   }
   if(isset($_POST['mobile']))
   {
   	 update_post_meta($post_id,'mobile',sanitize_text_field($_POST['mobile']));
   }

}
add_action('save_post','brokerage_save_data');