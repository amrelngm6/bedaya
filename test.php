<?php



$ffmpeg = 'E:\Development\path\ffmpeg\bin\ffmpeg.exe';

shell_exec($ffmpeg.' -i '.$value.' -c:v libwebp tmp/'.$nm);

return null;

?>