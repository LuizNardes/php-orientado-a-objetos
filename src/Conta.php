<?php 

class Conta {
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) 
    {
        if($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;

    }
    
    public function depositar(float $valorADepositar): void 
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
        
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void 
    {
        if($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        
    }

    public function recuperarSaldo(): float 
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function getNome()
    {
        return $this->titular->getNome();
    }

    public function getCPF()
    {
        return $this->titular->getCPF();
    }
    

}
