<head>
    <script>
        function valida(){
            nome = document.getElementById("nome").value;
            idade = document.getElementById("idade").value;
            cartao = document.getElementById("cartao").value;
            if(nome == ""){
                alert("Nome não pode ser vazio!");
                return false;
            }   
            if(idade == ""){
                alert("Idade não pode ser vazio!");
                return false;
            }
            if(cartao == ""){
                alert("Ponha o numero do cartão, para ganhar um frango caipira");
                return false;
            }

            else{
                return true;
            }
        }
    </script>
    <title>Eduardo e Iguin</title>
</head>
<body>
    <form action="pagina.php" target="_self" method="post" onsubmit="return valida();">
        nome:<input type="text" id ="nome" name="nome"><br>
        idade:<input type="text" id = "idade"name="idade"><br>
        numero do cartão(De crédito):<input type="text" id = "cartao"name="cartão">


        <input type="submit" id="enviar">
        </form>
    </body>
</html>
<?php



?>