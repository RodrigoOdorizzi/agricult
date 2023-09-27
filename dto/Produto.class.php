<?php
class Produto extends AbsClassCodigoNome
{

    private $preco;
    private $categoria;
    private $fotoProduto;
    private $cod_vendedor;
      

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco= $preco;
    }



    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }



    public function getFotoProduto()
    {
                return $this->fotoProduto;
    }

    public function setFotoProduto($fotoProduto)
    {
        $this->fotoProduto =  $fotoProduto;
    }



    public function getCod_vendedor()
    {
                return $this->cod_vendedor;
    }

    public function setCod_vendedor($cod_vendedor)
    {
        $this->cod_vendedor =  $cod_vendedor;
    }


    public function __toString()
    {
        return parent::__toString() . " | Preco: " . $this->preco . " | Categoria: " . $this->categoria . " | FotoProduto: " . $this->fotoProduto . " | cod_vendedor: " . $this->cod_vendedor;
    }

    public function buildFromObj($obj)
    {
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr)
    {
        $this->setCodigo($arr['codigo']);
        $this->setNome($arr['nome']);
        $this->setPreco($arr['preco']);
        $this->setCategoria($arr['categoria']);
        $this->setFotoProduto($arr['fotoProduto']);
        $this->setCod_vendedor($arr['cod_vendedor']);
      }
}
