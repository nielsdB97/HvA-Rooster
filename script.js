$(document).ready( function() {
    // Laad de gewenste vakken in de HTML
    var request;

    $('select[name="klas"]').change( function() {
        if (request)
            request.abort();

        var klassen = $(this).val();

        request = $.ajax({
            type: 'POST',
            url: 'inc/getClasses.php',
            data: {klas: klassen}
        });

        request.done( function(data) {
            //console.log('done');
            var json = $.parseJSON(data);

            // Leeg alle vakken
            $('#V1-checkboxes').find('div').empty();
            $('#P-checkboxes').find('div').empty();

            for (var countKlassen=0; countKlassen < Object.keys(json).length; countKlassen++) {
                var current = cleanKlasnaam(klassen[countKlassen]);

                for (var countVakken=0; countVakken < json[current].checkboxes.length; countVakken++) {
                    if (current.substring(0,1) == 'V')
                        $('#V1-checkboxes').find('div').append( json[current].checkboxes[countVakken] );
                    else if (current.substring(0,1) == 'P')
                        $('#P-checkboxes').find('div').append( json[current].checkboxes[countVakken] );
                }
            }
        });

        /* request.always( function(jqXHR, textStatus) {
            console.log(jqXHR, textStatus);
        }); */
    });


    $('input[name=ios]').on('click', function() {
        var ids = {},
            klassen = $('select[name="klas"]').val();

        for (var countKlassen=0; countKlassen < klassen.length; countKlassen++) {
            var current = cleanKlasnaam(klassen[countKlassen]),
                vakken = $('input[class="'+ current +'"]:checked'),
                vakkenIds = [];

            for (var countVakken=0; countVakken < vakken.length; countVakken++)
                vakkenIds.push(vakken[countVakken].value);

            ids[current] = vakkenIds;
        }

        if (request)
            request.abort();

        request = $.ajax({
            type: 'GET',
            url: 'http://dev.justrightwebdesign.nl/snippets/HvA-Rooster/inc/generateRooster.php',
            data: {ids: ids}
        });

        request.done( function(data) {
            console.log(data);
        });

        request.always( function(jqXHR, textStatus) {
            //console.log(jqXHR, textStatus);
        });
    });
});


function cleanKlasnaam(string)
{
    if (string.indexOf('-') != -1)
        return string.replace('-', '');
    else if (string.indexOf('%20') != -1)
        return string.replace('%20', '');
}