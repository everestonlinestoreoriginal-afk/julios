<?php
header("Content-Type: application/json; charset=UTF-8");
error_reporting(0);
ini_set('display_errors', 0);

$productos = [
    ["idproducto"=>"1","nombre"=>"Polo Básico Blanco","categoria"=>"Polos","precio"=>"39.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"2","nombre"=>"Polo Básico Negro","categoria"=>"Polos","precio"=>"39.90","talla"=>"L","imagen"=>""],
    ["idproducto"=>"3","nombre"=>"Casaca Denim Azul","categoria"=>"Casacas","precio"=>"129.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"4","nombre"=>"Casaca Denim Negra","categoria"=>"Casacas","precio"=>"139.90","talla"=>"L","imagen"=>""],
    ["idproducto"=>"5","nombre"=>"Pantalón Jean Slim","categoria"=>"Pantalones","precio"=>"119.90","talla"=>"32","imagen"=>""],
    ["idproducto"=>"6","nombre"=>"Pantalón Jean Regular","categoria"=>"Pantalones","precio"=>"109.90","talla"=>"34","imagen"=>""],
    ["idproducto"=>"7","nombre"=>"Vestido Casual Rojo","categoria"=>"Vestidos","precio"=>"149.90","talla"=>"S","imagen"=>""],
    ["idproducto"=>"8","nombre"=>"Vestido Casual Negro","categoria"=>"Vestidos","precio"=>"149.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"9","nombre"=>"Camisa Formal Blanca","categoria"=>"Camisas","precio"=>"89.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"10","nombre"=>"Camisa Formal Celeste","categoria"=>"Camisas","precio"=>"89.90","talla"=>"L","imagen"=>""],
    ["idproducto"=>"11","nombre"=>"Short Deportivo Gris","categoria"=>"Shorts","precio"=>"49.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"12","nombre"=>"Short Deportivo Negro","categoria"=>"Shorts","precio"=>"49.90","talla"=>"L","imagen"=>""],
    ["idproducto"=>"13","nombre"=>"Sudadera Oversize Beige","categoria"=>"Poleras","precio"=>"99.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"14","nombre"=>"Sudadera Oversize Negra","categoria"=>"Poleras","precio"=>"99.90","talla"=>"L","imagen"=>""],
    ["idproducto"=>"15","nombre"=>"Falda Midi Plisada","categoria"=>"Faldas","precio"=>"79.90","talla"=>"S","imagen"=>""],
    ["idproducto"=>"16","nombre"=>"Falda Midi Negra","categoria"=>"Faldas","precio"=>"79.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"17","nombre"=>"Chompa Tejida Beige","categoria"=>"Chompas","precio"=>"119.90","talla"=>"M","imagen"=>""],
    ["idproducto"=>"18","nombre"=>"Chompa Tejida Gris","categoria"=>"Chompas","precio"=>"119.90","talla"=>"L","imagen"=>""],
    ["idproducto"=>"19","nombre"=>"Zapatillas Urbanas Blancas","categoria"=>"Calzado","precio"=>"199.90","talla"=>"42","imagen"=>""],
    ["idproducto"=>"20","nombre"=>"Zapatillas Urbanas Negras","categoria"=>"Calzado","precio"=>"199.90","talla"=>"43","imagen"=>""]
];

echo json_encode($productos, JSON_UNESCAPED_UNICODE);
exit;
