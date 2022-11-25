<?php
require_once "Produtos.php";

$cliente1 = new Pedido();

$Pedido1 = new Produtos();

$cliente1-> $nomeItem = "Bolacha recheada";
$cliente1-> $Quantidade = "2";
$cliente1-> $formaPagamento = "dinheiro";

$Pedido1-> $nomeProduto = "Bolacha recheada"
$Pedido1-> $preço = "R$2,50"
$Pedido1-> $Quantidade = "50"

echo $cliente1->nomeItem;

echo $Pedido1->nomeProduto;
