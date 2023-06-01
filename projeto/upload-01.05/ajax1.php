<?php
$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];

// Verifica o tipo de arquivo
if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
    echo "error";
    die;
}

// Verifica o tamanho do arquivo (limite de 5MB neste exemplo)
$max_file_size = 1 * 1024 * 1024; // 5MB em bytes
if ($_FILES['file']['size'] > $max_file_size) {
    echo "Tamanho de arquivo excedido. O tamanho máximo permitido é de 5MB.";
    die;
}

if (!file_exists('uploads')) {
    mkdir ('uploads', 0777);
}

$filename = time().'_'.$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$filename);

echo 'uploads/'.$filename;
die;
?>