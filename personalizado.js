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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function(){

    $('#campo1').keyup(function() {

        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: 'proc_pesq_user.php',
                method: 'POST',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado1').empty().html(data);
                }
            });

            return false;
        });

        $('form').trigger('submit');

    });
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* $(document).ready(function(){

    $('#campo2').keyup(function() {

        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: 'proc_pesq_user.php',
                method: 'POST',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado2').empty().html(data);
                }
            });

            return false;
        });

        $('form').trigger('submit');

    });
}); */