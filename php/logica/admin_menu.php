<?php

class menu {

    public $descripcion;
    public $usuario;
    public $url;


    function getMenu(){
        include "../../include/config.php";
        $con = conectar();

        $datos = $con->query("select * from menu_admin where estado =0 and padre=0 order by orden, padre");

        if ($datos->num_rows > 0){
            //comienel menu
            $menuHTML = " <div class='col-3 col-lg-9 col-xl-8 m-auto'>
                        <div class='main-menu-wrap'>
                            <nav id='mainmenu'>
                                <ul>";

            while($row = $datos->fetch_assoc()) {
                $v_url = $row['url'];
                $v_desc = $row['descripcion'];
                $v_id = $row['id'];

                $hijos = $con->query("select * from menu_admin where estado =0 and padre=".$v_id."  order by orden");
                
                if ($hijos->num_rows > 0){
                    $menuHTML .= "<li class='dropdown-show'><a href=".$v_url.">".$v_desc."</a>";
                    $menuHTML.="<ul class='dropdown-nav sub-dropdown'>";

                    while($rows = $hijos->fetch_assoc()) {
                        $v_h_url= $rows['url'];
                        $v_h_desc = $rows['descripcion'];
                        $v_h_id = $rows['id'];

                        $menuHTML .= "<li><a href=".$v_h_url.">".$v_h_desc."</a></li>";
                    }
                    $menuHTML.="</ul>";
                } else {
                    $menuHTML .= "<li ><a href=".$v_url.">".$v_desc."</a>";
                }
                $menuHTML.="</li>";
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