<?php
  namespace PHP\fabiophp;
    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\fabiophp\Pessoa;
    use PHP\fabiophp\Endereco;

    Class Cliente extends Pessoa{
        protected float $precoTotal;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco,
                                    float $precoTotal
        )
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->precoTotal = $precoTotal;
        }//fim do construtor

        //Métodos Gets e Set
        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//fim do get

        public function __set(string $nomeVariavel, string $novoDado):void
        {
            $this->nomeVariavel = $novoDado;
        }//fim do método set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Preço Total: ".$this->precoTotal;
        }//fim do imprimir

        



    }//fim da classe
?>