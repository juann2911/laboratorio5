    <?php
        include("header.php");

        if (!isset($_SESSION['user'])) {
            header("Location: index.php");
            exit;
        }    
    ?>
        <form action="resultados.php" method="POST">
        <div class="forms">
            <div class="label">
                <h3>Formulario:</h3>
            </div>
            <div class="div-form">
                <div class="texto-form">
                    <label for="nombre">Nombre</label> 
                    <input type="text" id="nombre" name="nombre" required autocomplete="off">
                </div>
                
                <div class="texto-form">   
                    <label for="ci">C.I (sin guion, ni puntos)</label> 
                    <input type="number" id="ci" name="ci" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="localidad">Localidad</label> 
                    <input type="text" id="localidad" name="localidad" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="direccion">Direccion</label> 
                    <input type="text" id="direccion" name="direccion" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="telefono">Telefono</label> 
                    <input type="number" id="telefono" name="telefono" required autocomplete="off" maxlength="9"> 
                </div>

                <div class="texto-form">   
                    <label for="email">E-mail</label> 
                    <input type="email" id="email" name="email" required pattern=".*@.*" autocomplete="off">
                </div>
            </div>

            <div class="label">
                <h3>Notas:</h3>
            </div>
            <div class="div-notas">
                <div class="texto-form">  
                    <label for="matematicas">Matematicas</label> 
                    <input type="number" id="matematicas" name="nota1" required autocomplete="off">
                </div>
                
                <div class="texto-form">   
                    <label for="programacion">Programacion</label> 
                    <input type="number" id="programacion" name="nota2" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="diseño-web">Diseño web</label> 
                    <input type="number" id="diseño-web" name="nota3" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="ingles">Ingles</label> 
                    <input type="number" id="ingles" name="nota4" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="filosofia">Filosofia</Li></label> 
                    <input type="number" id="filosofia" name="nota5" required autocomplete="off"> 
                </div>
            <div class="texto-form">   
                    <label for="bd">Base de datos</label> 
                    <input type="number" id="bd" name="nota6" required autocomplete="off"> 
                </div>
                <div class="texto-form">
                    <label for="formacion-empresarial">Formacion Empresarial</label> 
                    <input type="number" id="formacion-empresarial" name="nota7" required autocomplete="off">
                </div>
                
                <div class="texto-form">   
                    <label for="ADA">ADA</label> 
                    <input type="number" id="ADA" name="nota8" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="sistemas-operativos">Sistemas Operativos</label> 
                    <input type="number" id="sistemas-operativos" name="nota9" required autocomplete="off"> 
                </div>

                <div class="texto-form">   
                    <label for="gestion-proyecto">Gestion de Proyecto</label> 
                    <input type="number" id="gestion-proyecto" name="nota10" required autocomplete="off"> 
                </div>
            </div>    
            
        </div>
            <div class="enviar">
                <button  type="submit" name="calcular" class="send-button" >Enviar</button>
            </div>
        </form>

    <?php
    include("footer.php");
    ?>