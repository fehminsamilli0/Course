$(document).ready(function(){
    $('#MyForm').submit(function(){
        var data = $(this).serialize();

        $.ajax({
            url: "ajax.php",
            type: "POST",
            data: data,
            success: function( data )
            {
              $("#cvb").html(data);
              document.getElementById("MyForm").reset();
            },
            error: function(){
                alert('ERROR');
            }
        });

        return false;
    });
});

$(document).ready(function(){
    $('#axtar').keyup(function(){

        var data = $(this).serialize();
        console.log(data);
        $.ajax({
            url: "search.php",
            type: "POST",
            data: data,
            success: function( data )
            {
                $("#tbl").html(data);
            },
            error: function(){
                alert('ERROR');
            }
        });

        return false;
    });
});
