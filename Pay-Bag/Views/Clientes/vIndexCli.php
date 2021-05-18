<section>
    <br>
    <br>
    <div class="container">
     <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
    <h1 class="titulos2">Clientes</h1>
    <br>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Ruta</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaClientes as $cliente) { ?>
                <tr>
                    <th><?= $cliente->id ?></th>
                    <td><?= $cliente->cedula ?></td>
                    <td><?= $cliente->apellido ?></td>
                    <td><?= $cliente->nombre ?></td>
                    <td><?= $cliente->direccion ?></td>
                    <td><?= $cliente->telefono ?></td>
                    <td><?= $cliente->rutaId ?></td>
                    <td>
                        <a class="btn btn-warning" href="editCli.php?id=<?= $cliente->id ?>" role="button">Modificar</a>
                        <a class="btn btn-danger" href="destroycli.php?id=<?= $cliente->id ?>" role="button">Eliminar</a>
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>    
    </div>
    <br>
</section>