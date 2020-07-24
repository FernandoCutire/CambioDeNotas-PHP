<?php 

include ("./plantilla/cabecera.php");
include ("./plantilla/Ingrese_val.php");
include ("clases/Notas.php");
include ("plantilla/arreglo.php");

cabecera();

if(isset($_POST['cambio'])) { 
//PROGRAMA PRINCIPAL
$arreglo = array ( 
    array ("id"=>"1","taller1"=>23, "taller2"=>100,"taller3"=>100,"parcial1"=>12, "parcial2"=>56,"semestral"=>76,"media"=>-1),
    array ("id"=>"2","taller1"=>90, "taller2"=>54,"taller3"=>76,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"3","taller1"=>80, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"4","taller1"=>85, "taller2"=>98,"taller3"=>12,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"5","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
     array ("id"=>"6","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"7","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>56,"media"=>-1),
    array ("id"=>"8","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>65,"media"=>-1),
    array ("id"=>"9","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"10","taller1"=>12, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>98,"media"=>-1),
    array ("id"=>"11","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"12","taller1"=>12, "taller2"=>34,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>34,"media"=>-1),
    array ("id"=>"13","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"14","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"15","taller1"=>70, "taller2"=>46,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"16","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"17","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"18","taller1"=>70, "taller2"=>12,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"19","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"20","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>70,"semestral"=>100,"media"=>-1),
    array ("id"=>"21","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"22","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"23","taller1"=>70, "taller2"=>80,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"24","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>80,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"25","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>91,"media"=>-1),
    array ("id"=>"26","taller1"=>70, "taller2"=>76,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"27","taller1"=>70, "taller2"=>98,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>54,"media"=>-1),
    array ("id"=>"28","taller1"=>70, "taller2"=>56,"taller3"=>100,"parcial1"=>100,"parcial2"=>50,"semestral"=>100,"media"=>-1),
    array ("id"=>"29","taller1"=>70, "taller2"=>23,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"30","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>45,"media"=>-1),
    array ("id"=>"31","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"32","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"33","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>67,"media"=>-1),
    array ("id"=>"34","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1)
  );

  
    $obj = new Notas();
    $hacercamb = $_REQUEST["m"];
    $estcam = $_REQUEST["1"];
    $asigcam = $_REQUEST["hm"];
    $notcam = $_REQUEST["3"];

    
    if ($hacercamb == 1) {
        $titulo;
        if ($asigcam == 1) {
        $arreglo[$estcam - 1]["taller1"] = $notcam;
        echo "<h1 class=\"heading__secondary center-text\" >Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Taller 1", ".</h1>";
        }
        if ($asigcam == 2) {
        $arreglo[$estcam - 1]["taller2"] = $notcam;
        echo "<h1 class=\"heading__secondary center-text\">Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Taller 2", ".</h1>";
        }
        if ($asigcam == 3) {
        $arreglo[$estcam - 1]["taller3"] = $notcam;
        echo "<h1 class=\"heading__secondary center-text\">Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Taller 3", ".</h1>";
        }
        if ($asigcam == 4) {
        $arreglo[$estcam - 1]["parcial1"] = $notcam;
        echo "<h1 class=\"heading__secondary center-text\">Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Parcial 1", ".</h1>";
        }
        if ($asigcam == 5) {
        $arreglo[$estcam - 1]["parcial2"] = $notcam;
        echo "<h1 class=\"heading__secondary center-text\" >Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Parcial 2", ".</h1>";
        }
        if ($asigcam == 6) {
        $arreglo[$estcam - 1]["semestral"] = $notcam;
        echo "<h1 class=\"heading__secondary center-text\" >Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Semestral", ".</h1>";
        }
    }

    $obj->asignar($arreglo);
    ?>
      <h1 class="heading__primary">Estudiantes</h1>

    <div class="respuestas">
        
        <div class="respuestas__caja--1 respuestas__sin-media">
            <h1 class="respuestas__heading--primary margin-bottom-small margin-top-small"> Notas</h1>
            <?php for ($i = 0; $i < sizeof($arreglo); $i++) { ?>
                <label>Estudiante <input type="text" value="<?php echo $arreglo[$i]["id"] ?>" readonly /> </label> 
                <label>Taller 1 <input type="text" value="<?php echo $arreglo[$i]["taller1"] ?>" readonly /> </label> 
                <label>Taller 2<input type="text" value="<?php echo $arreglo[$i]["taller2"] ?>" readonly /> </label> 
                <label>Taller 3 <input type="text" value="<?php echo $arreglo[$i]["taller3"] ?>" readonly /> </label> 
                <label>Parcial 1 <input type="text" value="<?php echo $arreglo[$i]["parcial1"] ?>" readonly /> </label> 
                <label>Parcial 2<input type="text" value="<?php echo $arreglo[$i]["parcial2"] ?>" readonly /> </label> 
                <label>Semestral<input type="text" value="<?php echo $arreglo[$i]["semestral"] ?>" readonly /> </label>
                <?php } ?>
            </div>
            
            <div class="respuestas__caja--2 respuestas__media">
                <h1 class="respuestas__heading--primary margin-bottom-small margin-top-medium">Notas con Media</h1>
        <?php for ($i = 0; $i < sizeof($arreglo); $i++) { 
              $arreglo[$i]["media"] = $obj->media($arreglo, $i);
              ?>
            <label>Estudiante <input type="text" value="<?php echo  $arreglo[$i]["id"] ?>" readonly /> </label> 
            <label>Taller 1 <input type="text" value="<?php echo $arreglo[$i]["taller1"] ?>" readonly /> </label> 
            <label>Taller 2 <input type="text" value="<?php echo $arreglo[$i]["taller2"] ?>" readonly /> </label> 
            <label>Taller 3 <input type="text" value="<?php echo $arreglo[$i]["taller3"] ?>" readonly /> </label> 
            <label>Parcial 1 <input type="text" value="<?php echo $arreglo[$i]["parcial1"] ?>" readonly /> </label> 
            <label>Parcial 2 <input type="text" value="<?php echo $arreglo[$i]["parcial2"] ?>" readonly /> </label> 
            <label>Media <input type="text" value="<?php echo $arreglo[$i]["media"] ?>" readonly /> </label> 
        <?php }  
            $media71 = $obj->media2($arreglo);?>
            <h2 class="heading__secondary center-text margin-bottom-medium margin-top-medium">La media de todas las notas menores a 71 es: <?php echo $media71 ?></h2>
        </div>

    </div>


<?php
    pie();
} else {
    mostrarArreglo();
    ingrese();
    pie();
}

?>
