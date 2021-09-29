$(document).ready(function() {
    ajaxCallIndex()
});

function ajaxCallIndex() {
    $.ajax({
        type : "GET",
        url : '/users/index',       
        dataType : "json",
        success: function(data) {
            $('#results').append(data);
        }
    });
}

