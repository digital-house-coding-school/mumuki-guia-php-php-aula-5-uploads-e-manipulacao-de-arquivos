Para isso você terá que usar a função `move_uploaded_file`

Esta função recebe dois parâmetros:

1. O pŕoprio arquivo em si. Que iremos obtê-lo desta forma:
`$_FILES["avatar"]["tmp_name"]`
2. A rota de destino. Neste caso, indicamos dentro da pasta "img" com o nome "avatar" e a extensão correta


E como podemos obter a extensão? Para isso podemos buscar auxílio no exercício anterior :wink: