<?php
/****************************************************************
 * 金明科技 建站系统 cakePHP                                    *
 * Smarty 中文截取(cn_truncate) 修饰符                          *
 *                                                              *
 * 作者:hkuclion                                                *
 * 日期:2011.12.30                                              *
 ****************************************************************/
//重新编写,时间降到指数级别

function smarty_modifier_cn_truncate($string, $strlen = 10, $etc = '...', $start = 0, $origin=false){
	mb_internal_encoding("UTF-8");
	if($origin)
		$string = html_entity_decode($string, ENT_QUOTES, 'UTF-8');
	else
		$string = html_entity_decode(trim(strip_tags($string)), ENT_QUOTES, 'UTF-8');
	
	$mb_strlen=mb_strlen($string);
	if(!$start && $strlen>=$mb_strlen)return $string;
	
	if($start){
		$start=hkuc_calc_substr_pos($string, 0, $start, $etc);
	}
	$strpos=hkuc_calc_substr_pos($string, $start, $strlen, $etc);
	
	if($origin)
		return mb_substr($string,$start,$strpos).$etc;
	else
		return htmlspecialchars(mb_substr($string,$start,$strpos).$etc, ENT_QUOTES, 'UTF-8');
}

function hkuc_calc_substr_pos($string, $start, $length, &$etc = ''){
	mb_internal_encoding("UTF-8");
	
	if($etc!=''){
		$etc=strip_tags($etc);
		$etc_strlen=mb_strlen($etc);
		$etc_dbl=strlen(mb_substr($etc, 0, $etc_strlen))-$etc_strlen;
		$etc_sgl=$etc_strlen-$etc_dbl/2;
		$etc_len=$etc_dbl+$etc_sgl;
	}else{
		$etc_len=0;
	}

	if($etc_len>2*$length){
		//trigger_error('$etc length is greater than $length', E_USER_WARNING);
		$etc='';
		return 0;
	}

	$max = $double_length = 2 * $length;
	$double_length -= $etc_len;
	$curlen = $length;
	$min = $curlen-$etc_len;

	while( true ){
		$dbl_len = strlen(mb_substr($string, $start, $curlen)) - $curlen;
		$sgl_len = $curlen - $dbl_len / 2;
		$diff = $double_length - $dbl_len - $sgl_len;

		if($diff==0)break;
		elseif($diff > 0){
			if($min == 0)break;
			$min=$curlen;
			$curlen = intval(($curlen+$max)/2);
			if($min == $curlen)$min = 0;
		}
		else{
			if($max == 0)break;
			$max = $curlen;
			$curlen = intval(($curlen+$min)/2);
			if($max == $curlen)$max = 0;
		}

	}
	if($start+$curlen > mb_strlen($string))$etc='';
	
	return $curlen;
}



?>