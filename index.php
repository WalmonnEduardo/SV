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
        <div class="caixa" id="fileContentDiv">
            <!-- O conteúdo de teste.txt será exibido aqui -->
        </div>
    </div>

    <script>
        // Função para buscar o conteúdo do arquivo e exibi-lo na div
        function loadFileContent() {
            fetch('teste.txt') // Supondo que o arquivo esteja na mesma pasta
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro ao carregar o arquivo.');
                    }
                    return response.text(); // Converte o conteúdo em texto
                })
                .then(data => {
                    // Exibe o conteúdo do arquivo dentro da div
                    document.getElementById('fileContentDiv').textContent = data;
                })
                .catch(error => {
                    console.error('Erro:', error);
                    document.getElementById('fileContentDiv').textContent = "Erro ao carregar o arquivo.";
                });
        }

        // Chama a função ao carregar a página
        window.onload = loadFileContent;
    </script>
</body>
</html>
