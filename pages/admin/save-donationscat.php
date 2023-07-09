<?php



if($_POST['cat'] != '' && $_POST['serial'] != ''){
	$link =  $_POST['cat'];
	echo $link;
	if(file_exists($link)){

		$current_data = file_get_contents($link);
		$array_data = json_decode($current_data, true);
		if($array_data==NULL){ $lenj = 0;}
		else{$lenj = count($array_data) -1;}
		
		$news = $_POST['serial'];

		// Image link code
		$k = 0;
		$in = $_POST['image'];
		$co = ""; $ou = "https://drive.google.com/uc?export=view&id=";
		for($i = 0 ; $i<strlen($in)-1; $i++){
			if($k == 1 && $in[$i]=='/'){
				$k=0;
			}
			if($k==1){
				$co .=$in[$i];
			}
		   
			if($k==0 && $in[$i]=='d' && $in[$i+1] == '/'){
				$k=1;
				$i++;
				
			}
	
		}
		$ou .= $co;
		
		
		$new_data = array(
								'image' => $ou,
								'name' => $_POST['name'],
								'amount' => $_POST['amount'],
								'purpose' => $_POST['purpose'],
								'date' => $_POST['date'],
								'serial' => $_POST['serial']
							);
		

		$array_data[] = $new_data;

		if($lenj >= $news){
			$sav = $array_data[$lenj+1];
			for($i = $lenj; $i>=$news-1 ; $i--){
				
				$array_data[$i+1] = $array_data[$i];
				$array_data[$i+1]['serial'] = "".$i+2; 
			}
			$array_data[$news-1] = $sav;
			$array_data[$news-1]['serial'] = "".$news; 
			//echo "<h1>Hi</h1>";

		}
		$json_data = json_encode($array_data,JSON_PRETTY_PRINT);

		if(file_put_contents($link, $json_data))
		{
			echo "<h3>Successfully saved data in JSON file.</h3>";
			echo "<a href="."/dtualumni/pages/admin.php".">Get back to admin page</a>";
		}else{
			echo "<h3>UnSuccessfully saved data in JSON file.</h3>";
		}
	}else{
		echo "<h3>JSON file not exist.</h3>";
	}
}else{
	echo "<h3>All form fields are required.</h3>";
}

?>
