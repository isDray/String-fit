<?php
class _str_num_controller{

function nf_to_wf($strs, $types = 'wf_to_nf'){ //全形半形轉換
    $nft = array(
        "(", ")", "[", "]", "{", "}", ".", ",", ";", ":",
        "-", "?", "!", "@", "#", "$", "%", "&", "|", "\\",
        "/", "+", "=", "*", "~", "`", "'", "\"", "<", ">",
        "^", "_", "[", "]", "[", "]", "\"","\"","<<",">>",
        "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j",
        "k", "l", "m", "n", "o", "p", "q", "r", "s", "t",
        "u", "v", "w", "x", "y", "z",
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J",
        "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T",
        "U", "V", "W", "X", "Y", "Z",
        " "
    );
    $wft = array(
        "（", "）", "〔", "〕", "｛", "｝", "﹒", "，", "；", "：",
        "－", "？", "！", "＠", "＃", "＄", "％", "＆", "｜", "＼",
        "／", "＋", "＝", "＊", "～", "、", "、", "＂", "＜", "＞",
        "︿", "＿", "【", "】", "［", "］","〝","〞","《","》",
        "０", "１", "２", "３", "４", "５", "６", "７", "８", "９",
        "ａ", "ｂ", "ｃ", "ｄ", "ｅ", "ｆ", "ｇ", "ｈ", "ｉ", "ｊ",
        "ｋ", "ｌ", "ｍ", "ｎ", "ｏ", "ｐ", "ｑ", "ｒ", "ｓ", "ｔ",
        "ｕ", "ｖ", "ｗ", "ｘ", "ｙ", "ｚ",
        "Ａ", "Ｂ", "Ｃ", "Ｄ", "Ｅ", "Ｆ", "Ｇ", "Ｈ", "Ｉ", "Ｊ",
        "Ｋ", "Ｌ", "Ｍ", "Ｎ", "Ｏ", "Ｐ", "Ｑ", "Ｒ", "Ｓ", "Ｔ",
        "Ｕ", "Ｖ", "Ｗ", "Ｘ", "Ｙ", "Ｚ",
        "　"
    );

    if ( $types == 'nf_to_wf' ){// 轉全形
        return str_replace($nft, $wft, $strs);
    }else if( $types == 'wf_to_nf' ){// 轉半形
        return str_replace($wft, $nft, $strs);
    }else{
        return $strtmp;
    }
}
static function _strnum_rule($_OStr = '',$_LN = 12){
    // $_OStr = string u want to change
    // $_LN   = LimitNumber
    if($_OStr !=''){
    	$_OStr = self :: nf_to_wf( $_OStr );
    	if( mb_strlen($_OStr,"utf-8") > $_LN){

    		 $R_LN = $_LN-3;
    		 return mb_substr( $_OStr ,0,$R_LN,"utf-8")."...";
             
            
    	}else{

    		return $_OStr;
    	}
    }else{
    	return "";
    }
}
}
?>