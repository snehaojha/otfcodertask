<?php
/**
 * Plugin Name: Otfcode Example Plugin
 * Plugin URI: http://localhost/otfcoder/
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Sneha Ojha
 * Author URI: http://localhost/otfcoder/
 */
function inquiry_form(){
?>
<form>
	Name : <input type=”text” name="name"></br>
	Contact No : <input type="tel" name="phone"></br>
	Message : <textarea name="msg" rows="5" cols="40"></textarea></br>
</form>
<?php
}
add_shortcode('form','inquiry_form');
?>