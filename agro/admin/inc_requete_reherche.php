<?php
                $reqp = $cdr->prepare("SELECT * FROM groupe_page WHERE titre LIKE '%' || :search || '%' ORDER BY id DESC");
                $reqp->bindParam(":search",$search ,PDO::PARAM_STR);
                $reqp->execute();


                $resultats = array();
                $resultats = $reqp->fetchall();



                if($limite <2) {
                  	$limite = 2;
                	}
                	
                	                
                
                $nbre_de_page = ceil(count($resultats)/$limite);

                if(isset($_GET['page']) && ctype_digit($_GET['page']))
                {  if($_GET['page']>0)
                {
                    $page = intval($_GET['page']);
                    if($page >= $nbre_de_page)
                    { $page = $nbre_de_page;
                    }
                }
                else{$page = 1;

                }

                }
                else
                {$page = 1;
                }
                $debut_comptage = ($page-1)*$limite;


                $reqp = $cdr->prepare("SELECT * FROM groupe_page WHERE titre LIKE :search ORDER BY id DESC LIMIT :debut_comptage, :affiche_par_page");
                $reqp->bindParam(":search","%".$search."%",PDO::PARAM_STR);
                $reqp->bindParam(":debut_comptage",$debut_comptage,PDO::PARAM_INT);
                $reqp->bindParam(":affiche_par_page",$limite,PDO::PARAM_INT);
                $reqp->execute();
                
                 $resultats = $reqp->fetchall();

?>