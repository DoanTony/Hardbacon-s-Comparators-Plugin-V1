<?php
	
	class brokerage{

		private $broker_name,
		$minimum_deposit,
		$commission_equity,
		$etf_offer,
		$account_maintenance,
		$dual_currency,
		$promotional_offer_text,
		$promotional_offer_url,
		$promotional_offer_popout,
		$robo_advisor,
		$option_commission,
		$resources,
		$reduce_commission_equity,
		$international_market,
		$usd_only,
		$account_maintenance_rebate_criteria,
		$option_reduced_commissions,
		$level_data,
		$margin_account_rate,
		$mobile,
		$imgurl;



		//  ============ Contstructor ================= 
		 public function __construct($brokername,$minimum_deposit,
		$commission_equity,
		$etf_offer,
		$account_maintenance,
		$dual_currency,
		$promotional_offer_text,
		$promotional_offer_url,
		$promotional_offer_popout,
		$robo_advisor,
		$option_commission,
		$resources,
		$reduce_commission_equity,
		$international_market,
		$usd_only,
		$account_maintenance_rebate_criteria,
		$option_reduced_commissions,
		$level_data,
		$margin_account_rate,
		$mobile,
		$imgurl)
		{
			$this -> broker_name = $brokername;
			$this -> minimum_deposit = $minimum_deposit;
			$this -> commission_equity = $commission_equity;
			$this -> etf_offer = $etf_offer;
			$this -> account_maintenance = $account_maintenance;
			$this -> dual_currency = $dual_currency;
			$this -> promotional_offer_text = $promotional_offer_text;
			$this -> promotional_offer_url = $promotional_offer_url;
			$this -> promotional_offer_popout = $promotional_offer_popout;
			$this -> robo_advisor = $robo_advisor;
			$this -> option_commission = $option_commission;
			$this -> resources = $resources;
			$this -> reduce_commission_equity = $reduce_commission_equity;
			$this -> international_market = $international_market;
			$this -> usd_only = $usd_only;
			$this -> account_maintenance_rebate_criteria = $account_maintenance_rebate_criteria;
			$this -> option_reduced_commissions = $option_reduced_commissions;
			$this -> level_data = $level_data;
			$this -> margin_account_rate = $margin_account_rate;
			$this -> mobile = $mobile;
			$this -> imgurl = $imgurl;
		}



		// =========== Getters & Setters ====================
		public function get_broker_name()
		{
			return  $this -> broker_name;
		}

		public function set_broker_name($broker_name)
		{

			$this -> broker_name  = $broker_name;

		}

		public function get_minimum_deposit()
		{
			return  $this -> minimum_deposit;
		}

		public function set_minimum_deposit($minimumdeposit)
		{

			$this -> minimum_deposit = $minimumdeposit;

		}
		public function get_commission_equity()
		{
			return  $this -> commission_equity;
		}

		public function set_commission_equity($commission_equity)
		{

			$this -> commission_equity = $commission_equity;

		}
		public function get_etf_offer()
		{
			return  $this -> etf_offer ;
		}

		public function set_etf_offer($etf_offer)
		{

			$this -> etf_offer = $etf_offer;

		}
		public function get_account_maintenance()
		{
			return  $this -> account_maintenance ;
		}

		public function set_account_maintenance($account_maintenance)
		{

			$this -> $account_maintenance ;

		}
		public function get_dual_currency()
		{
			return  $this -> dual_currency;
		}

		public function set_dual_currency($dual_currency)
		{

			$this -> dual_currency = $dual_currency ;

		}
		public function get_promotion_text()
		{
			return  $this -> promotional_offer_text ;
		}

		public function set_promotion_text($promotional_offer_text)
		{

			$this -> promotional_offer_text = $promotional_offer_text;

		}
		public function get_promotion_url()
		{
			return  $this -> promotional_offer_url;
		}

		public function set_promotion_url($promotional_offer_url)
		{

			$this -> promotional_offer_url = $promotional_offer_url;

		}
		public function get_promotion_popout()
		{
			return  $this -> promotional_offer_popout;
		}

		public function set_promotion_popout($promotional_offer_popout)
		{

			$this -> promotional_offer_popout = $promotional_offer_popout;

		}
		public function get_robo_advisor()
		{
			return  $this -> robo_advisor;
		}

		public function set_robo_advisor($robo_advisor)
		{

			$this -> robo_advisor = $robo_advisor;

		}
		public function get_option_commission()
		{
			return  $this -> option_commission;
		}

		public function set_option_commission($option_commission)
		{

			$this -> option_commission = $option_commission;

		}
		public function get_resources()
		{
			return  $this -> resources;
		}

		public function set_resources($resources)
		{

			$this -> resources = $resources;

		}
		public function get_reduced_commission_equity()
		{
			return  $this ->  reduce_commission_equity;
		}

		public function set_reduced_commission_equity($reduce_commission_equity)
		{

			$this -> reduce_commission_equity = $reduce_commission_equity;

		}
		public function get_international_market()
		{
			return  $this -> international_market;
		}

		public function set_international_market($international_market)
		{

			$this -> international_market = $international_market ;

		}
		public function get_usd_only()
		{
			return  $this -> usd_only;
		}

		public function set_usd_only($usd_only)
		{

			$this -> usd_only;

		}
		public function get_account_maintenance_rebate_criteria()
		{
			return  $this -> account_maintenance_rebate_criteria;
		}

		public function set_account_maintenance_rebate_criteria($account_maintenance_rebate_criteria)
		{

			$this -> account_maintenance_rebate_criteria = $account_maintenance_rebate_criteria;

		}
		public function get_option_reduced_commission()
		{
			return  $this -> option_reduced_commissions;
		}

		public function set_option_reduced_commission($option_reduced_commissions)
		{

			$this -> option_reduced_commissions = $option_reduced_commissions;

		}
		public function get_level_data()
		{
			return  $this -> level_data ;
		}

		public function set_level_data($level_data)
		{

			$this -> level_data = $level_data;

		}
		public function get_margin_account_rate()
		{
			return  $this -> margin_account_rate;
		}

		public function set_margin_account_rate($margin_account_rate)
		{

			$this -> margin_account_rate = $margin_account_rate ;

		}
		public function get_mobile()
		{
			return  $this -> mobile;
		}

		public function set_mobile($mobile)
		{

			$this -> mobile = $mobile ;

		}
		public function get_imgurl()
		{
			return  $this -> imgurl;
		}

		public function set_imgurl($imgurl)
		{

			$this -> imgurl = $imgurl;

		}


	}

?>