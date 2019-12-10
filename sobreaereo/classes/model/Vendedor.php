<?php

class Vendedor {
    
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $fone;
    private $lojaNome;
    private $lojaRazaoSocial;
    private $lojaEmail;
    private $lojaCnpj;
    private $lojaFone;
    private $cep;
    private $estado;
    private $cidade;
    private $rua;
    private $nroComplemento;
    
    public function __construct( $id, $nome, $email, $cpf, $fone, $lojaNome, $lojaRazaoSocial, $lojaEmail, $lojaCnpj, $lojaFone, $cep, $estado, $cidade, $rua, $nroComplemento)
    {
        $this->id=$id;
        $this->nome=$nome;
        $this->email=$email;
        $this->cpf=$cpf;
        $this->fone=$fone;
        $this->lojaNome=$lojaNome;
        $this->lojaRazaoSocial=$lojaRazaoSocial;
        $this->lojaEmail=$lojaEmail;
        $this->lojaCnpj=$lojaCnpj;
        $this->lojaFone=$lojaFone;
        $this->cep=$cep;
        $this->estado=$estado;
        $this->cidade=$cidade;
        $this->rua=$rua;
        $this->nroComplemento=$nroComplemento;   
    }
    public function getId()
    {
    	return $this->id;
    }
    public function setId($id)
    {
    	$this->id = $id;
    	return $this;
    }
    public function getNome()
    {
    	return $this->nome;
    }
    public function setNome($nome)
    {
    	$this->nome = $nome;
    	return $this;
    }
    public function getEmail()
    {
    	return $this->email;
    }
    public function setEmail($email)
    {
    	$this->email = $email;
    	return $this;
    }
    public function getCpf()
    {
    	return $this->cpf;
    }
    public function setCpf($cpf)
    {
    	$this->cpf = $cpf;
    	return $this;
    }
    public function getFone()
    {
    	return $this->fone;
    }
    public function setFone($fone)
    {
    	$this->fone = $fone;
    	return $this;
    }
    public function getLojaNome()
    {
        	return $this->lojaNome;
        }
        public function setLojaNome($lojaNome)
    {
    	$this->lojaNome = $lojaNome;
    	return $this;
    }
    public function getLojaRazaoSocial()
    {
    	return $this->lojaRazaoSocial;
    }
    public function setLojaRazaoSocial($lojaRazaoSocial)
    {
    	$this->lojaRazaoSocial = $lojaRazaoSocial;
    	return $this;
    }
    public function getLojaEmail()
    {
    	return $this->lojaEmail;
    }
    public function setLojaEmail($lojaEmail)
    {
    	$this->lojaEmail = $lojaEmail;
    	return $this;
    }
    public function getLojaCnpj()
    {
    	return $this->lojaCnpj;
    }
    public function setLojaCnpj($lojaCnpj)
    {
    	$this->lojaCnpj = $lojaCnpj;
    	return $this;
    }
    public function getLojaFone()
    {
    	return $this->lojaFone;
    }
    public function setLojaFone($lojaFone)
    {
    	$this->lojaFone = $lojaFone;
    	return $this;
    }
    public function getCep()
    {
    	return $this->cep;
    }
    public function setCep($cep)
    {
    	$this->cep = $cep;
    	return $this;
    }
    public function getEstado()
    {
    	return $this->estado;
    }
    public function setEstado($estado)
    {
    	$this->estado = $estado;
    	return $this;
    }
    public function getCidade()
    {
    	return $this->cidade;
    }
    public function setCidade($cidade)
    {
    	$this->cidade = $cidade;
    	return $this;
    }
    public function getRua()
    {
    	return $this->rua;
    }
    public function setRua($rua)
    {
    	$this->rua = $rua;
    	return $this;
    }
    public function getNroComplemento()
    {
    	return $this->nroComplemento;
    }
    public function setNroComplemento($nroComplemento)
    {
    	$this->nroComplemento = $nroComplemento;
    	return $this;
    }

}
?>