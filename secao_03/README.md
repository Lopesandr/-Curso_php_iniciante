# Seção 3
Esta seção é a apresentado os tipos de dados em PHP. 

### Tipos de dados: 

- Inteiros: Números inteiros, como: 1, 2, 3... 

- Float:  Números com casas decimais, como 1.2, 1.3...

- String:  Textos, em PHP pode se declarar com aspas simples ou duplas. 
  As aspas dulpas interpetram variavéis, exemplo:
  ```php
      $idade = 23
      echo "Ele tem $idade anos"; 

- Boolean: Existe apenas dois valores: True(verdadeiro) e False(falso).
  Alguns outros valores são considerados como falsos, como: 0, 0.0, "0", [], NULL.
  Os valores True e False não são impridos como "True" e "False". Ao tentar  imprimir True, será impresso o número 1 e o False irá printar vazio, ou seja, nada. 

- Arrays: É um tipo de dado que serve para agrupar um conjunto de valores, a sintaxe é `[1, 2, 3];`. 

- Array associativo: É um tipo de dado que agrupa um conjunto de dados, mas contendo chave e valor. A sintaxe é `['nome' => 'Andressa', 'idade' => 23];`

- Null: É varíavel que tem o valor Null. A sintaxe `$temp = NULL`;. 
### Como verificar se o tipo de dado e tal...

- Int - `is_int(1);` : Se  retornar True, é inteiro. 
- Float - `is_float(1);` : Se  retornar True, é um float. 
- String - `is_strint('Oi');` : Se retornar True é uma string.
- Boolean - `is_bool(True);` : Se retornar True é porque é um boolean. 
- Null - `is_null(NULL);` : Retorna True se o valor for NULL.
