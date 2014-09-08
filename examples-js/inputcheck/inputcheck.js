function checkPasswords() {
    var pw1 = document.getElementById("password1").value;
    var pw2 = document.getElementById("password2").value;
    var pw1check = document.getElementById("pw1_check");
    var pw2check = document.getElementById("pw2_check");
    
    var isError = false;
    if (pw1.length > 0) {
        if (pw1.length < 6) {
            pw1check.innerHTML = "Too short";   
            isError = true;
        }
        else {
            pw1check.innerHTML = "";
        }
        if (pw2.length > 0 && pw1 !== pw2) {
            pw2check.innerHTML = "the two passwords don't match";
            isError = true;
        }
        else {
            pw2check.innerHTML = "";            
        }        
    }
    else {
        pw1check.innerHTML = "";
    }
    
    // show the submit button only if everything is ok
    var btn = document.getElementById("submitBtn");
    if (pw1.length > 0 && pw2.length > 0 && !isError) {
        btn.style.display = "";
    }
    else {
        btn.style.display = "none";
    }
    
}
