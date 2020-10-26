$(document).ready(function() {
    $('#mailingListClick').click(function() {
        const email = document.getElementById('emailNewsLetter').value;
        $.ajax({
            type: "POST",
            url:  'App/Ajax/mailinglist.ajax.php',
            data: {
                email : email
            },success: function(response) {
                const jsonData = response;
                alert(jsonData);
            },error: function (){
                alert("Error");
            }
        });
    });
});