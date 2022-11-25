<?php
class Produtos{
    public $nomeProduto;
    public $preço;
    public $quantidade;

    public function estocar(){
        echo "estocar produto";
    }
    public function etiquetar(){
        echo "colocar valor no produto";

    public function mostrarProduto(){
        echo $this->nomeProduto. "<br>";
    }
    }
}