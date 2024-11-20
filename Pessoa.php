<?php
    namespace PHP\fabiophp;
    require_once('Endereco.php');
    use PHP\fabiophp\Endereco;

    class Pessoa{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco
        )
        {
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do método

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//fim do método

        public function __set(string $nomeVariavel, string $dado):void
        {
            $this->nomeVariavel = $dado;
        }//fim do método

        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone;
        }//fim do método


    }//fim da classe
?>