$(document).ready(function() {
        $.ajax({
            type : "POST",
            url: '../backend/controllers/testController.php',
            dataType: "json",
            success: function(data) {
                console.log(data['test1']);
            }
        });
    
});

