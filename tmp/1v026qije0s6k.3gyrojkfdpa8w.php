<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .well{
                height:170px;
                width:170px;
                float:right;
                margin: 20px;
                text-align:center;
    
            }
            .profile-well{
                height:30px;
                width:170px;
                color:red;
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
                <h1 style="text-align:center;"><?= $page_head ?></h1>
            </div>
             
            
            <!--<?php echo $this->render('blogger/nav.htm',NULL,get_defined_vars(),0); ?>-->