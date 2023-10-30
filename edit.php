<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $idcategorias = $_POST['edit_categoria'];
    $idproducto = $_POST['edit_produ'];
    $comida = $_POST['edit_comida'];
    $bebidas = $_POST['edit_bebida'];
    $tamaño = $_POST['edit_tam'];
    $postres = $_POST['edit_postre'];
    $descripcion = $_POST['edit_des'];
    $precio = $_POST['edit_precio'];


    // query
    $sql = "UPDATE categoria SET idcategorias='$idcategorias', idproducto='$idproducto', comida='$comida', bebidas='$bebidas', tam='$tamaño', postres='$postres', descripcion='$descripcion', precio='$precio' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
