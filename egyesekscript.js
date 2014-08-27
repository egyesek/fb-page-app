  $(document).ready(function(){
            $.getJSON("data.json", function(json){
                
                for (var ev in json){
                    
                    var $ev = $('<div><h2>'+ev+'</h2></div>');
                    $('#cs').append($ev);
                    
                    var datum = json[ev];
                    
                    for (var nev in datum){
                        var $nev = $('<div class="nev"><span>'+nev+'</span></div>');
                        var $linktarto = $('<div class="linkek"></div>');
                        $ev.append($nev);
                        $nev.append($linktarto);
                        
                        var csoportnev = datum[nev];
                        
                        for (var tipus in csoportnev){                            
                            var $link = $('<a target="_blank" href="'+csoportnev[tipus]+'">'+tipus+'</a>');
                            $linktarto.append($link).append(' ');
                        }
                        
                    }
                    
                }
            });
        });