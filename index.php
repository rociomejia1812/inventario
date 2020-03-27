<?php
	require_once('AutoLoad.php');
    
    if(isset($_GET['controller']))
    {
        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }
    else
    {
        $controller="Home";
        $action="Inicio";
    }
    
    if(class_exists($controller) && method_exists($controller,$action))
    {
        $class =new $controller();
        $class->$action();
    }
    else
    {
        $error=new Error();
        $error->ErrorCarga();
    }
?>