<?php



// Configuração da página

require('./_config.php');



/** Códigos PHP da página */



// Define variáveis

$output = '';



// Obtém artigos do DB

$sql = "SELECT art_id, image, title, preview FROM articles WHERE status = 'ativo' ORDER BY date DESC";

$res = $conn->query($sql);



//  Conta quantos registros retornaram

$total = $res->num_rows;



// Se não retornou registro, exibe mensagem abaixo

if ($total == 0) {

    $output = '<h4>Nenhum artigo encontrado.</h4>';



    // Se retornou registro(s)

} else {



    // Loop entre os artigos

    while ($art = $res->fetch_assoc()) :



        // Imprime cada artigo em '$output'

        $output .= <<<HTML



<div class="article">

<a href="/view.php?id={$art['art_id']}"><img src="{$art['image']}" alt="{$art['title']}"></a>

<div>

    <a href="/view.php?id={$art['art_id']}"><h3>{$art['title']}</h3></a>

    {$art['preview']}

</div>

</div>



HTML;



    endwhile;

}



// Título desta página

$pageTitle = '';



// CSS desta página

$pageCSS = 'index.css';



// JavaScript desta página

$pageJS = 'jquery.rss.min.js';



require('./_header.php');

?>



<article>



    <h2>Artigos Recentes</h2>

    <div class="articles"><?php echo $output ?></div>



</article>



<aside>



   

    <h3>Notícias Atualizadas</h3>
    <p>Últimas notícias do Brasil e do mundo no Google News sobre '<span id="keyword"></span>'.</p>
    <div id="side"></div>


</aside>



<?php

require('./_footer.php');

?>