<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['agregar'])) {
    // ambil data dari form
    $idcategorias = $_POST['idcategorias'];
    $idproducto = $_POST['idproducto'];
    $comida = $_POST['comida'];
    $bebidas = $_POST['bebidas'];
    $tamaño = $_POST['tamaño'];
    $postres = $_POST['postres'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // query
    $sql = "INSERT INTO categoria(idcategorias, idproducto, comida, bebidas, tam, postres, descripcion, precio)
    VALUES('$idcategorias', '$idproducto', '$comida', '$bebidas', '$tamaño', '$postres', '$descripcion', '$precio')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
