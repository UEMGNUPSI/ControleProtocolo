$(document).ready(function(){

    $('#campo').keyup(function() {

        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: 'proc_pesq_user.php',
                method: 'POST',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });

            return false;
        });

        $('form').trigger('submit');

    });
});