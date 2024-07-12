<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" class="form-control" placeholder="Subject">
        </div>
        <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea id="message" class="form-control" placeholder="Enter text here"></textarea>
        </div>
        <div class="form-group">
            <label for="spam">Spam Control 5+2=?:</label>
            <input type="tel" id="spam" class="form-control" placeholder="type 7 here">
        </div>

        <button type="submit" id="submit" class="btn btn-primary">Contact</button>
    </div>
    <div id="display"></div>


    <script>
        $(document).ready(function() {
            $("#submit").click(function(){
                var em = $("#email").val();
                var sub = $("#subject").val();
                var com = $("#message").val();
                var spm = $("#spam").val();

                var datastring = 'em1=' + em + '&sub1=' + sub + '&com1=' + com;

                if(em == '' || sub ==''||com==''){
                    $("#display").html("<div class='alert alert-warning'>Please fill all fields.</div>");

                }else if(spm!='7'){
                    $("#display").html("<div class='alert alert-danger'>Please Answer the spam question.</div>");

                }else{
                    $.ajax({
                        url: "process.php",
                        type: "POST",
                        data :datastring,
                        cache : false,
                        success: function(result){
                            $("#display").html(result);
                        }
                    });
                }
                return false;

            });


        });
    </script>

</body>

</html>
