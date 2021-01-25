<?php

// Configuração da página
require('./_config.php');

// Título desta página
$pageTitle = 'Notícias Atualizadas';

// CSS desta página
$pageCSS = 'noticias.css';

// JavaScript desta página
$pageJS = 'jquery.rss.min.js';

require('./_header.php');
?>

<article>

    <h3>Notícias Atualizadas</h3>
    <p>Últimas notícias do Brasil e do mundo no Google News sobre '<span id="keyword"></span>'.</p> 
    <div id="news"></div>

</article>



<?php
require('./_footer.php');
?>