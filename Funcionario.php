<?php
   namespace PHP\fabiophp;
    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\fabiophp\Pessoa;
    use PHP\fabiophp\Endereco;

    class Funcionario extends Pessoa{
        protected string $cargo;
        protected float $salario;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    string $cargo,
                                    float $salario,
                                    Endereco $endereco
        )
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->cargo = $cargo;
            $this->salario = $salario;
        }//fim do construtor

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//fim do método

        public function __set(string $nomeVariavel, string $dado):void
        {
            $this->nomeVariavel = $dado;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Cargo: ".$this->cargo.
                   "<br>Salário: ".$this->salario;
        }//fim do imprimir



    }//fim da classe
?>