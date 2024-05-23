<?php
class Tienda{
public $Producto;

    function totalizar_compra($Cantidad){
        if($this->Producto == "Samsung Galaxy S6"){
            return $Cantidad * 790;
        }
        else if($this->Producto == "iPhone 6S"){
        return $Cantidad * 890;
        }
        else if($this->Producto == "Moto G 60"){
        return $Cantidad * 400;

        }

        else if($this->Producto == "Redmi Magic 9 Pro"){
            return $Cantidad * 500;
    
        }

        else if($this->Producto == "Xiaomi X3 Pro"){
            return $Cantidad * 290;
    
        }

        else if($this->Producto == "Samsung Galaxy S24 Ultra"){
        return $Cantidad * 900;
    
        }

        else{
            return 0;
        }
    }
}
?>