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
- Igualdade: - Sintaxe: ==
- Idêntica: Verifica se tipo de dado é o mesmo - Sintaxe: ===
- Diferença: !=
- Não idêntico a: Verifica se tipo de dado é o  mesmo - Sintaxe: !==
- Maior e maior ou igual a: - Sintaxe: > e >= 
- Menor e menor ou igual a: - Sintaxe: < e <= 


## Operadores Lógicos: 
- AND: Ambas operações precisa ser verdadeira para retornar True - Sintaxe: && 
- OR:  Uma das operações precisa verdadeira para retornar True - Sintaxe: ||
- NOT: Inverte o resultado, se o resultado for True é invertido para False com NOT - Sintaxe: !

## Operadores de conversão: 
Seria definir que o valor seja sempre de um tipo. 
Sintaxe: 
```php
$a = (int) "12"; 
$b = int 2; 
```

## Operadores de atribuição: 
- =  : Atribuir um valor a uma varíavel. 
- += : Soma e realiza a atribuição. 
- -= : Substrai e realiza a atribuição. 
- *= : Multiplica e realiza a atribuição. 
- /= : Dividi e realiza a atribuição. 
- %= : Realiza o mod e a atribuição. 

## Operadores ternários: 
É uma estrutura IF de uma forma resumida. 
A estutura é: Condição ? Exececução se for True : Execução se for False  
A execução se for False é opciconal, poderia ser apenas assim: 
Condição ? Exececução se for True
Sintaxe: 
```php
echo 5 > 2 ?  "5 é maior que 2" :  "5 é menor que 2";
```
