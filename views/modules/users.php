<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tablero
            <small>Panel de control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Tablero</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalIngresarUsuario">
                Agregar Usuario
            </button>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover dtable" width="100%">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Foto</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Ultimo login</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Usuario Administrador</td>
                        <td>admin</td>
                        <td><img src="views/img/users/default/anonymous.png" alt=""></td>
                        <td>Administrador</td>
                        <td><button class="btn btn-success btn-xs">Activado</button></td>
                        <td>2018-12-11 12:05:32</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Usuario Moderador</td>
                        <td>Eduardo</td>
                        <td><img src="views/img/users/default/anonymous.png" alt=""></td>
                        <td>Moderador</td>
                        <td><button class="btn btn-success btn-xs">Activado</button></td>
                        <td>2018-12-11 12:05:32</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Usuario Moderador</td>
                        <td>Efrain</td>
                        <td><img src="views/img/users/default/anonymous.png" alt=""></td>
                        <td>Moderador</td>
                        <td><button class="btn btn-success btn-xs">Activado</button></td>
                        <td>2018-12-11 12:05:32</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<!-- Modal -->
<div id="ModalIngresarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="form" method="POST" enctype="multipart/form-data">
                <!-- Modal header -->
                <div class="modal-header" style="background-color: #f39c12 ">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Usuario</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="box-body">
                        <!-- Ingresar Nombre -->
                        <div class="form-group">
                            <div class="input-group">
    	                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            	<input type="text" class="form-control" placeholder="Ingresar nombre">
                            </div>
                        </div>                    
                        <!-- ingresar usuario -->
                        <div class="form-group">
                            <div class="input-group">
    	                        <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                            	<input type="text" class="form-control" placeholder="Ingresar usuario">
                            </div>
                        </div>                    
                        <!-- ingresar contraseña -->
                        <div class="form-group">
                            <div class="input-group">
    	                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            	<input type="text" class="form-control" placeholder="Ingresar password">
                            </div>
                        </div>
                        <!-- ingresar tipo de perfil -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                            	<select class="form-control">
                                    <option>Seleccionar perfil</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <!-- subir imagen de perfil -->
                        <div class="form-group">
                            <div class="input-group">
                                <label for="exampleInputFile">Subir imagen</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Peso maximo de la imagen 5MB</p>
                                <img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="115px" alt="Foto">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer del modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>