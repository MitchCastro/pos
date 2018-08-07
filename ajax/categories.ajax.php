<?php
    require_once '../controllers/CategoriesController.php';
    require_once '../models/Categories.php';
    class AjaxCategories
    {
        /** 
         * EDITAR CATEGORIAS
        */
        public $idCategorie;
        public function ajaxEditCat()
        {
            $item = 'id';
            $value = $this->idCategorie;
            $answer = CategoriesController::ctrViewsCat($item, $value);
            echo json_encode($answer);
        }
    }
    /** 
     * EDITAR CATEGORIA
    */
    if (isset($_POST['idCategorie'])) {
        $categorie = new AjaxCategories();
        $categorie->idCategorie = $_POST['idCategorie'];
        $categorie->ajaxEditCat();
    }