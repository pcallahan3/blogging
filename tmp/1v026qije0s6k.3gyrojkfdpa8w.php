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
                    height:140px;
                    width:100%;
                    float:right;
                    margin: 20px;
                    text-align:center;
                }
                
                 .blog-well{
                    height:40px;
                    width:60%;
                    float:right;
                    margin: 20px;
                    text-align:center;
                }
                .content-well{
                    height:200px;
                    width:50%;
                    float:left;
                    margin: 20px;
                    text-align:left;
                }
                .blogger-post{
                     text-align:center;
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
            <?php echo $this->render('blogger/navbar.htm',NULL,get_defined_vars(),0); ?>