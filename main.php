<?php

  function readnote($filepath){
    if(is_file($filepath)){
      $content = "";
      foreach (file($filepath) as $value) {
        $content .= $value;
      }
      return $content;
    } else {
      fopen($filepath,'w');
      echo '已創建'.$filepath.'檔案，檔案大小：'.filesize($filepath).'byte';
    }
  }
  
  $content = readnote('./note.json');
  echo "<div>{$content}</div>";

?>