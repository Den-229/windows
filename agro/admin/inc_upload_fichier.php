<?php                                                   function filter($fichier_uploade){
							$search = array ('@[éèêëÊË]@i','@[áãàâäÂÄ]@i','@[ìíiiîïÎÏ]@i','@[úûùüÛÜ]@i','@[òóõôöÔÖ]@i','@[ñÑ]@i','@[ýÿÝ]@i','@[ç]@i','@[\']@i','@[ ]@i');
							$remplace = array ('e','a','i','u','o','n','y','c','_','_');
							return preg_replace($search, $remplace, $fichier_uploade);
								
											   }
 
							 //	---------------------------------------------
									//	UPLOAD DE FICHIER
									//	-------------------------------------------
										if(isset($_FILES['Im']['name']))
										{ 
											
												$table = array('1','0','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
												$chaine_table = array_rand($table, 3);
												
												$date_upload = date("Y_m_d");
												$heure_upload = date("h_i_s");
												$session_id = session_id();
												$dossier = "../images/upload/";
												
												$fichier_uploade = basename($_FILES['Im']['name'][0]);
												$fichier_uploade = $date_upload.$heure_upload.$chaine_table['0'].$chaine_table['1'].$chaine_table['2']."_".$fichier_uploade;
												
												$extension_uploade = strrchr("$fichier_uploade",".");
												$extension_uploade = strtolower($extension_uploade);
												$extension_autorise = array(".xsl",".xslx",".pptx",".zip",".rar",".pdf", ".ppt", ".docx", ".doc");
											
													if(!in_array($extension_uploade,$extension_autorise))
													 {$erreur = "Extention non autorisée. Veuillez selectionnez un fichier Word";
													 }else{
															$taille_uploade = filesize($_FILES['Im']['tmp_name'][0]);
															$taille_autorise = 100000000;
															if($taille_uploade>$taille_autorise) 
															{$erreur = "Le fichier est trop lourd";
															}else{
																 
																  $fichier_uploade = filter($fichier_uploade);
																  move_uploaded_file($_FILES['Im']['tmp_name'][0],$dossier.$fichier_uploade);
																  $tab_lien_im[0] = "images/upload/$fichier_uploade";
												
																  }
												
														}
											  }
										
								   
		
