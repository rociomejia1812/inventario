<?php
	function AutoloadController($controller)
    {
        //echo "<br> autoload: ".$controller."<br>";
        if(is_file('Controlador/'.$controller.'.Controller.php'))
        {
            require_once('Controlador/'.$controller.'.Controller.php');
        }
        else if(is_file('Modelo/Class.'.$controller.'.php'))
        {
            require_once('Modelo/Class.'.$controller.'.php');
        }
        else if(is_file('Librerias/Lib.'.$controller.'.php'))
        {
            require_once ('Librerias/Lib.'.$controller.'.php');

        }
        else if($controller=="Smarty")
        {
            require_once('Framework/Smarty/SmartySetup.php');
            
        }
            
        
    }
    
    spl_autoload_register('AutoloadController');
?>