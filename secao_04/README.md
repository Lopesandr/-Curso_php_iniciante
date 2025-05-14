# Seção 4
Esta seção é apresentado as variáveis. Váriaveis são formas de declarar um valor e salvar na memória, mas sendo possível alterar ao longo programa se for a necessidade. 

- Sintaxe para declarar váriavel no PHP: 
    ```php
    $idade = 23;

- Varíavel de varíavel: 
   É possível criar com nome do valor que contém em uma varíavel. 
   Sintaxe: 
   ```php
      $x = idade;
      $$x = 23;


- Escopo de varíavel:
  - Local: Varíavel declarada em uma função.
  - Global: Varíavel declarada fora de uma função e para ser acessada é necessário colocar "global na frente, como no exemplo:
    ```php
        $teste = 2;
        fuction teste() {
             global $teste;
            
        } 
    
  - Static: Varíavel declarada dentro da função, mas seu valor permanece o mesmo entre as chamadas da função.
    Sintaxe:
    ```php
        fuction teste() {
            static $teste;
        } 
