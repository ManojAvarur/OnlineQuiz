<?php
/*
if($con = mysqli_connect('localhost','root'))
{  
      
    if(!mysqli_select_db($con,'ONLINEQUIZ'))
    {   
        echo "Connection to the Database ONLINQQUIZ is not established :(";
    }
       
}
else
{
    echo "There maybe a problem in your xampp (or) The database called ONLINEQUIZ may not exist in your localhost \n for more information please check line 14 or contact Manoj!";
}*/
$con = mysqli_connect('127.0.0.1','root');
            if($con == true)
            {    
                if((mysqli_select_db($con,'ONLINEQUIZ')) == false)
                { 
        ?> 
                     <div uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <h3>Notice</h3>
                        <p>Connection to the Database ONLINEQUIZ is not established :(</p>
                     </div>
        <?php        
                }
            }
            else
            {
        ?>
                <div uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <h3>Notice</h3>
                        <p>There maybe a problem in your xampp (or) The database called ONLINEQUIZ may not exist in your localhost \n for more information please check line 14 or contact Manoj!</p>
                </div>
        <?php
            }
        
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Online Quiz</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit/css/uikit.min.css" />
        <script src="js/uikit/uikit.min.js"></script>
        <script src="js/uikit/uikit-icons.min.js"></script>
    </head>
<body>
                <?php     
                     $i = 1;
                     $ansid = $i;
                     $sql1 = "SELECT * FROM QUESTIONS WHERE QID = $i ";
                     $result1 = mysqli_query($con, $sql1);  
                     if($result1)   
                        echo "Query done";
                    ?>
                        <br>
                        <br>

                 <?php       
                   while( $rows = mysqli_fetch_array($result1) )
                     echo $i ." : ". $rows['QUESTIONS'];		 
                ?>	 
</body>
</html>