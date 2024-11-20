<?php
   namespace PHP\fabiophp;
    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('crud/Conexao.php');
    require_once('crud/Inserir.php');
    require_once('crud/ConsultarConexao.php');
    require_once('crud/AtualizarConexao.php');
    require_once('crud/ExcluirConexao.php');
    use PHP\fabiophp\Cliente;//Definir a classe
    use PHP\fabiophp\Pessoa;
    use PHP\fabiophp\Funcionario;
    use PHP\fabiophp\Endereco;
    use PHP\fabiophp\crud\Conexao;
    use PHP\fabiophp\crud\Inserir;
    use PHP\fabiophp\crud\ConsultarConexao;
    use PHP\fabiophp\crud\AtualizarConexao;
    use PHP\fabiophp\crud\ExcluirConexao;

 /*
 $endCliente = new Endereco("Avenida Senador Vergueiro",
                               "400",
                               "Centro",
                               "São Bernardo do Campo",
                               "São Paulo",
                               "Brasil",
                               "03756-080");
 
    $cliente = new Cliente("12354",
                            "Allan",
                            "1199999",
                            $endCliente,
                            560.60);//Criar um objeto
 
    $clienteDois = new Cliente("12",
                                "João",
                                "13",
                                $endCliente,
                                1020.25);
 
    $funcionario = new Funcionario("1",
                                    "Buganza",
                                    "69",
                                    "Assistente",
                                    1200,
                                    $endCliente);
 
    echo $cliente->imprimir();
    echo $endCliente->imprimir()."<br>";
   
    echo $clienteDois->imprimir();
    echo $endCliente->imprimir()."<br>";
   
    echo $funcionario->imprimir();
    echo $endCliente->imprimir();
   */
 
    $conn = new Conexao();
    $conn->conectar();//Acessar o banco de dados
 
    //$inserir = new Inserir();//Criando acesso a classe Inserir
    //echo $inserir->cadastrarPessoa($conn,"3","Fabio","Rua","11");
 
    $consultar = new Consultar();
    echo $consultar->consultarIndividual($conn,'1');
    echo $consultar->consultarIndividual($conn,'2');
    echo $consultar->consultarIndividual($conn,'3');
 
    $atualizar = new Atualizar();
    $atualizar ->atualizarPessoa($conn,"nome", "Allan",3);
 
    $excluir = new Excluir();
    $excluir ->excluirPessoa($conn,3);
 
?>
 