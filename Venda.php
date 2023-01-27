<?php

class Venda
{
private $data;
private $produto;
private $quantidade;
private $valorTotal;


    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function vendas(){

        return 'Data da venda: '.$this->data ."\n".
         'Produto: ' . $this->produto."\n".
            'Quantidade: '.$this->quantidade. "\n".
            'O valo total da venda foi de R$'.$this->valorTotal;


    }
}

$venda = new Venda('27/03/2022', 'feijão', '200', 450000.00);

echo $venda->vendas();