<?php
    namespace PHP\fabiophp\crud;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','fabioAcademia');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro){
                return "Algo deu errado <br><br>".$erro;
            }
        }//fim do método 
    }//fim da classe
?>