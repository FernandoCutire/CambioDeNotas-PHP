<?php
class Notas {
  private $estudiante;
  public function asignar($estudiante)
  {
    $this->estudiante = $estudiante;
  }
  // METODO DE MEDIA
  public function  media(&$estudiante, $m)
  {
    $media1 = 0;
    $media1 = ($this->estudiante[$m]["taller1"] + $this->estudiante[$m]["taller2"] + $this->estudiante[$m]["taller3"] + $this->estudiante[$m]["parcial1"] + $this->estudiante[$m]["parcial2"] + $this->estudiante[$m]["semestral"]) / 6;
    return $media1;
  }
  // METODO DE MEDIA 71
  public function  media2(&$estudiante)
  {
    $media2 = 0;
    $cont = 0;
    for ($r = 0; $r < sizeof($this->estudiante); $r++) {
      if (($this->estudiante[$r]["taller1"]) < 71) {
        $media2 = $this->estudiante[$r]["taller1"] + $media2;
        $cont = $cont + 1;
      }
      if (($this->estudiante[$r]["taller2"]) < 71) {
        $media2 = $this->estudiante[$r]["taller2"] + $media2;
        $cont = $cont + 1;
      }
      if (($this->estudiante[$r]["taller3"]) < 71) {
        $media2 = $this->estudiante[$r]["taller3"] + $media2;
        $cont = $cont + 1;
      }
      if (($this->estudiante[$r]["parcial1"]) < 71) {
        $media2 = $this->estudiante[$r]["parcial1"] + $media2;
        $cont = $cont + 1;
      }
      if (($this->estudiante[$r]["parcial2"]) < 71) {
        $media2 = $this->estudiante[$r]["parcial2"] + $media2;
        $cont = $cont + 1;
      }
      if (($this->estudiante[$r]["semestral"]) < 71) {
        $media2 = $this->estudiante[$r]["semestral"] + $media2;
        $cont = $cont + 1;
      }
    }
    $media2 = $media2 / $cont;
    return $media2;
  }
  public function traer() {
    return $this->clase;
  }
}


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

/*
$obj = new Notas();
//MODIFICAR NOTA
//modificar();
//MODIFICA NOTAS   
$hacercamb = $_REQUEST["m"];
$estcam = $_REQUEST["1"];
$asigcam = $_REQUEST["hm"];
$notcam = $_REQUEST["3"];

if ($hacercamb == 1) {
  if ($asigcam == 1) {
    $arreglo[$estcam - 1]["taller1"] = $notcam;
    echo "<br>Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Taller 1", ".<br>";
  }
  if ($asigcam == 2) {
    $arreglo[$estcam - 1]["taller2"] = $notcam;
    echo "<br>Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Taller 2", ".<br>";
  }
  if ($asigcam == 3) {
    $arreglo[$estcam - 1]["taller3"] = $notcam;
    echo "<br>Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Taller 3", ".<br>";
  }
  if ($asigcam == 4) {
    $arreglo[$estcam - 1]["parcial1"] = $notcam;
    echo "<br>Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Parcial 1", ".<br>";
  }
  if ($asigcam == 5) {
    $arreglo[$estcam - 1]["parcial2"] = $notcam;
    echo "<br>Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Parcial 2", ".<br>";
  }
  if ($asigcam == 6) {
    $arreglo[$estcam - 1]["semestral"] = $notcam;
    echo "<br>Se cambió a la nota ", $notcam, " al estudiante ", $estcam, ", asignacion ", "Semestral", ".<br>";
  }
}
echo "<br>";
echo "NOTAS:";
echo "<br>";
//ASIGNAR
$obj->asignar($arreglo);
for ($i = 0; $i < sizeof($arreglo); $i++) {
  echo "Estudiante ", 
  $arreglo[$i]["id"], 
  " [Taller 1: ", $arreglo[$i]["taller1"], 
  " Taller 2: ", $arreglo[$i]["taller2"], 
  " Taller 3: ", $arreglo[$i]["taller3"], 
  " Parcial 1: ", $arreglo[$i]["parcial1"], 
  " Parcial 2: ", $arreglo[$i]["parcial2"], 
  " Semestral: ", $arreglo[$i]["semestral"], "] <br>";
}
echo "<br>";
echo "NOTAS CON MEDIA:";
echo "<br>";
for ($i = 0; $i < sizeof($arreglo); $i++) {
  //MEDIA
  $arreglo[$i]["media"] = $obj->media($arreglo, $i);
  echo "Estudiante ", $arreglo[$i]["id"], 
  " [Taller 1: ", $arreglo[$i]["taller1"], 
  " Taller 2: ", $arreglo[$i]["taller2"], 
  " Taller 3: ",
   $arreglo[$i]["taller3"], 
   " Parcial 1: ", $arreglo[$i]["parcial1"], 
   " Parcial 2: ", $arreglo[$i]["parcial2"], 
   " Semestral: ", $arreglo[$i]["semestral"], 
   " Media: ", $arreglo[$i]["media"], "] <br>";
}
//MEDIA DE 71
$media71 = $obj->media2($arreglo);
echo "<br>";
echo "La media de todas las notas menores a 71 es:", $media71;
*/