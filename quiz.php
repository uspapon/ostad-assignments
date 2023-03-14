<?php 

$handler = fopen("file.txt", "r+");
fseek($handler, 0);
fwrite($handler, "want to add this");