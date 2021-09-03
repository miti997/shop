$(document).ready(function() {
    ajaxCallIndex()
});

function ajaxCallIndex() {
    $.ajax({
        type : "POST",
        url : '/users/add',       
        dataType : "json",
        success: function(data) {
            $('#results').append(data);
        }
    });
}

