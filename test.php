<?php



$ffmpeg = 'E:\Development\path\ffmpeg\bin\ffmpeg.exe';

// // // Crop video
foreach (glob('uploads/images/*.png') as $key => $value) {
      $ex = explode('/', $value);
      // $nm = str_replace('.png', '.webp', end($ex));
      $nm = end($ex);
      shell_exec($ffmpeg.' -i '.$value.' -c:v libwebp uploads/tmp/'.$nm);
}

return null;

?>