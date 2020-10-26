$(document).ready(function() {
    $('#commentClick').click(function() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const  comment = document.getElementById('comment').value;
        const id = document.getElementById('id').value;
        $.ajax({
            type: "POST",
            url:  'App/Ajax/comment.ajax.php',
            data: {
                id : id,
                name : name,
                email : email,
                comment : comment
            },success: function(response) {
                const jsonData = response;
                alert(jsonData);
            },error: function (){
                alert("Error");
            }
        });
    });
});