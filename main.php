<?php


for($i=1; $i<=200; $i++){
    
        
        echo  " $i ";
    
}


$numero = readline("Informe um número:");


//multiplicação
echo "Multiplicação: ";

for($i = 1; $i <= 10; $i ++){
    
    echo $numero * $i;
    
    
}

echo "Subtração";

for($i = 1; $i <= 10; $i ++){
    
    
        echo $numero - $i;
    
}

echo "Divisão";

for($i = 1; $i <= 10; $i ++){
    
    echo $numero / $i;
    
}

echo "Soma";

for($i = 1; $i <= 10; $i ++){
    
    echo $numero / $i;
    
}


//Leia dois números e informe o maior.

$numero1 = readline("Informe o primeiro número: ");
$numero2 = readline("Informe o Segundo número: ");

if($numero1>$numero2){
    
    echo "O número $numero1 é maior que $numero2";
    
}else if($numero2>$numero1){
    
    echo "O número $numero2 é maior que $numero1";
    
}else{
    
    echo "O dois números são iguais";
    
}

//Ler um número e informar se ele é positivo ou negativo.


$numeroo = readline("Informe o número: ");

if($numeroo>0){
    
    echo "$numeroo é positivo";
    
}else{
    
    echo "$numeroo é negativo";
    
}

for($numero=1000; $numero<=1500; $numero++){
    
    
    echo $numero+$numero;
    
}

