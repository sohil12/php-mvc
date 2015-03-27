<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['submit']))
		{	
			$data1 = $this->model->getentiretable();
			include 'view/view.php';			
		}
		else
		{
			$data1 = $this->model->filter($_GET['name'],$_GET['country']);
			include 'view/view.php';	
		}
	}
}

?>