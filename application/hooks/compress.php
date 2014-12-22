<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Compress HTML output
 *
 * Compress the HTML output, with this rules:
 * - Remove end of line;
 * - Removing all tabs;
 * - Strip whitespaces after tags, except space;
 * - Strip whitespaces before tags, except space;
 * - Shorten multiple whitespace sequences;
 * - Removing all HTML comments except IE conditional comments.
 *
 * @version 1.1
 */
function compress() {
	$CI =& get_instance();
	$buffer = $CI->output->get_output();
	$search = array('/\n/', '/\t/', '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(?!\[if).*?-->/');
	$replace = array('', ' ', '>', '<', '\\1', '');
	$buffer = preg_replace($search, $replace, $buffer);
	$CI->output->set_output($buffer);
	$CI->output->_display();
}

/* End of file compress.php */
/* Location: ./system/application/hooks/compress.php */