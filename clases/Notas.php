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

