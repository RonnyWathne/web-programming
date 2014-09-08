function checkPasswords() {
    var pw1 = document.getElementById("password1").value;
    var pw2 = document.getElementById("password2").value;
    var pw1check = document.getElementById("pw1_check");
    var pw2check = document.getElementById("pw2_check");
    

    if (pw1.length > 0) {
        if (pw1.length < 6) {
            pw1check.innerHTML = "Too short";        
        }
        else {
            pw1check.innerHTML = "";
        }
        if (pw2.length > 0 && pw1 !== pw2) {
            pw2check.innerHTML = "the two passwords don't match";
        }
        else {
            pw2check.innerHTML = "";
        }        
    }
    else {
        pw1check.innerHTML = "";
    }
    
}
