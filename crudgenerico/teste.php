<?php
require_once("classes/clientes.class.php");
 $cliente = new clientes();
 // $cliente->setValor('nome','Rodrigo');
 //$cliente->setValor('sobrenome','de Freitas');
 $cliente->valorpk = 1;
 $cliente->delCampo('nome');


 //$cliente-> inserir($cliente);
 //$cliente->atualizar($cliente);
 //$cliente->deletar($cliente);
 //$cliente->extras_select = "LIMIT 3";

 $cliente->selecionaCampos($cliente);
 while ($res = $cliente->retornaDados()):
    echo  $res->sobrenome .'<br />';
 endwhile;


echo '<hr />';
echo '<pre>';
print_r($cliente);
echo '</pre>';

 ?>
