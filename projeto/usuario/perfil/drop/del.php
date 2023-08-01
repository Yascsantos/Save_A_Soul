<?php
    include_once("../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id= $_SESSION['id_user'];

//deletando as notas da entrevista do lar voluntário
    $decsvol = "DELETE FROM descricao_vol WHERE id_user ='$id'";
	$deldescvol = mysqli_query($conexao,$decsvol);
	
	if (!$deldescvol) 
    {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 

//deletando as notas da entrevista para adoção
    $decsado = "DELETE FROM descricao_ado WHERE id_user ='$id'";
	$deldescado = mysqli_query($conexao,$decsado);
	
	if (!$deldescado) 
    {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
//deletando o horário da entrevista para o lar voluntário
    $vol = "DELETE FROM voluntario WHERE id_user ='$id'";
    $delvol = mysqli_query($conexao,$vol);

    if (!$delvol) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));

    } 

//deletando o horário da entrevista para a adoção
    $ado = "DELETE FROM voluadocaontario WHERE id_user ='$id'";
    $delado = mysqli_query($conexao,$ado);

    if (!$delado) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));

    } 


//deletando o carrinho de compras
    $car = "DELETE FROM carrinho WHERE id_user ='$id'";
	$delcar = mysqli_query($conexao,$car);
	
	if (!$delcar) 
    {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 

//deletando o usuário
    $user = "DELETE FROM user WHERE id_user ='$id'";
	$deluser = mysqli_query($conexao,$user);
	
	if (!$deluser) 
    {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 

    header ('location:../../../index/index.php');
?>