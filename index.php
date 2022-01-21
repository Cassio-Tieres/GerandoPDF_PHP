<?php

use Dompdf\Dompdf;

require __DIR__.'/vendor/autoload.php';

     $dpdf = new Dompdf();

     $tabela = file_get_contents('tabela.html');

     $dpdf->loadhtml($tabela);
     $dpdf->setPaper('A4', 'portrait');
     $dpdf->render();
     $dpdf->stream();
?> 