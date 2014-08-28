$(document).ready(function() {
    $.getJSON("data.json", function(json) {                
        for (var ev in json) {                    
            var $ev = $('<div><h2>' + ev + '</h2></div>');
            $('#cs').append($ev);                    
            var datum = json[ev];                    
            for (var nev in datum) {
                var csoportnev = datum[nev];
                for (var tipus in csoportnev) {                           
                    var link = csoportnev[tipus];
                    var $kep = $('<img src="" title=""></img>')
                    var src;
                    var tooltip;
                    if (tipus === 'o') {
                        src='page.png';
                        tooltip = 'Page';
                    }
                    if (tipus === 'c') {
                        src='groups.png';
                        tooltip = 'Group';
                    }
                    $ev.append('<a class="nev" href="' + link + '"><span>' + nev + '</span><img src="'+src+'" title="'+tooltip+'""></img></a>');
                }
            }
        }
    });
});