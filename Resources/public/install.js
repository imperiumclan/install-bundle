$(document).ready(function(){

    
    setPortFromDatabase($('#database_type').val());
    $('#database_type').change(function(){

        setPortFromDatabase($(this).val());


    });

    function setPortFromDatabase(database)
    {
        switch(database)
        {
            case 'pgsql': $('#database_port').val(5432);break;
            case 'mysql': $('#database_port').val(386);break;
            case 'mongo': $('#database_port').val(8080);break;
        }
    }



});