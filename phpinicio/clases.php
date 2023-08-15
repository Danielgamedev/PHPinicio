<?php
include 'includes/header (1).php';

class Plato {
    private $nombre;
    private $descripcion;
    private $precio;
    private $categoria;

    public function __construct($nombre, $descripcion, $precio, $categoria) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    public function mostrarDetalles() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Descripción: " . $this->descripcion . "<br>";
        echo "Precio: $" . $this->precio . "<br>";
        echo "Categoría: " . $this->categoria . "<br>";
    }
}

class Menu {
    private $platos = array();

    public function __construct() {
        
        $this->platos[] = new Plato("Hamburguesa Clásica", "Deliciosa hamburguesa con carne de res y queso", 8.99, "Hamburguesas");
        $this->platos[] = new Plato("Hamburguesa Doble", "Deliciosa hamburguesa con doble carne de res y queso", 10.99, "Hamburguesas");
        $this->platos[] = new Plato("Hamburguesa Magnific", "Deliciosa hamburguesa con carne de res, queso, huevo", 20.99, "Hamburguesas");
        $this->platos[] = new Plato("Pizza Margarita", "Pizza con salsa de tomate, mozzarella y albahaca", 10.99, "Pizzas");
        $this->platos[] = new Plato("Pizza 4 queso", "Pizza con queso chester, mozzarella, suave, parmesano", 12.99, "Pizzas");
        $this->platos[] = new Plato("Pizza Hawaiana", "Pizza con piña , mozzarella y albahaca", 13.99, "Pizzas");
        $this->platos[] = new Plato("Lomito", "Fantastico pan con carne de primera y ensalada", 10.99, "Lomitos");
        $this->platos[] = new Plato("Lomito doble", "Fantastico pan con doble carne de primera y ensalada", 12.99, "Lomitos");
        $this->platos[] = new Plato("Lomito malditango", "Fantastico pan con carne de primera, huevo,chorizo", 17.99, "Lomitos");
        $this->platos[] = new Plato("Empanadas", "Rica masa con una delicioso queso", 4.99, "Empanadas");
    }

    public function mostrarMenu() {
        foreach ($this->platos as $indice => $plato) {
            echo "Plato #" . ($indice + 1) . "<br>";
            $plato->mostrarDetalles();
            echo "<br>";
        }
    }


}
$menu = new Menu();
$menu->mostrarMenu();
?>







