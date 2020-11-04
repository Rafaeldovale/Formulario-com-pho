<doctype html>
    <html>
        <head>
            <meta charset= "utf-8"/>
            <title>Verificação</title>
        </head>
        <body>
            <div>
                <?php
                 $a = isset ($_GET["ano"])?$_GET["ano"]:1900;
                 $i = date("Y") - $a;
                 $sexo = $_GET["sexo"];
                 echo "Você nasceu em $a, tem a $i anos e seu sexo é $sexo";
                 if($i<16){
                     $vota = "não vota";
                     $dir = "não pode dirigir";
                     echo "<br>";
                 }
                 elseif(($i >=16 && $i<18) || ($i >65)){
                        $vota = "seu voto é opcional";
                        $dir = "não pode dirigir";
                        echo "<br>";
                     }
                     else{
                         $vota = "o voto é obrigatório";
                         $dir = "agora pode tirar a habilitação";
                         echo "<br>";
                     }
                 
                 echo "Com essa idade $vota e $dir";
                 ?>
            </div>
            <a href = "maior de 18.html">voltar</a>
        </body>
    </html>