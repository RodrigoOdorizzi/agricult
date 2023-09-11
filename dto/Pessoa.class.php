<?php
class Pessoa extends AbsClassCodigoNome
{

    private $email;
    private $telefone;
    private $endereco;
    private $id_estado;
    private $nascimento;
<<<<<<< HEAD
    private $imagem;
=======
>>>>>>> retiradocadastroconsumidor
    private $cidade;
    private $usuario;
    private $senha;
      

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }



    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }



    public function getEndereco()
    {
                return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco =  $endereco;
    }



    public function getId_estado()
    {
        return $this->id_estado;
    }
    public function setId_estado($id_estado)
    {
        $this->id_estado = $id_estado;
    }

    
<<<<<<< HEAD

    
    
=======
>>>>>>> retiradocadastroconsumidor
    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento =  $nascimento;
    }


<<<<<<< HEAD



    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem =  $imagem;
    }


=======
>>>>>>> retiradocadastroconsumidor
    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }



    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }


    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
 
    
    public function __toString()
    {
<<<<<<< HEAD
        return parent::__toString() . " | Email: " . $this->email . " | Telefone: " . $this->telefone . " | endereco: " . $this->endereco . " | id_estado: " . $this->id_estado. " | Nascimento: " . $this->nascimento. " | Imagem: " . $this->imagem. " | Cidade: " . $this->cidade. " | Usuario: " . $this->usuario . " | Senha: " . $this->senha;
=======
        return parent::__toString() . " | Email: " . $this->email . " | Telefone: " . $this->telefone . " | endereco: " . $this->endereco . " | id_estado: " . $this->id_estado. " | Nascimento: " . $this->nascimento. " | Cidade: " . $this->cidade. " | Usuario: " . $this->usuario . " | Senha: " . $this->senha;
>>>>>>> retiradocadastroconsumidor
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
        $this->setEmail($arr['email']);
        $this->setTelefone($arr['telefone']);
        $this->setEndereco($arr['endereco']);
        $this->setId_estado($arr['id_estado']);
        $this->setNascimento($arr['nascimento']);
<<<<<<< HEAD
        $this->setImagem($arr['imagem']);
=======
>>>>>>> retiradocadastroconsumidor
        $this->setCidade($arr['cidade']);
        $this->setUsuario($arr['usuario']);
        $this->setSenha($arr['senha']);
      }
}
