<style>
.dir {
color: black;
}
.file {
color: green;
}
</style>
<?php 

function verifyDir($folder)
 {
  if(is_string ( $folder )) {
   if(is_dir($folder)) {
     return 1;
    } else {
     if(is_file($folder)) throw new Exception('Путь является файлом') ;
      else throw new Exception('Такого пути не существует'); 
     }
   } else throw new Exception('Путь задан неверно');
  return 1;
 }
 
function showdir($folder) 
 { 
 $files = scandir($folder); 
 echo '<ul>';
 foreach($files as $file) { 
  if ($file[0]=='.') continue; 
  $fPath=$folder.'/'.$file;
  if (is_dir($fPath)) { 
   echo '<li class="dir">'.$file.'</li>'."\n"; 
   showdir($fPath); 
  } else {
   echo '<li class="file">'.$file.'</li>'."\n"; 
   }
 } 
 echo '</ul>';
} 
 

$dir=$argv[1];


if(  verifyDir($dir)) {
    showdir($dir); 
 }

 
