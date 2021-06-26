<?php
class AFCP_Shortcode{
	public function __construct(){
		add_shortcode('afcp_form', [$this, 'shortcode_form' ]);
	}
	public function shortcode_form(){
		ob_start();
		?>
		это форма
		<?php
		return ob_get_clean();
	}
}