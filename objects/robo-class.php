<?php
	
	class robo{

		private $robo_name,
		$minimum_deposit,
		$pricing,
		$portfolio,
		$rebalancing,
		$promotional_offer_text,
		$promotional_offer_url,
		$promotional_offer_popout,
		$tax_optimization,
		$personalized_help,
		$mobile,
		$imgurl;


		//  ============ Contstructor ================= 
		 public function __construct($robo_name,
		$minimum_deposit,
		$pricing,
		$portfolio,
	    $rebalancing,
		$promotional_offer_text,
		$promotional_offer_url,
		$promotional_offer_popout,
		$tax_optimization,
		$personalized_help,
		$mobile,
		$imgurl)
		{
			$this -> robo_name = $roboname;
			$this -> minimum_deposit = $minimum_deposit;
			$this -> pricing = $pricing;
			$this -> portfolio = $portfolio;
			$this -> rebalancing = $rebalancing;
			$this -> promotional_offer_text = $promotional_offer_text;
			$this -> promotional_offer_url = $promotional_offer_url;
			$this -> promotional_offer_popout = $promotional_offer_popout;
			$this -> tax_optimization = $tax_optimization;
			$this -> personalized_help = $personalized_help;
			$this -> mobile = $mobile;
			$this -> imgurl = $imgurl;
		}



		// =========== Getters & Setters ====================
		public function get_robo_name()
		{
			return  $this -> robo_name;
		}

		public function set_robo_name($robo_name)
		{

			$this -> robo_name  = $robo_name;

		}

		public function get_minimum_deposit()
		{
			return  $this -> minimum_deposit;
		}

		public function set_minimum_deposit($minimumdeposit)
		{

			$this -> minimum_deposit = $minimumdeposit;

		}
		public function get_pricing()
		{
			return  $this -> pricing;
		}

		public function set_pricing($pricing)
		{

			$this -> pricing = $pricing;

		}
		public function get_portfolio()
		{
			return  $this -> portfolio ;
		}

		public function set_portfolio($portfolio)
		{

			$this -> portfolio = $portfolio;

		}
		public function get_account_maintenance()
		{
			return  $this -> account_maintenance ;
		}

		public function set_account_maintenance($account_maintenance)
		{

			$this -> $account_maintenance ;

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
		public function get_rebalancing()
		{
			return  $this -> rebalancing;
		}

		public function set_rebalancing($rebalancing)
		{

			$this -> rebalancing = $rebalancing;

		}
		public function get_tax_optimizations()
		{
			return  $this -> tax_optimization;
		}

		public function set_tax_optimizations($tax_optimization)
		{

			$this -> tax_optimization = $tax_optimization;

		}
		public function get_personalized_help()
		{
			return  $this -> personalized_help;
		}

		public function set_personalized_help($personalized_help)
		{

			$this -> personalized_help = $personalized_help;

		}
		public function get_mobile()
		{
			return  $this ->  mobile;
		}

		public function set_mobile($mobile)
		{

			$this -> mobile = $mobile;

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