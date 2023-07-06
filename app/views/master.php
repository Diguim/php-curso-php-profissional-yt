<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <h1>curso php profissional</h1>
       <div>
            <?php require 'partials/header.php';?>
       </div>
       <div>
            <?php require VIEWS.$view; ?>
       </div>
        
        <script src="" async defer></script>
    </body>
</html>