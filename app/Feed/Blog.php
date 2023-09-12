<?php 

namespace App\Feed;

class Blog{

    /**
     * Constate que guarda URL do FEED do blog
     *@var string
     */
    const FEED_URL = 'https://www.agrolink.com.br/rss/noticias.rss';
   // const FEED_URL = 'https://rss.tecmundo.com.br/feed';
    
    

    /**
     * Dados do feed ( instancia do feed xml)
     * @var SimpleXML
     * 
     */
private $feed = null;
 
/**
 * Construtor da classe responsavel
 *  por chamar o carregamento do feed
 * 
 */
public function __construct(){
    
    $this->loadFeed();

}

/**
 * 
 * Método responsável por carregar os dados do feed rss
 * @return [type]
 */
private function loadFeed(){

//Inicia o CURL

$curl = curl_init();

//configura o curl

curl_setopt_array($curl,[
//URL que recebe requisição de consulta
    CURLOPT_URL => self::FEED_URL,
    
//retorna o conteudo para uma variavel e não imprime na tela
CURLOPT_RETURNTRANSFER => true,
//forma de obter requisição
CURLOPT_CUSTOMREQUEST => 'GET'

]);

//executa requisição curl
 $response = curl_exec($curl);

//fecha conexão
curl_close($curl);

 //executa o método que transforma o conteudo xml em instamcoa de xml
return $this->parseXML($response);
 

}

/**
 * 
 * método responsável por criar uma instancia simplexml com base em uma string (conteudo)
 * @param string $response
 * @return boolean
 */
private function parseXML($response){
   //verifica o conteudo do response
    if(!strlen($response)) return false;

    //carrega o xml para a classe
<<<<<<< HEAD
=======

>>>>>>> main
    $this->feed =  simplexml_load_string($response);
//sucesso
  return true;
}


/**
 * 
 * método responsavel por retornar titulo
 * @return String 
 */

 public function getTitle(){
    return $this->feed->channel->title;
}

/**
 * 
 * método responsavel por retornar a descricao
 * @return String 
 */

 public function getDescription(){
    return $this->feed->channel->description;
}

/**
 * 
 * método responsavel por retornar a data de atualização
 * @return String 
 */

    public function getLastUpdate(){
        return $this->feed->channel->lastBuildDate;
    }

    
/**
 * 
 * método responsavel por retornar os itens o
 * @return String 
 */

 public function getItems(){
    return $this->feed->channel->item;
}


}
