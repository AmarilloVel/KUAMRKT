  
<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nombpro = $_POST['nombpro'];
    $precio = $_POST['precio'];
    $descrip = $_POST['descrip'];
    $categoria = $_POST['categoria'];
    $rutimg = $_FILES['archivo']['name'];
    // $rutimg = $_FILES['archivo']['name'];
    // var_dump($_FILES);
    // var_dump($_POST);
    // if($_FILES["archivo"]["errror"]>0){
    //     echo("hbo un error");
    // }else{
    //     $ruta="../images/".$rutimg;
    //     $arch=$_FILES['archivo']['tmp_name'];
    //     $subir=move_uploaded_file($arch,$ruta);
    //     if($subir== FALSE){
    //         echo("No se pudo subir");
    //     }else if($subir==TRUE){
    //         echo("paso");
    //     }
    //     echo($ruta);
        
        
    // }
    var_dump($rutimg);
    echo($rutimg);
    
    
    $error = '';
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=hsing_kuamrkt', 'amarillo', 'amarillo123');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }
    

    $statement = $conexion->prepare('SELECT * FROM productos WHERE nombpro = :nombpro LIMIT 1');
    $statement->execute(array(':nombpro' => $nombpro));
    $resultado = $statement->fetch();
        
                    
    if ($resultado != false){
        
        $error .= "<script>
        Swal.fire(
            'Error!',
            'Este producto ya esta registrado!',
            'error'
            )
        </script>";
    }
    //  if($nombpro=="" ||$precio==""||$descrip==""||$categoria==""||$rutimg=""){
    //      $error .= "<script>
    //      Swal.fire(
    //          'Error!',
    //          'Deber de llenar todos los campos!',
    //          'error'
    //          )
    //      </script>";

    //  }
    // #INSERT INTO prod(nombpro,descrip,precio,esDtado) VALUES('Mango','manogo loco','10.50',1);

        
    
    if ($error == ''){

        

          $statement = $conexion->prepare("INSERT INTO productos (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1,:rutimg)");
          $statement->execute(array(
            
              ':precio' => $precio,
              ':nombpro' => $nombpro,
              ':descrip' => $descrip,
              ':rutimg' => $rutimg
          ));
        

         if($categoria=="farmacia"){
             $statement = $conexion->prepare("INSERT INTO farmacia (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
                
         ));
         }
         if($categoria=="mascotas"){
             $statement = $conexion->prepare("INSERT INTO mascotas (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
         ));
         }
         if($categoria=="carniceria"){
             $statement = $conexion->prepare("INSERT INTO carniceria (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
         ));
         }
         if($categoria=="gym"){
             $statement = $conexion->prepare("INSERT INTO gym (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
             ));
         }
         if($categoria=="cereales"){
             $statement = $conexion->prepare("INSERT INTO cereales (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
             ));
         }
         if($categoria=="electronicos"){
             $statement = $conexion->prepare("INSERT INTO electronicos (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
             ));
         }
         if($categoria=="frutasyv"){
             $statement = $conexion->prepare("INSERT INTO frutasyv (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
             ));
         } 
         if($categoria=="juguetes"){
             $statement = $conexion->prepare("INSERT INTO juguetes (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
             ));
         }
         if($categoria=="lacteos"){
             $statement = $conexion->prepare("INSERT INTO lacteos (nombpro,descrip,precio,esDtado,rutimg) VALUES (:nombpro, :descrip, :precio, 1, :rutimg)");
             $statement->execute(array(
            
                 ':nombpro' => $nombpro,
                 ':precio' => $precio,
                 ':descrip' => $descrip,
                 ':rutimg' => $rutimg
            
             ));
         }
        




        
        
        
         $error .= "<script>
         Swal.fire(
             'Buen Trabajo!',
             'Producto registrado exitosamente!',
             'success'
             )
         </script>";
    }
}


require 'agregarPvista.php';

?>
