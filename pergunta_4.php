<?php
/**
 * Obs: Fiquei em dúvida se deveria validar o conteúdo das variáveis, portanto validei só o que a questão pediu explicitamente.
 */

$var1 = 198;
echo nl2br ("var1:\n");
if ($var1 && $var1 != null && gettype($var1) == "integer"){
    echo nl2br ("Válido\n");
} else {
    echo nl2br ("Não Válido\n");
}

/*****************************************************************************/

$var2 = [ "nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511" ];
echo nl2br("var2:\n");
if ($var2 && is_array($var2) && sizeof($var2) > 0) {
    if ($var2["endereco"] && $var2["endereco"] != null && gettype($var2["endereco"]) == "string") {
        echo nl2br ("Válido\n");
    } else {
        echo nl2br ("Inválido\n");
    }
} else {
    echo nl2br ("Inválido\n");
}

/*****************************************************************************/

$var3 = "Romarinho";
echo nl2br ("var3:\n");
if ($var3 && $var3 != null && gettype($var3) == "string"){
    echo nl2br ("Válido\n");
} else {
    echo nl2br ("Não Válido\n");
}