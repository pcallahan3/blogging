<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .well{
                height:170px;
                width:170px;
            } 

        </style>
        <base href="<?= $BASE.'/'.$UI ?>" />
        <title><?= $site ?></title>
        <!-- Bootstrap -->;
        <link href="../../ui/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
 
    <body>
 
        <div class="container">
            <div class="jumbotron">
                <h1><?= $page_head ?></h1>
            </div>
             
            <?php echo $this->render('user/nav.htm',NULL,get_defined_vars(),0); ?>