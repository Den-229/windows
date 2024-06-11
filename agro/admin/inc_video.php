<?php 
                                     
                                     parse_str( parse_url( $titre, PHP_URL_QUERY ), $decomposer_url ); 
                                     if(isset($decomposer_url['v'])) {
                                     $data = file_get_contents("https://www.googleapis.com/youtube/v3/videos?key=AIzaSyBWzQ0wkvNWWQoajwJ5cujSSzQkq0ZLvrI&part=snippet&id=".$decomposer_url['v']);
                                     $json = json_decode($data);
                                      $ImageVideo = $json->items[0]->snippet->thumbnails->high->url;
                                      $TitreVideo = $json->items[0]->snippet->localized->title;
									  
									  $TitreVideo = debutchaine2($TitreVideo, 18, ""); 
                                       
									 
                                     }
                                     
?>