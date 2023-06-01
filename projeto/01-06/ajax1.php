<?php
$arr_file_types = ['image/png', 'image/gif','image/jpg', 'image/jpeg'];

if (!(in_array($_FILES['file'] ['type'], $arr_file_types))){
    echo "erro";
    die;
}
$max_file_size =1 *1024 * 1024;
if ($_FILES['file']['size']> $max_file_size){
    echo "Tamanho de arquivo excedido. O tamanho máximo permitido é de 5mb.";
   die;
}
if(!file_exists('uploads')){
    mkdir ('uploads',0777);

}

$filename = time(). '_' .$_FILE['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$filename);

echo 'uploads/'.$filename;
die;
?>