<?php
  //Some Settings
$BigImageMaxSize 		= array(1500); //Image Maximum height or width
$DestinationDirectory	= '../images/upload/'; //Upload Directory ends with / (slash)
$Quality 				= 80;

//ini_set('memory_limit', '-1'); // maximum memory!

foreach($_FILES as $file)
{
    if(!empty($file['name']))
    {
	// some information about image we need later.
	$ImageName 		= $file['name'];
	$ImageSize 		= $file['size'];
	$TempSrc	 	= $file['tmp_name'];
	$ImageType	 	= $file['type'];
	
	
	if (is_array($ImageName)) 
	{
		$c = count($ImageName);
		
		
		for ($i=0; $i < $c; $i++)
		{
			$processImage			= true;	
			
			
			if(isset($ImageName[$i]) && is_uploaded_file($TempSrc[$i]) && strlen($ImageName[$i])>0)
			{
					
				//echo '<div class="error">Error occurred while trying to process <strong>'.$ImageName[$i].'</strong>, may be file too big!</div>'; //output error
			
				//Validate file + create image from uploaded file.
				switch(strtolower($ImageType[$i]))
				{
					case 'image/png':
						$CreatedImage = imagecreatefrompng($TempSrc[$i]);
						break;
					case 'image/gif':
						$CreatedImage = imagecreatefromgif($TempSrc[$i]);
						break;
					case 'image/jpeg':
					case 'image/pjpeg':
						$CreatedImage = imagecreatefromjpeg($TempSrc[$i]);
						break;
					default:
						$processImage = false; //image format is not supported!
				}
				//get Image Size
				list($CurWidth,$CurHeight)=getimagesize($TempSrc[$i]);
	
				//Get file extension from Image name, this will be re-added after random name
				$ImageExt = substr($ImageName[$i], strrpos($ImageName[$i], '.'));
				$ImageExt = str_replace('.','',$ImageExt);
		
				//Resize image to our Specified Size by calling resizeImage function.
				if($processImage && is_array($BigImageMaxSize)) 
				  {
					  $dc = sizeof($BigImageMaxSize);
					  for($a=0; $a<$dc; $a++)
					  {$RandomNumber = rand(0, 9999999999);  // We need same random name for both files.
					  $msecond = date("i_s");
					   $NewImageName = $msecond.$RandomNumber.'.'.$ImageExt;
					   $DestRandImageName 			= $DestinationDirectory.$NewImageName; //Name for Big Image
					   resizeImage($CurWidth,$CurHeight,$BigImageMaxSize[$a],$DestRandImageName,$CreatedImage,$Quality,$ImageType[$i]);  
					    $tab_lien_im[] = str_replace("../", "",$DestRandImageName);
                                            
					  }
						
						
	
				}else{
					echo '<div class="error">Error occurred while trying to process <strong>'.$ImageName[$i].'</strong>! Please check if file is supported</div>'; //output error
				}
				
			}
			
		}
	
		}
	
}		
	
}
	  


// This function will proportionally resize image 
	function resizeImage($CurWidth,$CurHeight,$MaxSize,$DestFolder,$SrcImage,$Quality,$ImageType)
	{
		//Check Image size is not 0
		if($CurWidth <= 0 || $CurHeight <= 0) 
		{
			return false;
		}
		
		//Construct a proportional size of new image
		$ImageScale      	= min($MaxSize/$CurWidth, $MaxSize/$CurHeight); 
		$NewWidth  			= ceil($ImageScale*$CurWidth);
		$NewHeight 			= ceil($ImageScale*$CurHeight);
		
		if($CurWidth < $NewWidth || $CurHeight < $NewHeight)
		{
			$NewWidth = $CurWidth;
			$NewHeight = $CurHeight;
		}
		$NewCanves 	= imagecreatetruecolor($NewWidth, $NewHeight);
		// Resize Image
		if(imagecopyresampled($NewCanves, $SrcImage,0, 0, 0, 0, $NewWidth, $NewHeight, $CurWidth, $CurHeight))
		{
			switch(strtolower($ImageType))
			{
				case 'image/png':
					imagepng($NewCanves,$DestFolder);
					break;
				case 'image/gif':
					imagegif($NewCanves,$DestFolder);
					break;			
				case 'image/jpeg':
				case 'image/pjpeg':
					imagejpeg($NewCanves,$DestFolder,$Quality);
					break;
				default:
					return false;
			}
		if(is_resource($NewCanves)) { 
		  imagedestroy($NewCanves); 
		} 
		return true;
		}
 }


// COMPLETER LE TABLEAU $tab_lien_im[] SI SES VALEURS SONT INFERIEUR A 15
/*if(sizeof($tab_lien_im)<15)
{   for($e=sizeof($tab_lien_im);$e<15; $e++)
	{$tab_lien_im[] = "''";
	}
}
*/



	 
	 
/*	
	 for($b=0; $b<=4; $b++)
		{ if(isset($Im))
		  {
			  if(!empty($Im[$b]))
			  {
				 $lien_im = "'".mysql_real_escape_string($Im[$b])."'";
				 
			  }
			  else
			  {$lien_im = 0;
			  }
			$tab_lien_im[] = $lien_im;
		  }
		}
*/
?>
