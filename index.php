<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filmes</title>
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/booststrap.min.css" ref </link> 
</head>
<body>
     <div clas="container">
        <div class="row">
            <div class="col-12 bg-primary">cabeçalho</div>
        </div>
        
        <div class="row">
            <div class="col-4 bg-danger">
                <?php
                    include"menu.php";
                ?>
            </div>
            <div class="col-8">
                <?php
                    if(isser($_GET['pagina'])) {
                        include $_GET['parina'].".php";
                    } else {
                        include "home.php";
                    }
                ?>
            </div>
                
        </div>
        
        <div class="row">
            <div class="col-12 bg-warning text-center">@filme 2022 - unidavi</div> 
        </div>
       </body>
