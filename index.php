<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>The Weather App</title>
    <!--css file-->
    <link rel="stylesheet" href="style.css">
    <!--bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1>Weather App</h1>
    <form id="form" method="post" action="">
        <p><label for="city">Enter name of the city below</label></p>
        <p><input type="text" name="city" placeholder="Name of the city"></p>
        <button class="btn btn-success" id="button" type="submit" name="submit">Check weather</button>
    
    <div id="output" class="output">


    </div>
    </form>
    </div>

</body>
</html>
