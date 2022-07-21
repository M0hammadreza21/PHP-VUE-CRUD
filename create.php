<?php 

	if (isset($_POST['name']) && isset($_POST['author'])) 
	{
		$name = $_POST['name'];
		$author = $_POST['author'];

		include 'model.php';

		$model = new Model();

		if ($model->insert($name, $author)) 
		{
			$data = array('result' => 'success');
		}
		else
		{
			$data = array('result' => 'error');
		}

		echo json_encode($data);
	}

 ?>