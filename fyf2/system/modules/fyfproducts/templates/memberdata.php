

<?php
echo "<script type='text/javascript'>";


echo "var locations = new Array();";



		$i = 0;
		
$objUsers = \MemberModel::findAll();  
$models = $objUsers->getModels();

foreach($models as $singleModel) {
	
	echo "var entity".$i."= {id:".$singleModel->id.", street:'".$singleModel->street."', email:'".$singleModel->email."', city:'".$singleModel->city."', company:'".$singleModel->company."', postal:'".$singleModel->postal."'};";
	
	echo "locations[".$i."]= entity".$i.";";
	$i++;
}

echo "</script>";
?>