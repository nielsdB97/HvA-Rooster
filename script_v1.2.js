document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('[name=klas]').addEventListener('change', function() {
        doAjaxRequest(document.querySelector('[name=klas]').value);
    });
    
    document.querySelector('[name=ios]').addEventListener('click', function() {
        var checks = document.querySelectorAll('input[type="checkbox"]:checked');
        var klas = document.querySelector('select').value;
        var ids = [];
        for(i=0; i<checks.length; i++) {
            ids.push(checks[i].value);
        }
        
        window.open('webcal://rijks.website/hvarooster/rooster_V1.5.php?klas=' + klas + '&id=' + ids.join(), '_blank');
    });
    
    document.querySelector('[name=google]').addEventListener('click', function() {
        var checks = document.querySelectorAll('input[type="checkbox"]:checked');
        var klas = document.querySelector('select').value;
        var ids = [];
        for(i=0; i<checks.length; i++) {
            ids.push(checks[i].value);
        }
        var url = 'http://rijks.website/hvarooster/rooster_V1.5.php?klas=' + klas + '&id=' + ids.join();
        var shortenedUrl = shortenUrl(url);
    });
    
    function doAjaxRequest(klas){
        var request = new XMLHttpRequest();
        
        request.onload = ajaxSucces;
        request.open('GET', 'get_classes.php?klas=' + klas, true);
        request.send();
    }

    function ajaxSucces() {
        document.querySelector('#klassenLijst').innerHTML = this.responseText;
        vakAnimation();
    }
    
    function shortenUrl(url) {
        var gRequest = new XMLHttpRequest();
        gRequest.onload = function() {
            var response = this.responseText;
            var parsedResponse = JSON.parse(response);
            document.querySelector('a[name="google_link"]').setAttribute('href', 'http://www.google.com/calendar/render?cid=' + parsedResponse.id);
            document.querySelector('a[name="google_link"]').classList.add('active');
            
        };
        gRequest.open('POST', 'https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyBpeqWAd7_JXHLpp565prKh-XCgYEibe8Q');
        gRequest.setRequestHeader('Content-Type', 'application/json');
        gRequest.send(JSON.stringify({"longUrl": url}));
    }


    // Fancy stuff
    function vakAnimation() {
        document.querySelector("#klassen h3").classList.add("visible");
        var klassen = document.querySelectorAll("#klassenLijst label"), i = 1;
        Array.prototype.forEach.call(klassen, function(klas) {
            setTimeout(function(){ klas.classList.add("visible"); }, 20*i);
            i++;
        });
    }

    
});