<?php
function ingrese()
{
?>

    <div class="form">
        <h1 class="form__heading"> Notas de la clase</h1>
        <form action="index.php" method="post">
            <div class="form__nota">
                <h2 class="heading__secondary">¿Cambiará alguna nota?</h2>
                <div class="form__nota--formulario">
                    <div class="form__nota--formulario-group">
                        <label for="si">Sí, cambiaré una</label>
                        <input type="radio" id="si" value="1" name="m" checked autofocus>
                    </div>
                    <div class="form__nota--formulario-group">
                        <label for="no">No, no cambiaré</label>
                        <input type="radio" id="no" value="2" name="m">
                    </div>
                </div>
                <p class="nota-margen">Aviso: En caso de seleccionar la opción de no cambiar, no se tomaran en cuenta los siguientes valores.</p>
            </div>
            <div class="form__valores">
                <div class="form__valores--persona">
                    <h2 class="heading__secondary">Escriba el ID de la persona</h2>
                    <input placeholder="Ingrese ID" type="text" name="1" value="" required><br></>
                </div>
                <h2 class="heading__secondary">Seleccione la actividad</h2>
                <div class="form__valores--formulario">
                    <div class="form__valores--formulario-group">
                        <input type="radio" id="taller1" value="1" name="hm">
                        <label for="taller1">Taller 1</label>
                    </div>
                    <div class="form__valores--formulario-group">
                        <input type="radio" id="taller2" value="2" name="hm">
                        <label for="taller2">Taller 2</label>
                    </div>
                    <div class="form__valores--formulario-group">
                        <input type="radio" id="taller3" value="3" name="hm">
                        <label for="taller3">Taller 3</label>
                    </div>
                    <div class="form__valores--formulario-group">
                        <input type="radio" id="parcial1" value="4" name="hm">
                        <label for="parcial1">Parcial 1</label>
                    </div>
                    <div class="form__valores--formulario-group">
                        <input type="radio" id="parcial2" value="5" name="hm">
                        <label for="parcial2">Parcial 2</label>
                    </div>
                    <div class="form__valores--formulario-group">
                        <input type="radio" id="semestral" value="6" name="hm" checked>
                        <label for="semestral">Semestral</label>
                    </div>
                </div>
                </div>
                <div class="form__ingresar-nota">
                    <h2 class="heading__secondary">Ingrese la nueva nota: <input placeholder="Ejemplo 96" required type="number" name="3" value=""> </h2>
                </div>
                <button class="form__boton" name="cambio" type="submit" text="Envíar">
                Enviar
               </button>
        </form>
    </div>

<?php } ?>