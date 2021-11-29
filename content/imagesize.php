<form method="post" action="">
  <select name="images">
    <option value="">Vali pilt</option>
    <?php 
		$catalog= 'images';
        $location=opendir($catalog);
        $images=[];
		while($item = readdir($location)){
			if($item!='.' && $item!='..'){
                $images[]=$item;
				echo "<option value='$item'>$item</option>\n";
			}
        }
        if(sizeof($images)>0){
            $img=$images[rand(0, count($images))];
                echo "<option value='$img'>Random</option>\n";
        }
            else {
                echo "<option value=''>Click to select</option>\n";

            }
        
	?>
  </select>
  <input type="submit" value="Vaata">
</form>


<form method="post" id="pictures_all_images">
<input type="text" name="column_count" placeholder="Veergude arv">
<button type="submit" name="show_images">Näita pildi</button>
</form>


<?php

if(isset($_POST['show_images']) && $_POST['column_count']>0)
{
    $rows=count($images) / $_POST['column_count'];
    $findMargins = 10 * ($_POST['column_count']-1);
    $divWidth=800;
    $findImgWidth = floor($divWidth/ $_POST['column_count']);
    
    $numItem=0;
    echo '<div>';

    for ($j = 0; $j < $_POST['column_count']; $j++) {
        echo '<ul>';
            
                if($numItem < count($images)) {
                    $img=customImageInfo($images[$numItem], 'images/', $findImgWidth, 60);
                    echo "<li>";
                    echo '<img src="'.$catalog.'/'.$img['image'].'" width="'.$img['new_width'].'" alt="">';
                    echo "</li>";
                    $numItem+=1;
                }
        }   echo '</ul>';
    
}  
?>

<?php

if(!empty($_POST['images'])){
	$img = customImageInfo($_POST['images'], 'images/', 100, 90);

    
	echo '<h3>Originaal pildi andmed</h3>';
	echo "Laius: ".$img['original_width']."<br>";
	echo "Kõrgus: ".$img['original_height']."<br>";
    echo "Formaat: ".$img['original_format']."<br>";
    echo "Failityyp: ".$img['original_type']."<br>";
	
	echo '<h3>Uue pildi andmed: </h3>';
	echo "Arvutamse suhe: ".$img['ratio']." <br>";
	echo "Laius: ".$img['new_width']."<br>";
	echo "Kõrgus: ".$img['new_height']."<br>";
	echo '<img width="'.$img['new_height'].'" src="'.$img['img_address'].'" alt=""><br>';
}
?>


</form>

<?php 
function customImageInfo($img, $path, $maxWidth, $maxHeight) { 
    $result = [ 
        'image' => $img, 
        'img_path' => $path, 
    ]; 
    $result['img_address'] = $path . $result['image']; 
    $image_details = getimagesize($result['img_address']); 

    $result['original_width'] = $image_details[0]; 
    $result['original_height'] = $image_details[1]; 
    $result['original_format'] = $image_details[2]; 
    $result['original_type'] = $image_details['mime']; 

    $max_width = $maxWidth; 
    $max_height = $maxHeight; 

    // find the ratio 
    if ($result['original_width'] <= $max_width && $result['original_height'] <= $max_height) { 
        $result['ratio'] = 1; 
    } elseif ($result['original_width'] > $result['original_height']) { 
        $result['ratio'] = $max_width / $result['original_width']; 
    } else { 
        $result['ratio'] = $max_height / $result['original_height']; 
    } 

    $result['new_width'] = round($result['original_width'] * $result['ratio']); 
    $result['new_height'] = round($result['original_height'] * $result['ratio']); 

    return $result; 
} 
?>

