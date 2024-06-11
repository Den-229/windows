
                                        <?php
                                        /* include "admin/inc_con_bd_bis.php";
                                        var_dump($_FILES);
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
                                                            echo "<div class='container'><div class='alert alert-success text-center'>Modification éffectuée avec succès!</div></div>";
												}
												}
												}
											} */
										?>
                                        <!-- <kkiapay-widget sandbox="true" amount= "1" key="093831202cd011ecb30d13c7d805295f" callback="#" /> -->
                                        <kkiapay-widget sandbox="true" paymentmethod="momo" theme="green" amount="1" key="00cc5830329211eebefc2f0d3b6f867e" callback="https://kkiapay-redirect.com" />
                                        <script src="https://cdn.kkiapay.me/k.js"></script>