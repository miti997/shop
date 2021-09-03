$(document).ready(function() {
    ajaxCallIndex()
});

function ajaxCallIndex() {
    $.ajax({
        type : "POST",
        url : '/users/index',       
        dataType : "json",
        success: function(data) {
            $('#results').append(data);
        }
    });
}

