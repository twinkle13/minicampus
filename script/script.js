$(document).ready(function($) {
    $('#code').submit( function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var source = $('textarea#source').val();
        
        if( source == '' ) {
            alert( 'No source code provided in the area.');
            return false;
        }
$('#loading').remove();
        $('#response').html('<div class="loading" id="loading">Processing...</div>');
        $('#result123').text("Result");
        $('#responsetime').html('<div></div>');
        $('#help_me').css("background-color", "#e7e7e7");
        
        $.ajax({
            type: 'post',
            url: 'process.php',
            dataType: 'json',
            data: data + '&process=1',
            cache: false,
            success: function(response){
                $('#loading').remove();
                $('#response').show();
                if(response=="")
                    alert("empty");
                
                if (response.result.compilemessage=="") {
                    $('#response').html("<strong><center> OUTPUT :</center></strong> <br>" +response.result.stdout);
                    $('#responsetime').html("<strong><center>Compilation time :</center></strong> <br>" +response.result.time+"s");
                    $('#result123').text("Success");
                    $('#help_me').css("background-color", "green");

               
            }
            else{
                $('#response').html("<strong>Compilation error: </strong> <br><br>" +response.result.compilemessage);
                $('#result123').text("Help Me");
                $('#help_me').css("background-color", "red");
            

                        // if( response.result.message[1] == 'success' ) {
            }
                   
            }
        });
        e.preventDefault();
        
        return false;
    });
});
