<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <?= include 'php/constants.php'; ?>
    <title><?= Constants::getProjectName(); ?> | início</title>
</head>
<body>
    <header class="menu-style">
        <nav class="menu-style fixed-top" id="Content-Header">
            <div class="container">
                <a id="menu" href="index.html">
                    <img src="./assets/images/C.png" class="image-logo" alt="">
                    <div><?php 
                            echo Constants::getProjectName();
                    ?></div>
                </a>
            </div>
        </nav> 
    </header>
    <div id="screen">
        <div class="container" id="content-main">
            <table id="map-foundation">
                <tr></tr>
            </table>
            
        </div>
    </div>
    
    
    <script src="assets/js/typyng.js"></script>
</body>
</html>