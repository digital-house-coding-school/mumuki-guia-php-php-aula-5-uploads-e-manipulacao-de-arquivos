Neste caso, recebemos um formulário de login que tem o seguinte campo:

``` html
<input type="password" name="password">
```

Por sua vez, a função `verifyPass` recebe o hash armazenado no banco de dados quando o usuário se registra.

Seu desafio é retornar **true** se a senha enviada corresponder ao hash, caso contrário deverá retornar **false**.