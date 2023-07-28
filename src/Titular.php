<?php

class Titular
{
    private CPF $cpf;
    private string $nome;


    public function __construct(string $nome,CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCPF(): string
    {
        return $this->cpf->getCPF();
    }
    
    private function validaNomeTitular(string $nome): void
    {
        if(strlen($nome) < 5) 
        {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}