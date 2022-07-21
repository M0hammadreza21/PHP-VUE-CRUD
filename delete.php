<?php 

	if (isset($_POST['id'])) 
	{
		$id = $_POST['id'];

		include 'model.php';

		$model = new Model();

		if ($model->delete($id)) 
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
