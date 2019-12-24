<?php

class menu {

    public $descripcion;
    public $usuario;
    public $url;


    function getMenu(){

        $con = conectar();

        $datos = $con->query("select * from menu where estado <> 1 order by orden, padre");

        if ($datos->num_rows > 0){
            //comienel menu
            $menuHTML = " <div class='col-3 col-lg-9 col-xl-8 m-auto'>
                        <div class='main-menu-wrap'>
                            <nav id='mainmenu'>
                                <ul>";

            while($row = $datos->fetch_assoc()) {
                $v_url = $row['url'];
                $v_desc = $row['descripcion'];

                $menuHTML .= "<li><a href=".$v_url.">".$v_desc."</a></li>";
                
   
            } 

            $menuHTML .= "           </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Navigation Area End -->
                        ";

        }else {
                echo "no existe menú";
            }

            return $menuHTML;
    }
}