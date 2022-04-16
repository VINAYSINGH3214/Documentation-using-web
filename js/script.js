$(function(){
    $('#form').submit(function(e){

        // Stop the form actually posting
        e.preventDefault();

        // Send the request
        $.post('contact.php', {
            name: $('#name').val(),
            email: $('#email').val(),
			subject: $('#subject').val(),
          
        }, function(d){
            alert(d);
        });
    });
});
