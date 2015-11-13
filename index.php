<!DOCTYPE html>
<html>
    <head>
       <script src="//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js"></script>
       <script>
            
           window.onload = function() {
             document.getElementById("search").addEventListener(
                             "click", function(){
                     var sterm = document.getElementById("term").value;
                    //console.log(sterm);
                // go out and get result from request.php
                 new Ajax.Request("request.php?q="+sterm,
                       {
                          method: "get",
                          onSuccess: doSomethingWithTheResult
                         });
                  
           });
            function doSomethingWithTheResult(data) {
                          document.getElementById("response").innerHTML = (data.responseText);
                        }
           }                        
       </script>
        <title>Ajax Demo of Seach Button</title>
    </head>
    <body>
        <input type="text" name="term" id="term" placeholder="enter search term" value="" length="20"><button id="search">Search</button>
        <div id="response"></div>
    </body>
</html>