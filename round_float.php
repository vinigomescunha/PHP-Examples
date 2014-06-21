<?
function roundFloat($number,$num_decimals,$separator){
    list($number_int,$decimal) = explode($separator,strval($number));
    $decimal_str=substr($decimal,0,$num_decimals);
    $determina=substr($decimal,$num_decimals,1);
    if (substr($decimal,0,1)=="9"){
        $len=strlen($decimal_str);
        for ($i=0;$i<$len;$i++){
            if (substr($decimal_str,$i,1)=="9"){$true++;}
        }
        if ($true==$len){$number_int++;return $number_int;}
    }
    if ($determina>=5){$decimal_str++;}
          $denom=pow(10,strlen($decimal_str));
    $decimal_ajustado = $decimal_str/$denom;
    return($number_int+$decimal_ajustado);
}

$num=14.445554456;
echo roundFloat($num,3,".")."<br>";

$num="44,330495219";
echo roundFloat($num,5,",");

$num="44,330495219";
echo roundFloat($num,9,",");

$num="44,330495219";
echo roundFloat($num,0,",");

$num="44,330495219";
echo roundFloat($num,1,",") . "\n";

$num="44,330495219";
echo roundFloat($num,2,",");

//http://php.net/manual/pt_BR/function.explode.php
//http://www.php.net/manual/pt_BR/function.strval.php
//http://www.php.net/manual/pt_BR/function.substr.php
//http://www.php.net/manual/pt_BR/function.strlen.php
//http://www.php.net/manual/pt_BR/function.pow.php
