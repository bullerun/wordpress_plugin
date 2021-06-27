<?php
class AFCP_Shortcode{
	public function __construct(){
		add_shortcode('afcp_form', [$this, 'shortcode_form' ]);
	}
	public function shortcode_form(){
		ob_start();
		?>
        <form method="post">
            <label>Header Setting</label>

            <label>Name:</label>
            <input type="text" name="name"/>
            <label>Skills:</label>
            <input type="text" name="skills"/>
            <label>Status:</label>
            <input type="text" name="status"/>
            <button type="submit" name="save">Save</button>

        </form>
		<?php
		return ob_get_clean();
	}
}