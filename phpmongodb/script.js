jQuery(document).ready(function($) {
    $('#code').submit( function(){
        var data = $(this).serialize();
        var source = $('textarea#source').val();
        
        if( source == '' ) {
            alert( 'No source code provided in the area.');
            return false;
        }
        
        $(this).append('<div class="loading">Processing...</div>');

        $(this).append('<div class="loading">output...</div>');

        
        
        });
        
        return false;
    });
});
