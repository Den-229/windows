function envoyer(){
    var nom = $("#nom").val();
    var email = $("#emails").val();
    var objet = $("#objet").val();
    var message = $("#message").val();
    var telephone = $("#telephone").val();
    var d = "nom="+nom+"&emails="+email+"&objet="+objet+"&telephone="+telephone+"&message="+message;
    var erreur = 0;
    

    
    $(document).ready(
                function()
                {
                	$(".en_cours").html("<samp style='color:#006600'>* Envoi du message en cours... <br/></samp>");
                	$.ajax({
                        url: "admin/ajax_envoyer.php",
                        type: "POST",
                        data: d,
                        dataType: "html",
                        
                        success: function(donnee)
                                 { var resultat = donnee.split("***");
                                     $(".en_cours").html("");
                                     
                                    
                                     if(resultat[0] == 1)
                                     {$("#e1").html("<samp style='color:#990000'>Vous devez renseigner tous les champs avec des informations valides.</samp>");
                                     }
                                     else if(resultat[0] == 2)
                                     {$("#e1").html("<samp style='color:#990000'>Message non envoyé ! L'adresse mail du réceptionnaire est mal configurée.</samp>");
                                     }
                                     else 
                                     {  $('#nom_campagne').html(resultat[0]);
                                        $("#e1").html("");

                                     }


                        }
                        
                        });

                }    












            );
    
   }

