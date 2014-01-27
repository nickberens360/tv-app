<?php

	function loadSlide($slideNum){
		$dbhandle=mysqli_connect("192.168.1.253","tv-app","tv-app","tv-app");
		$query = "SELECT src, Type_ID
			FROM frame_slide_lookup
			LEFT JOIN slides ON Slides.ID = frame_slide_lookup.Slide_ID
			WHERE frame_slide_lookup.Frame_ID = $slideNum";
		
		$result = mysqli_query($dbhandle, $query);
		if(mysqli_num_rows($result)>0){
			$count = 0;
			while($row = mysqli_fetch_array($result)) {
				echo '<div class=" ';
					if($count==0){
						echo 'active '; 
						$count++;
					}
					echo 'item">';
				if($row['Type_ID']==1){
					echo '<img src="img/'. $row['src'] .'" alt=""/> ';	
				}	
				else if($row['Type_ID']==2){
					echo '<iframe scrolling="no" frameborder="0" style="overflow:hidden;border:0;margin:0;padding:0;width:100%;height:100%;" src="'. $row['src'] .'"></iframe>';
				}
				else if($row['Type_ID']==4){
					echo $row['src'];
				}
				echo '</div>';
			
			}
		} 

	}

?>