<?php
header("Content-Type: application/json");

$productos = [];

for ($i = 1; $i <= 20; $i++) {
    $productos[] = [
        "id" => $i,
        "nombre" => "Producto $i",
        "categoria" => "Ropa",
        "precio" => rand(30,150),
        "stock" => rand(5,40)
    ];
}

echo json_encode($productos);
