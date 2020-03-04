<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        div{
            border: 2px ;
        }
        .me{
            border: 4px solid gray; 
            background-color: #006699;
            opacity: .80;
            color: #000000;
         
        }
        /*
        .container{
            
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            opacity: ;
            color: #000000;

        }*/
        .btn {
            border: none;
            color:#b3e6ff;
            padding: 14px 28px;
            font-size: 20px;
            cursor: pointer;
            }
        
    </style>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="col-md-4 mb-2"></div>
            <div class="text-center col-md-4 mb-2 me">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="SELECT"><h3 >SELECT IMAGE</h3></label><br><br>
        <input type="file" name="files[]" multiple>
        <br>
        <button type="submit" name="submit">
        <i class="fa fa-upload" style="font-size:24px;color:grey"></i>
        
         Upload</button>
    </form>
    <div class="col-md-4 mb-2"></div>
   
            </div>
        </div>
    </div>
</body>
</html>