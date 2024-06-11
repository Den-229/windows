<?php
    $logid01 = $_SESSION['log_id'];
    $logrole01 = $_SESSION['log_role'];
    $sql01 = $cdr->query("SELECT * FROM users WHERE iduser='$logid01'");
    if ($sql01->rowCount() > 0) {
        $res01 = $sql01->fetch(PDO::FETCH_ASSOC);
        $id01 = $res01['iduser'];
        $nom01 = $res01['nom'];
        $prenom01 = $res01['prenom'];
        $email01 = $res01['email'];
        $photo01 = $res01['photo'];
    }
?>
<div class="modal fade" id="usermodal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier vos informations</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                                        <?php
                                            include "admin/inc_con_bd_bis.php";
											if ($_SERVER["REQUEST_METHOD"] == "POST") {
												if (isset($_POST['edit'])) {
													$iduser = trim(htmlspecialchars($_POST['iduser']));
													$nom = trim(htmlspecialchars($_POST['nom']));
													$prenoms = trim(htmlspecialchars($_POST['prenom']));
													$email = trim(htmlspecialchars($_POST['email']));
                                                    $role = trim(htmlspecialchars($_POST['role']));
													if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
                                                        // Chemin de destination pour sauvegarder le fichier
                                                        $dossier_destination = "assets/img/cv/";
                                                
                                                        // Récupération du nom et de l'extension du fichier
                                                        $nom_fichier = basename($_FILES["photo"]["name"]);
                                                        $chemin_destination = $dossier_destination . $nom_fichier;
                                                        // Déplacement du fichier téléchargé vers le dossier de destination
                                                        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $chemin_destination)) {
                                                            $sql02 = $cdr->prepare("UPDATE users SET nom = :nom, prenom = :prenoms, email = :email, role = :role, photo = :photo WHERE iduser = :iduser");
                                                            $sql02->bindParam(':nom', $nom);
                                                            $sql02->bindParam(':prenoms', $prenoms);
                                                            $sql02->bindParam(':email', $email);
                                                            $sql02->bindParam(':photo', $chemin_destination);
                                                            $sql02->bindParam(':role', $role);
                                                            $sql02->bindParam(':iduser', $iduser);
                                                            // Exécution de la requête
                                                            $sql02->execute();
                                                            unlink($photo01);
                                                            echo "<script>alert('Modification éffectué avec succès! Veuillez vous connecter pour actualiser votre profil');window.location.href='sign-in.php'</script>";
												}
												}else {
                                                            $sql02 = $cdr->prepare("UPDATE users SET nom = :nom, prenom = :prenoms, email = :email, role = :role WHERE iduser = :iduser");
                                                            $sql02->bindParam(':nom', $nom);
                                                            $sql02->bindParam(':prenoms', $prenoms);
                                                            $sql02->bindParam(':email', $email);
                                                            $sql02->bindParam(':role', $role);
                                                            $sql02->bindParam(':iduser', $iduser);
                                                            // Exécution de la requête
                                                            $sql02->execute();
                                                            echo "<script>alert('Modification éffectué avec succès! Veuillez vous connecter pour actualiser votre profil');window.location.href='sign-in.php'</script>";
                                                }
												}
											}
										?>
                                        
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Champ caché pour l'id -->
                            <input type="hidden" name="iduser" value="<?= $id01 ?>" >
                            <!-- username -->
                            <div class="form-group">
                                <label for="">Nom:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><span height="1.6em"><i class="fa fa-user text-white"></i></span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Entrez votre nom" autocomplete="off" value="<?= $nom01 ?>" required="required" id="nom" name="nom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénoms:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><span height="1.6em"><i class="fa fa-user text-white"></i></span></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Entrez votre prénom" autocomplete="off" value="<?= $prenom01 ?>" required="required" id="prenom" name="prenom">
                                </div>
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><span height="1.6em"><i class="fa fa-envelope text-white"></i></span></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Entrez votre Email" autocomplete="off" value="<?= $email01 ?>" required="required" id="email" name="email">
                                </div>
                            </div>
                            <!-- Photo -->
                            <div class="form-group">
                                <label for="photo">Photo:</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="photo" id="photo">
                                </div>
                            </div>
                            <!-- Role -->
                            <div class="form-group">
                                <label for="role">Role:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><span height="1.6em"><i class="fa fa-users text-white"></i></span></span>
                                    </div>
                                    <select class="form-control" name="role" id="role" disabled>
                                    <?php 
                            switch ($logrole01) {
                              case 'Acheteur':
                           ?>
                           <option value="Acheteur">Acheteur</option>
                           <?php 
                                 break;
                              case 'Formateur':
                           ?>
                           <option value="Formateur">Formateur</option>
                           <?php 
                                 break;
                              case 'Agriculteur':
                           ?>
                           <option value="Agriculteur">Agriculteur</option>
                           <?php 
                                 break;
                              
                              default:
                              ?>
                              <option value="" selected>Choisir role...</option>
                           <option value="Formateur">Formateur</option>
                           <option value="Agriculteur">Agriculteur</option>
                           <option value="Acheteur">Acheteur</option>
                           <?php 

                                 break;
                            }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-dark" name="edit">Modifier</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>