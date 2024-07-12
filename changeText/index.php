<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change the Document</title>
    <script>
        function loadDoc(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status = 200){
                    document.getElementById('demo').innerHTML=xhttp.responseText;
                }
            };
            xhttp,open("GET", "ajax_info.txt",true);
            xhttp.send();
        }
    </script>
</head>
<body>
    <div class="demo">
        <h2 id="demo">Let AJAX change this text</h2>
        <button type="button" onclick="loadDoc()">Chnage Content</button>
    </div>




</body>
</html>
