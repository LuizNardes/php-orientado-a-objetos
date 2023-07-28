<?php

class CPF 
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCPF($cpf);
        $this->cpf = $cpf;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    private function validaCPF(string $cpf):void
    {   
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($cpf === false)
        {
            echo "CPF inválido";
            exit();
        }
    }
}