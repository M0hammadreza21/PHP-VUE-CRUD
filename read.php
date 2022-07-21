<?php 

	include 'model.php';

	$model = new Model();

	$rows = $model->fetchAll();

	$data = array('rows' => $rows);

	echo json_encode($data);

?>