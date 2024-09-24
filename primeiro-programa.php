<?php

echo "Bem vindo ao App do seu Banco\n";
echo "------------------\n";
$titular = "Luís Inojossa";
$saldoBanco = 500;
echo "Titular: $titular\n";
echo "Saldo disponível: $saldoBanco\n";
echo "------------------\n";

do {
        echo "1. Consultar saldo atual\n";
        echo "2. Sacar valor\n";
        echo "3. Depositar valor\n";
        echo "4. Sair\n";
$opcao = fgets (STDIN);


switch ($opcao) {
   case 1:
           echo "*************\n";
           echo "Titular: $titular\n";
           echo "Saldo atual: R$ $saldoBanco\n";
           echo "*************\n";
           break;

   case 2:
           echo "Qual valor deseja sacar?\n";
           $valorASacar = (float) fgets(STDIN);
           if ($valorASacar > $saldoBanco) {
                   echo "Saldo insuficiente\n";
           } else {
                   $saldoBanco -= $valorASacar;
           }
           break;

   case 3:
           echo "Quanto deseja depositar?\n";
       $valorADepositar = (float) fgets(STDIN);
       $saldoBanco += $valorADepositar;
           break;
                   
   case 4:
       echo "Adeus\n";
       break;
                   
   default:
       echo "Opção inválida\n";
           break;
   }
}while ($opcao != 4);

