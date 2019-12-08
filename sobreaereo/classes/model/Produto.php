<?php

class Produto {
    
    private $id;
    private $descricao;
    private $categoria;
    private $marca;
    private $preco;
    private $detalhes;
    private $imagens;


    public function __construct( $id, $descricao, $categoria, $marca, $preco, $detalhes,$imagens)
    {
        $this->id=$id;
        $this->descricao=$descricao;
        $this->categoria=$categoria;
        $this->marca=$marca;
        $this->preco=$preco;
        $this->detalhes=$detalhes;
        $this->imagens=$imagens;        
    }
  
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of detalhes
     */ 
    public function getDetalhes()
    {
        return $this->detalhes;
    }

    /**
     * Set the value of detalhes
     *
     * @return  self
     */ 
    public function setDetalhes($detalhes)
    {
        $this->detalhes = $detalhes;

        return $this;
    }

    /**
     * Get the value of imagens
     */ 
    public function getImagens()
    {
        return $this->imagens;
    }

    /**
     * Set the value of imagens
     *
     * @return  self
     */ 
    public function setImagens($imagens)
    {
        $this->imagens = $imagens;

        return $this;
    }
}
?>