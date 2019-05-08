<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store Procedure</title>
</head>
<body>
       <div class="container">
            <br/>
            <h2 align="center">Search Student From Ajax</h2>
       <div class="form-group">
           <div class="input-group">
               <span class="input-group-addon text-primary">Search</span>
               <input type="text" name="search_text" id="search_text" placeholder="Search Name" class="form-control">
           </div>
       </div>
       <br/>
       <div id="result"></div>
       </div>
</body>
</html>

<script>
    $(document).ready(function(){
        $('#search_text').keyup(function(){
            var txt = $ (this).val();
            if(txt != ''){
                 
                 $.ajax({
                     url:"fetch.php",
                     method:"post",
                     data:{search:txt},
                     dataType:"text",
                     success: function(data)
                     {
                         $('#result').html(data);
                     }
                 });

            }else{
                $('#result').html('');
            }
        });
    });
</script>