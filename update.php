<?php 

	if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['author'])) 
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$author = $_POST['author'];

		include 'model.php';

		$model = new Model();

		if ($model->update($id, $name, $author)) 
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