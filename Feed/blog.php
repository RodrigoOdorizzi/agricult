<?php 

namespace Agricult\Feed;

class Blog{

    /**
     * Constate que guarda URL do FEED do blog
     *@var string
     */
    const FEED_URL = 'https://www.farmnews.com.br/feed/';

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

echo '<pre>';
print_r($response);
echo "<pre>";exit;
}
}
