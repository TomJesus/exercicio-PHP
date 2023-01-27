<?php


class ContaBancaria{


    /**
     * @var string
     */
    private  $banco;         //propriedades de classe
    /**
     * @var string
     */
    private $nomeTitular ;
    /**
     * @var string
     */
    private $nomeAgencia;
    /**
     * @var string
     */
    private $numeroConta;
    /**
     * @var float
     */
    private $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,              //metodo construtor
        string $nomeAgencia,
        string $numeroConta,
        float $saldo
    ){

       $this->banco = $banco;
       $this->nomeTitular = $nomeTitular;
       $this->nomeAgencia = $nomeAgencia;
       $this->numeroConta = $numeroConta;
       $this->saldo = $saldo;

    }
    public function obterSaldo():string
    {                                            //funçaão

        return 'Seu saldo atual é de R$'.$this->saldo;
    }

    public function depositar(float $valor):string
    {

        $this->saldo += $valor;
        return 'Depósito de R$'.$valor. ' realizado!';

    }

    public function sacar(float $saque):string
    {

        $this->saldo -= $saque;
        return 'Saque de R$'.$saque.' realizado!';
    }
}

$conta = new ContaBancaria(
    'Banco do Brazil',
    'Aelton Teixeira',                     // criação do objeto contaBancaria
    '9882',
    '32432-2',
    0);

echo $conta->obterSaldo();

echo PHP_EOL;
echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL;
echo PHP_EOL;

echo $conta->obterSaldo();

echo PHP_EOL;
echo PHP_EOL;

echo $conta->sacar(75.00);

echo PHP_EOL;
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;
echo date('d/m/y');