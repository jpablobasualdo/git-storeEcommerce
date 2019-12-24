<?php

include "../include/init.php";

echo getIniCabecera();
echo menu::getMenu();
echo getFinCabecera();


$v_sesion = "";
$v_sesion = "

        <body>
        
        <form class='modal-content animate' action='logica/loguear.php' method='POST'>
                     
            <div class='container'>
                <label for='uname'><b>Email</b></label>
                <input type='text' placeholder='Ingrese Email' name='email' required>

                <label for='psw'><b>Contraseña</b></label>
                <input type='password' placeholder='Ingrese Contraseña' name='clave' required>
                    
                <button type='submit'>Login</button>
                <label>
                    <input type='checkbox' checked='checked' name='remember'> Remember me
                </label>
            </div>

            <div class='container' style='background-color:#f1f1f1'>
                <a href='index.php' class='button'>Cancelar</a>
                <span class='psw'>olvidaste tu <a href='#'>password?</a></span>
            </div>
        </form>
        </div>

        </body>

        ";

        echo $v_sesion;

        echo getFooter();