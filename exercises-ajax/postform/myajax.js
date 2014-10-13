function getResponse() {
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            document.getElementById("status").innerHTML = result;
        }
    };
    var fn = document.getElementById("first_name").value;
    var ln = document.getElementById("last_name").value;
    var vars = "first_name=" + fn + "&last_name=" + ln;

    /* sending the request using GET */
    //xhr.open("GET", "signup.php?" + vars, true);
    //xhr.send(null);

    /* sending the request using POST */
    xhr.open("POST", "signup.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(vars);

    /* display loading bar */
    document.getElementById("status").innerHTML = "<img src='loading.gif' />";
}
