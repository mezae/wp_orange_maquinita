<?php 
class Walker_Nav_Primary extends Walker_Nav_menu {
	function start_lvl(&$output, $depth) {
		$indent = str_repeat('\t', $depth);
		$submenu = '($depth > 0) ? ' submenu' : '';'
		$output .= '\n<ul class="">\n';
		// 
		// $output .= '\n' . $indent . '<ul class="dropdown-menu' . $submenu . 'depth_' . '$depth">\n'; 
	}
// 	function start_el() {

// }
// 	function end_el() {

// }
// 	function end_lvl() {

// }
}