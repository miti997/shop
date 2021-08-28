$(document).ready(function() {
    ajaxCallIndex()
});

function ajaxCallIndex() {
    $.ajax({
        type : "POST",
        url : '../../core/phphandler.php',
        data : {
            'class' : "users",
            'method' : "index",
            'parameters' : {
                'test1' : 'a',
                'test2' : 'b',
            }
        },
        dataType : "json",
        success: function(data) {
            console.log(data);
        }
    });
}

