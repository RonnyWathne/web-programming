function getPlace(postcode) {
    $.get("getplace.php?postcode=" + postcode, function(data){
        $("#place").val(data);
    });   
}
