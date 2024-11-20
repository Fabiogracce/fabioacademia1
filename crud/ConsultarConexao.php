<?php
   namespace PHP\fabiophp\crud;
    require_once('Conexao.php');
    use PHP\fabiophp\crud\Conexao;

    class Consultar{
        function consultarIndividual(
                        Conexao $conexao,
                        int $cpf
        )        
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from pessoa where cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo){
                        echo "<br>cpf: ".$dados['cpf'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Endereço: ".$dados['endereco'].
                             "<br>Genero: ".$dados['genero'];
                        return;//Encerrar o processo
                    }
                    echo "Código digitado não é válido!";
                }
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do método



    }//fim da classe
?>