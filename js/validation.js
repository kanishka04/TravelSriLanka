function myFunction() {

    console.log('pasan kamburugamuwa');
    var name=document.getElementById("name").value;
    var comment=document.getElementById("comment").value;
    var website=document.getElementById("website").value;
    var email=document.getElementById("email").value;

    var dataString = '&name=' + name +  '&comment=' + comment +  '&website=' + website +  '&email=' + email;
        console.log('pasan kamburugamuwa');
        $.ajax({
            type: "POST",
            url: "../controller/Ellasrilanka.php",
            data: dataString,
            cache: false,
            success: function() {
                console.log('pasan kamburugamuwa');
                alert("Succesfully Registered");
                document.getElementById("form").reset();
            }
        });
}
