<!doctype HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Sandra Lopes"/>
    <title>PHP Híbrido com Date</title>
</head>

<body>
    <!-- 
         Testando o comando "echo" que imprime textos na tela, 
         burla o PHP fazendo ele "interpretar" tags HTML, comandos
         CSS e vários scripts, inclusive o JavaScript"
    
         O trecho PHP é delimitado pelos marcadores "?php" precedido
         pelo sinal de "menor", no início, e no final por "?" seguido 
         do sinal de "maior"         
    
         Todo conteúdo (string, comandos, etc) que é representado 
         pelo comando "echo" deve ser escrito, obrigatoriamente,
         entre aspas
    
        Observe que TODAS AS VARIÁVEIS, no PHP, são declaradas, sob 
        as mesmas regras que conhecemos, como no JavaScript, NÃO SÃO
        TIPADAS e devem ser precedidas pelo cifrão "$".
        
        A função date() que extrai os dados do sistema operacional,
        semelhante ao objeto Date() do JavaScript, recebe os seguintes
        parâmetros:

 

            * "d/m/Y" - que define, além do formato visual, separado por
            barras, a letra d (day), recebe o dia do mês, a letra m 
            (month), o mês (de 1 à 12) e a letra Y (Year), o ano com 4
            dígitos (sendo y seria o ano com 2 dígitos)
            
            * time() - função que captura os dados para a date()
    
        Todo final de procedimento deve ter, obrigatoriamente, um sinal
        ";"
    -->
    
    <?php
        $data_de_hoje=date("d/m/Y", time());
        echo "<p class='alinha'>";
        echo "Olá visitante!";
        echo "<br/>";
        echo "<br/>";
        echo "Hoje é dia $data_de_hoje";
        echo "</p>";
    ?>
</body>
</html>