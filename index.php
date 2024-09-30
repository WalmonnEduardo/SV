<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            background-color: black;
            justify-content: space-evenly;
            align-items: center; /* Centraliza verticalmente */
            flex-wrap: wrap;
        }
        .caixa{
            border-radius: 30px;
            margin: 10px;
            height: 150px; /* Aumentei para ajustar ao conteúdo */
            width: 500px;
            background-image: linear-gradient(red, blue);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white; /* Ajusta a cor do texto para visibilidade */
        }
        .caixa:hover{
            background-image: linear-gradient(0deg, red, blue);
        }
        .c2{
            height: 90dvh;
        }
    </style>
</head>
<body>  
    <div class="container">
        <div class="caixa">
            <form action="teste.php" method="post">
                <input type="text" name="mensagem" placeholder="Digite sua mensagem" autocomplete="off">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="caixa c2">
            <?php
            $arquivo = fopen("teste.txt","r");
            if ($arquivo)
            {
                while (($linha = fgets($arquivo)) !== false)
                {
                    echo $linha . "<br>";
                }
                fclose($arquivo);
            }
            else
            {
                echo "Erro ao abrir o arquivo.";
            }
            ?>
        </div>
    </div>
</body>
</html>
