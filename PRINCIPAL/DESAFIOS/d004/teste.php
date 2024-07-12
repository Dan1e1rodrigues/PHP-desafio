<?php 
    // Definir a URL
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'07-01-2024\'&@dataFinalCotacao=\'07-08-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    // Inicializa o cURL
    $ch = curl_init();

    // Configurações do cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignora a verificação do certificado SSL (não recomendável para produção)

    // Executa a requisição
    $response = curl_exec($ch);

    // Verifica se houve algum erro
    if (curl_errno($ch)) {
        echo 'Erro: ' . curl_error($ch);
    }

    // Fecha a conexão com URL
    curl_close($ch);

    // Decodifica a resposta JSON
    $dados = json_decode($response, true);

    // Verifica se a resposta é válida
    if ($dados !== null && isset($dados["value"][0]["cotacaoCompra"])) {
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        echo "A cotação foi $cotacao";
    } else {
        echo 'Erro ao decodificar a resposta JSON ou dados não encontrados.';
    }
?>
