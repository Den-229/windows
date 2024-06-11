function togglePasswordVisibility(no) {
    if (no == 1) {
      var passwordField = document.getElementById("pas1");
                var vu = document.getElementById("vu1");
                        if (passwordField.type === "password") {
                                passwordField.type = "text";
                                vu.className= "fa-regular fa-eye";
                        } else {
                                passwordField.type = "password";
                                vu.className= "fa-regular fa-eye-slash";
                        }
    }else if(no == 2){
      var passwordField = document.getElementById("pas2");
                var vu = document.getElementById("vu2");
                        if (passwordField.type === "password") {
                                passwordField.type = "text";
                                vu.className= "fa-regular fa-eye";
                        } else {
                                passwordField.type = "password";
                                vu.className= "fa-regular fa-eye-slash";
                        }
    }else if (no == 0) {
      var passwordField = document.getElementById("pas0");
                var vu = document.getElementById("vu0");
                        if (passwordField.type === "password") {
                                passwordField.type = "text";
                                vu.className= "fa-regular fa-eye";
                        } else {
                                passwordField.type = "password";
                                vu.className= "fa-regular fa-eye-slash";
                        }    
    }
                
        }