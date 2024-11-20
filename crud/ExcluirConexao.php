<?php

namespace PHP\fabiophp\crud;
require_once('Conexao.php');
use PHP\fabiophp\crud\Conexao;


class Excluir{
    function excluirPessoa(
                Conexao $conexao,
                int $cpf

    )

    {
        try{
            $conn = $conexao->conectar();
            $sql  = "delete from pessoa where cpf = '$cpf'";
            $result = mysqli_query($conn,$sql);

            mysqli_close($conn);
            if($result){
                echo "<br>Excluido com sucesso";
            }else{
                echo "<br><br>Não foi possivel excluir";
            }
        }
        catch(Exception $erro)
        {
            echo $erro;
        }//fim do catho
    }
}//fim da classe

?>