<?php
function switchcase($valor){
switch ($valor){
case "0";
print "O valor=>igual a zero\n";
break;
case "1";
print "O valor=>igual a um\n";
print "O valor=>igual a o segundo valor\n";
break;
case "2";
print "O valor=>igual a dois\n";
print "poderia chamar uma funcao aqui\n";
break;
case "3";
print "O valor=>igual a $valor\n";
break;
default;
print "O valor=>igual a 'default' porque o '$valor' nao se inclui no 'case'\n";
break;
}

}

$valor=0;
switchcase($valor);
$valor=1;
switchcase($valor);
$valor=2;
switchcase($valor);
$valor=3;
switchcase($valor);
$valor=4;
switchcase($valor);
