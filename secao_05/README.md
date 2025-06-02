# Seção 5
Essa seção será apresentado as espressões e os operadores em PHP.

## Oque é uma expressão? 
É uma intrução de código que será executada e resulta em um valor, uma soma ou qualquer operação matemática é uma expressão. 

## Oque é um operador? 
 São recursos para compor as exprossões, são operadores de matématica ou até mesmo de compoaração. 


## Operadores aritiméticos: 
- Soma: + 
- Multiplicação: *
- Subtração: - 
- Divisão: /
- Módulo (mod), resto da divisão: %
- Exponiciação: **

## Concatenar dois valores: 
Contanear é juntar dois valores (textos ou números) em uma string.
Exemplo: 
 php
 echo "teste" . "1"; 
 echo "teste" . 2; 


## Auto incremento e auto decremento:
Para aumentar ou diminuir mais um se usa os operadores ++ ou -- do lado do nome da varíavel. 
Exemplo: 
 ```php 
$a = 1; 
$a++
$a--
 ```

## Auto Cast: 
Se refere a conervsão automática de dados, por exemplo realizar uma operação aritimética com um string que contém um número, o php converte essa string para inteiro para realizar a operação.
Exemplo: 
```php
$num = "10";
$resultado = $num + 5; 
echo $resultado;
```

## Operadores de comparação: 
- Igualdade: ==
- Idêntico, também verifica se tipo de dado é o mesmo: ===
- Diferença: !=
- Não idêntico a, também verifica se tipo de dado é o     mesmo: !==
- Maior e maior ou igual a: > e >=
- Menor e menor ou igual a: < e <=
