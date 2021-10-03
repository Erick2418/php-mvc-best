<?php
class ProductoObj {
    public $id;
    public $cantidad;
    public function __construct($id, $cantidad) {
        $this->id = $id;
        $this->cantidad = $cantidad;
    }
}
?>