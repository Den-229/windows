function envoyerform(){

    var civilite = $("#civilite").val();
    var nom = $("#nom").val();
    var pays = $("#pays").val();
    var ville = $("#ville").val();
    var quartier = $("#quartier").val();
    var telephone = $("#telephone").val();
    var email = $("#email").val();
    var bien = $("#bien").val();
    var message = $("#message").val();
    var d = "civilite="+civilite+"&nom="+nom+"&pays="+pays+"&ville="+ville+"&quartier="+quartier+"&telephone="+telephone+"&email="+email+"&bien="+bien+"&message="+message;
    var erreur = 0;
    

    
    $(document).ready(
                function()
                {
                	$(".en_cours").html("<samp style='color:#006600'>* Envoi du message en cours... <br/></samp>");
                	$.ajax({
                        url: "admin/ajax_envoyer2.php",
                        type: "POST",
                        data: d,
                        dataType: "html",
                        
                        success: function(donnee)
                                 { var resultat = donnee.split("***");
                                     $(".en_cours").html("");
                                     if(resultat[0] != 1)
                                     { $('#nom_campagne').html(resultat[0]);
                                        $("#e1").html("");

                                     }
                                     else
                                     {$("#e1").html("Vous devez renseigner tous les champs avec des informations valides.");
                                     }
                                 }


                        });

                }    












            );
    
   }

