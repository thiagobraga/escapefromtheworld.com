<?php

/**
 * url_format($str)
 * Formata uma url para /nome-enviado-via-string
 * @param   string  $str
 * @return  string
 */
function url_format($str)
{
	return strtolower(space_to_hyphen(convert_accented_characters($str)));
}

/**
 * space_to_hyphen($str)
 * Converte os espaços em hífens (-) da string
 * @param   string  $str
 * @return  string
 */
function space_to_hyphen($str)
{
	return str_replace(' ', '-', $str);
}

/**
 * hyphen_to_space($str)
 * Converte os hífens da string (-) em espaços
 * @param   string  $str
 * @return  string
 */
function hyphen_to_space($str)
{
	return str_replace('-', ' ', $str);
}


/* End of file MY_string_helper.php */
/* Location: ./application/helpers/MY_string_helper.php */