<?php
    class CategoriesController
    {
        // GUARDAR CATEGORIA
        public function ctrCreateCat()
        {
            if (isset($_POST['nuevaCategoria'])) {
                if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevaCategoria'])) {
                    $datos = $_POST['nuevaCategoria'];
                    // GUARDAR CATEGORIA
                    $respuesta = Categories::addCategorie($datos);
                    if ($respuesta) {
    					echo '<script>
    						swal({
    							type: "success",
    							title: "¡La categoria ha sido guardado correctamente!",
    							showConfirmButton: true,
    							confirmButtonText: "Cerrar",
    							closeOnConfirm: false
    						}).then((result)=> {
    							if (result.value) {
    								window.location = "categories";
    							}
    						});
    					</script>';
    				} else {
    					echo '<script>
    						swal({
    							type: "error",
    							title: "¡La categoria no se pudo guardar!",
    							showConfirmButton: true,
    							confirmButtonText: "Cerrar",
    							closeOnConfirm: false
    						}).then((result)=> {
    							if (result.value) {
    								window.location = "categories";
    							}
    						});
    					</script>';
    				}
                } else {
                    echo '<script>
                        swal({
                            type: "error",
                            title: "¡La categoria no puede ir vacia o llevar caracteres especiales¡",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result) => {
                            if(result.value){
                                window.location = "categories"
                            }
                        })
                    </script>';
                }
            }
        }
        // MOSTRAR CATEGORIA(S)
        public function ctrViewsCat($item, $value)
        {
            $respuesta = Categories::findCategorie($item, $value);
            return $respuesta;
        }
        /** 
         * EDITAR CATEGORIA
        */
        public function ctrEditCat()
        {
            if (isset($_POST['editarCategoria'])) {
                if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['editarCategoria'])) {
                    $datos = array(
                        'categorie' => $_POST['editarCategoria'],
                        'id' => $_POST['idCategoria']
                    );
                    // GUARDAR CATEGORIA
                    $answer = Categories::aditCategorie($datos);
                    if ($answer) {
    					echo '<script>
    						swal({
    							type: "success",
    							title: "¡La categoria ha sido guardado correctamente!",
    							showConfirmButton: true,
    							confirmButtonText: "Cerrar",
    							closeOnConfirm: false
    						}).then((result)=> {
    							if (result.value) {
    								window.location = "categories";
    							}
    						});
    					</script>';
    				} else {
    					echo '<script>
    						swal({
    							type: "error",
    							title: "¡La categoria no se pudo guardar!",
    							showConfirmButton: true,
    							confirmButtonText: "Cerrar",
    							closeOnConfirm: false
    						}).then((result)=> {
    							if (result.value) {
    								window.location = "categories";
    							}
    						});
    					</script>';
    				}
                } else {
                    echo '<script>
                        swal({
                            type: "error",
                            title: "¡La categoria no puede ir vacia o llevar caracteres especiales¡",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result) => {
                            if(result.value){
                                window.location = "categories"
                            }
                        })
                    </script>';
                }
            }
        }
        /** 
         * ELIMINAR CATEGORIA
        */
        public function crtDeleteCat()
        {
            if (isset($_GET['idCategorie'])) {
                $datos = $_GET['idCategorie'];
                $answer = Categories::deleteCategorie($datos);
                if ($answer) {
					echo ' <script>
						swal({
    						type: "success",
    						title: "¡La categoria ha sido borrado correctamente!",
    						showConfirmButton: true,
    						confirmButtonText: "Cerrar",
    						closeOnConfirm: false
    					}).then((result)=> {
    						if (result.value) {
    							window.location = "categories";
    						}
    					});
					</script>';
				}
            }
        }
    }