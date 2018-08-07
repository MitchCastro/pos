<?php
    require_once 'DbConnect.php';
    class Categories
    {
        // GUARDAR CATEGORIA
        static public function addCategorie($datos)
        {
            $stmt = DbConnect::connect()->prepare(
                "INSERT INTO categories (categorie) VALUES (:categorie)"
            );
            $stmt->bindParam(':categorie', $datos, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
            $stmt = null;
        }
        // MOSTRAR CATEGORIAS(S)
        static public function findCategorie($item, $value)
        {
            if ($item != null) {
                $stmt = DbConnect::connect()->prepare(
                    "SELECT * FROM categories WHERE $item = :$item"
                );
                $stmt->bindParam(':'.$item, $value, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch();
            } else {
                $stmt = DbConnect::connect()->prepare(
                    "SELECT * FROM categories"
                );
                $stmt->execute();
                return $stmt->fetchAll();
            }
            $stmt->close();
            $stmt = null;
        }
        /** 
         * EDITAR CATEGORIA
        */
        static public function aditCategorie($datos)
        {
            $stmt = DbConnect::connect()->prepare(
                "UPDATE categories SET categorie = :categorie WHERE id = :id"
            );
            $stmt->bindParam(':categorie', $datos['categorie'], PDO::PARAM_STR);
            $stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
            $stmt = null;
        }
        /** 
         * ELIMINAR CATEGORIA
        */
        static function deleteCategorie($datos)
        {
            $stmt = DbConnect::connect()->prepare(
                "DELETE FROM categories WHERE id = :id"
            );
            $stmt->bindParam(':id', $datos, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
            $stmt = null;
        }
    }