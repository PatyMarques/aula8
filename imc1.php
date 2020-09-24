<?php
function calcula_obesidade($peso, $altura)
{
return $peso / ($altura * $altura);
}

$massa = calcula_obesidade(90, 1.70);


if ($massa <= 17) {
$mensagem = "Muito abaixo do peso";
}
elseif(($massa > 17) and ($massa <=18.49)) {
$mensagem = "Abaixo do peso";
}
elseif(($massa > 18.49) and ($massa <=24.99)) {
$mensagem = "Peso Normal";
}
elseif(($massa > 24.99) and ($massa <=29.99)) {
$mensagem = "Acima do Peso";
}
elseif(($massa > 29.99) and ($massa <=34.99)) {
$mensagem = "Obesidade I";
}
elseif(($massa > 34.99) and ($massa <=39.99)) {
$mensagem = "Obesidade II (severa)";
}
else {
$mensagem = "Obesidade III (mórbida)";
}

echo "Sua Massa Corporal é: <b> $massa </b><br>";
echo "Estado Atual: <b> $mensagem</b>";
