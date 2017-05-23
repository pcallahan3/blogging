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
            ul{
                list-style-type: none;
            }
            
             .panel {
                text-align: center;
                position: absolute;
                top: 10px;
                left: 320px;
                margin-left:auto;
                margin-right:auto;
                padding: 40;
                width: 760px;
                height: 150px;
                background-color: #f1f1f1;
        
        
            }

            form{
                position: absolute;
                top: 200px;
                left: 520px;
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
                    position: absolute;
                    top: 200px;
                    height:200px;
                    width:40%;
                    float:left;
                    margin: 20px;
                    text-align:left;
                }
                
                .bio-well{
                    position: absolute;
                    top: 200px;
                    height:200px;
                    width:20%;
                    right: 10px;
                    margin: 20px;
                    text-align:left;
                }
                
                .header-panel {
                text-align: center;
                position: absolute;
                top: 10px;
                left: 320px;
                 width:42%;
                margin-left:auto;
                margin-right:auto;
                padding: 40;
                height: 150px;
                background-color: #f1f1f1;
                }
                
                
                .blogger-post{
                     text-align:center;
                }
                
           
        

        </style>
        <base href="<?= $BASE.'/'.$UI ?>" />
        <title><?= $site ?></title>
        <!-- Bootstrap -->;
        <link href="../../ui/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="ui/css/styles.css">
    </head>
 
    <body>
 
    
            <!--<?= $page_head ?>-->
            <?php echo $this->render('blogger/navbar.htm',NULL,get_defined_vars(),0); ?>
            