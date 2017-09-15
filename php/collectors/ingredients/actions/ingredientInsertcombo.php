<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clases PHP</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><p class='text-info'> Bienvenido Usuario: xxxx</p></li>
      <li><a href='salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li> 
    </ul> 
  </div>

</nav>

<?php
//Obtener el valor del ID que viene del metodo GET a traves de http
$recipes_id="";
$portions_id="";
$ingrediente="";
$id="";
include_once("../IngredientCollector.php");
include_once("../../../classes/Ingredients.php");
include_once("../../recipes/RecipesCollector.php");
include_once("../../portions/PortionCollector.php");
$portion= new PortionCollector();
$portionList=$portion->showPortions();
$recipes=new RecipeCollector();
$recipesList=$recipes->showsRecipes();
$IngredientCollectorObj = new IngredientCollector();
$ObjIngredient = $IngredientCollectorObj->showIngredient($id);
//print_r($ObjIngredient);
//print_r($portionList);
?>
<div class="container">
  <h2>Editar el Ingrediente</h2>
  <form class="form-horizontal" action="ingredientUpdate.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Usuario">Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ingrediente" name="id" value="<?php echo $ObjIngredient->getIdIngredients(); ?>" readonly/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Ingredients:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ingrediente1" name="ing" value="<?php echo $ObjIngredient->getIngredient(); ?>" autofocus required/>
      </div>
    </div>  
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Id Recipes:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="por" value="<?php echo $ObjIngredient->getIngredientPortionsId(); ?>" readonly/>
        <select name="recipes">
        <?php
          $cont=0;
          $id=0;
          $combobit="";
         foreach ($portionList as $datos){ //Hace foreach de cada row del fetch de la base
          $cont=0;
          $id=0;
            foreach ($datos as $datosx){ //Hace foreach de cada row del fetch de la base
              echo $id;
              if($cont==1)
              {
                
                $combobit .="<option value='".$id."'>".$datosx."</option>";
              }
              else
              {
                $cont=1;
                $id=$datosx;
              }
            }
          }
          echo $combobit;
            
        ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Id Portions:</label>
      <div class="col-sm-10">          
        <!--<input type="text" class="form-control" id="pwd2" name="res" value="<?php echo $ObjIngredient->getIngredientRecipesId(); ?>" readonly/>
        -->
        <select name="portion">
        <?php
          $cont=0;
          $id=0;
          $combobit="";
         foreach ($portionList as $datos){ //Hace foreach de cada row del fetch de la base
          $cont=0;
          $id=0;
            foreach ($datos as $datosx){ //Hace foreach de cada row del fetch de la base
              echo $id;
              if($cont==1)
              {
                if($ObjIngredient->getIngredientRecipesId()==$id)
                $combobit .="<option value='".$id."' selected>".$datosx."</option>";
              else
                $combobit .="<option value='".$id."'>".$datosx."</option>";
              }
              else
              {
                $cont=1;
                $id=$datosx;
              }
            }
          }
          echo $combobit;
            
        ?>
        </select>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Submit</button>
        <a href="ingredientesVista.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>