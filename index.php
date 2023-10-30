<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Pushee Coffee</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Ir a datos</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah categoria -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">Tabla: Categoria</h3>
                <h5>Jessica Estrella Salas Felix</h5>

                <!-- tampilkan pesan sukses ditambah -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Éxito!</strong> ¡Datos agregados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal ditambahkan!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-md-6">
                        <label for="idcategorias" class="form-label">ID categoria</label>
                        <input type="number" name="idcategorias" class="form-control" placeholder="ID" required>
                    </div>

                    <div class="col-md-6">
                        <label for="idproducto" class="form-label">ID producto</label>
                        <input type="number" name="idproducto" class="form-control" placeholder="ID" required>
                    </div>

                    <div class="col-md-4">
                        <label for="comida" class="form-label">Comida</label>
                        <select class="form-select" name="comida" aria-label="Default select example">
                            <option value="Si lleva comida">Si lleva comida</option>
                            <option value="No lleva comida">No lleva comida</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="bebidas" class="form-label">Bebidas</label>
                        <select class="form-select" name="bebidas" aria-label="Default select example">
                            <option value="Si lleva bebida">Si lleva bebida</option>
                            <option value="No lleva bebida">No lleva bebida</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="tamaño" class="form-label">Tamaño</label>
                        <select class="form-select" name="tamaño" aria-label="Default select example">
                            <option value="Pequeño">Pequeño</option>
                            <option value="Mediano">Mediano</option>
                            <option value="Grande">Grande</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="postres" class="form-label">Postre</label>
                        <select class="form-select" name="postres" aria-label="Default select example">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required>
                    </div>

                    <div class="col-md-4">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" name="precio" class="form-control" placeholder="Precio" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="agregar"><i class="fa fa-plus"></i><span class="ms-2">Agregar Datos</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Mi lista de estudiantes</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tampilkan Entri</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar algo..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Exitoso!</strong> ¡Los datos se han eliminado corrctamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal dihapus!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Éxito!</strong> ¡Datos actualizados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> ¡Datos no actualizados!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>ID categoria</th>";
            echo "<th scope='col'>ID producto</th>";
            echo "<th scope='col'>Comida</th>";
            echo "<th scope='col'>Bebidas</th>";
            echo "<th scope='col'>Tamaño</th>";
            echo "<th scope='col'>Postre</th>";
            echo "<th scope='col'>Descripcion</th>";
            echo "<th scope='col'>Precio</th>";
            echo "<th scope='col' class='text-center'>Opciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM categoria");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM categoria LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;

            // $sql = "SELECT * FROM categoria";
            // $query = mysqli_query($db, $sql);




            while ($categoria = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $categoria['id'] . "</td>";
                echo "<td>" . $categoria['idcategorias'] . "</td>";
                echo "<td>" . $categoria['idproducto'] . "</td>";
                echo "<td>" . $categoria['comida'] . "</td>";
                echo "<td>" . $categoria['bebidas'] . "</td>";
                echo "<td>" . $categoria['tam'] . "</td>";
                echo "<td>" . $categoria['postres'] . "</td>";
                echo "<td>" . $categoria['descripcion'] . "</td>";
                echo "<td>" . $categoria['precio'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>Tidak ada data yang tersedia pada tabel ini</p>";
            } else {
                echo "<p>Total $jumlah_data entradas</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>">
                            <?php echo $x; ?>
                        </a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar datos</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM categoria";
                    $query = mysqli_query($db, $sql);
                    $categoria = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>

                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_categoria" class="form-label">ID categoria</label>
                                <input type="number" name="edit_categoria" id="edit_categoria" class="form-control" placeholder="" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_produ" class="form-label">ID producto</label>
                                <input type="number" name="edit_produ" id="edit_produ" class="form-control" placeholder="" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_comida" class="form-label">Comida</label>
                                <select class="form-select" name="edit_comida" id="edit_comida" aria-label="Default select example">
                                    <option value="Si lleva comida">Si lleva comida</option>
                                    <option value="No lleva comida">No lleva comida</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_bebida" class="form-label">Bebida</label>
                                <select class="form-select" name="edit_bebida" id="edit_bebida" aria-label="Default select example">
                                    <option value="Si lleva comida">Si lleva bebida</option>
                                    <option value="No lleva bebida">No lleva bebida</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_tam" class="form-label">Tamaño</label>
                                <select class="form-select" name="edit_tam" id="edit_tam" aria-label="Default select example">
                                    <option value="Pequeño">Pequeño</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Grande">Grande</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_postre" class="form-label">Postre</label>
                                <select class="form-select" name="edit_postre" id="edit_postre" aria-label="Default select example">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="edit_des" class="form-label">Descripcion</label>
                                <input type="text" name="edit_des" id="edit_des" class="form-control" placeholder="" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_precio" class="form-label">Precio</label>
                                <input type="text" name="edit_precio" class="form-control" id="edit_precio" placeholder="" required>
                            </div>

                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Actualizar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmación</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Borrar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[0]);
                $('#edit_id').val(data[0]);
                $('#edit_categoria').val(data[1]);
                $('#edit_produ').val(data[2]);
                $('#edit_comida').val(data[3]);
                $('#edit_bebida').val(data[4]);
                $('#edit_tam').val(data[5]);
                $('#edit_postre').val(data[6]);
                $('#edit_des').val(data[7]);
                $('#edit_precio').val(data[8]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>