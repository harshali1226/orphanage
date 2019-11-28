<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.size{

margin:50px;
}

    </style>
<body>
<?php
include 'config.php';
$child=$_POST["child_id"]; 
$dir="child_pics/$child";


// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        
        while (($file = readdir($dh)) !== false){
        
        if ($file=='.' || $file=='..'){
            //pass
        }
        else{
            echo "<div class='size'> <img src=$dir/$file height='100' width='100px'> </div> <br>";
        }}
    closedir($dh);
    }
  }

  if (is_dir_empty($dir)) {
    echo "the folder is empty"; 
  }

  function is_dir_empty($dir) {
    if (!is_readable($dir)) return NULL; 
    return (count(scandir($dir)) == 2);
  }
  ?>
    
</body>
</html>

