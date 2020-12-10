<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Productos</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="../SweetAlert/dist/sweetalert2.min.css">
    <script src="../SweetAlert/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    
    
    
    
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-11 rounded">
            
                <div class="bg-primary mr-5 ml-5 mt-4 rounded border border-dark">
                    <div class="d-flex justify-content-center">
                            <h1 class="text-dark mt-3 mb-4 ">Agregar Productos </h1>
                    </div>
                    <div class="ml-4 mr-4">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="form-group row">
                                <label for="nombpro" class="col-sm-2 col-form-label text-dark">Nombre del producto: </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="nombpro" name="nombpro">
                                </div>
                                <label for="precio" class="col-sm-2 col-form-label text-dark mr-2">Precio: </label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="precio" name="precio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descrip" class="col-sm-2 col-form-label text-dark">Descripcion del producto: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="descrip" name="descrip">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rutimg" class="col-sm-2 col-form-label text-dark">Ruta de la img: </label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="rutimg" name="rutimg">
                                </div>
                                <label for="cantidad" class="col-sm-2 col-form-label text-dark mr-2">No. Cantidad en almacen: </label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="cantidad" name="cantidad">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0  text-dark">Categoria del producto:</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="carniceria" checked>
                                            <label class="form-check-label  text-dark" for="categoria">
                                                Carniceria
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="mascotas">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                Mascotas
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="farmacia">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                Farmacia
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="gym">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                Gym
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="cereales">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                Cereales
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="electronicos">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                Electronicos
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="frutasyv">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                Frutas y verduras
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="juguetes">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                juguetes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="categoria" id="categoria" value="lacteos">
                                            <label class="form-check-label  text-dark" for="categoria">
                                                lacteos
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <?php if(!empty($error)): ?>
                                <div class="h5">
                                    <?php echo $error; 
                                    echo($nombpro);?>
                                    
                                </div>
                            <?php endif; ?>
                            
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>

            </div>
            
            
        
        </div>
        
    </div>
</div>
    
    
</body>
</html>