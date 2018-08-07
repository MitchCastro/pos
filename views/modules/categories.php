<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Administrar categorías
        </h1>
        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Administrar categorías</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
                    Agregar categoría
                </button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive table-hover dtable" width="100%">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // MOSTRAR CATEGORIAS
                            $item = null;
                            $value = null;
                            $categories = new CategoriesController();
                            $result = $categories->ctrViewsCat($item, $value);
                        ?>
                        <?php foreach ($result as $key => $value) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td class="text-uppercase"><?= $value['categorie'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning btnEditarCategoria" idCategoria="<?= $value['id'] ?>" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarCategoria" idCategoria="<?= $value['id'] ?>"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- MODAL NUEVA CATEGORIA -->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post">
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar categoría</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <!-- ENTRADA PARA EL NOMBRE -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar categoría</button>
                </div>
                <?php
                    // GUARDAR CATEGORIA
                    $createCategorie = new CategoriesController();
                    $createCategorie->ctrCreateCat();
                ?>
            </form>
        </div>
    </div>
</div>

<!-- MODAL EDITAR CATEGORIA -->

<div id="modalEditarCategoria" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post">
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar categoría</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <!-- ENTRADA PARA EL NOMBRE -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>
                                <input type="hidden" name="idCategoria" id="idCategoria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
                <?php
                    // EDITAR CATEGORIA
                    $editarCategorie = new CategoriesController();
                    $editarCategorie->ctrEditCat();
                ?>
            </form>
        </div>
    </div>
</div>

<?php
    $deleteCat = new CategoriesController();
    $deleteCat->crtDeleteCat();
?>