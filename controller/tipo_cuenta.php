<?php
require_once '../includes/db.php';
$action = $_GET['action'];


    if($action == "delete"){
        $id = base64_decode($_GET['id']);
        $sql = mysqli_query($enlace, "DELETE FROM tipo_cuenta WHERE id = '$id'");
        if(!$sql){
            header("Location: ../tipo_cuentas.php?action=list&state=delete_error");
        }
        else{
            header("Location: ../tipo_cuentas.php?action=list&state=delete_exito");
        }
    }

    if($action == "update"){
        $id = base64_decode($_GET['id']);
        $tipo = $_POST['tipo'];

        $sql = mysqli_query($enlace, "UPDATE tipo_cuenta SET tipo = '$tipo' WHERE id = '$id'");

        if(!$sql){
            header("Location: ../tipo_cuentas.php?action=list&state=update_error");
        }
        else{
            header("Location: ../tipo_cuentas.php?action=list&state=update_exito");
        }
    }

    if($action == "create"){
        $tipo = $_POST['tipo'];
        $sql = mysqli_query($enlace, "INSERT INTO tipo_cuenta (tipo, estatus) VALUES ('$tipo', '1')");

        if(!$sql){
            header("Location: ../tipo_cuentas.php?action=list&state=insert_error");
        }
        else{
            header("Location: ../tipo_cuentas.php?action=list&state=insert_exito");
        }
    }