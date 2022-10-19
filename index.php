<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from datausuario");
$datausuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($persona);
?>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                   AGREGAR NUEVO USUARIO <br>
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombres: </label>
                        <input type="text" class="form-control" name="txtDuracion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="txtDuracion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DNI: </label>
                        <input type="number" class="form-control" name="txtDuracion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="number" class="form-control" name="txtDuracion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de ingreso: </label>
                        <input type="date" class="form-control" name="txtDuracion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de salida: </label>
                        <input type="date" class="form-control" name="txtDuracion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Resultados: </label>
                        <input type="file" class="form-control" name="txtDuracion" autofocus required>
                    </div>
                    <div class="d-grid">
                    <input type="hidden" name="codigo" value="<?php echo $datausuario->codigo; ?>"><P></P>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-8">
            <?php include 'mensajes/mensajes.php' ?>
            <div class="card">
                <div class="card-header">
                    HISTORIAL
                </div>
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Fecha de ingreso</th>
                                <th scope="col">Fecha de salida</th>
                                <th scope="col">Resultados</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($datausuario as $dato) {
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $dato->codigo; ?></td>
                                    <td><?php echo $dato->Nombres; ?></td>
                                    <td><?php echo $dato->Apellidos; ?></td>
                                    <td><?php echo $dato->DNI; ?></td>
                                    <td><?php echo $dato->Telefono; ?></td>
                                    <td><?php echo $dato->Fecha_Ingreso; ?></td>
                                    <td><?php echo $dato->Fecha_Recojo; ?></td>
                                    <td><?php echo $dato->Resultados; ?></td>

                                    <td><a class="text-primary" href="enviarMensaje.php?codigo=<?php echo $dato->id; ?>"><i class="bi bi-cursor"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>