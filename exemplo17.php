<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "Operadores logícos e if Ternário do PHP<br><br>";
                //&& ou AND -> operador lógico "E"
                //|| ou OR  -> operador lógico "OU"
                //! ou NOT  -> operador lógico "NÃO"

                $iAno = $_GET["ano"];
                $iIdade = 2021 - $iAno;

                echo "Você nasceu em $iAno e tem $iIdade ano de idade";
                //if ternario -> (condção)?verdadeiro:falsa
                echo " e seu voto ".(($iIdade<18 || $iIdade>65)?"Não é obrigatório":"é obrigatório");
            ?>
        </div>
    </body>
</html>