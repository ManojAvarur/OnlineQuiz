<?php
            if($con = mysqli_connect('localhost','root'))
            {    
                if(!mysqli_select_db($con,'ONLINEQUIZ'))
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
    <body bgcolor=#0000>
	    <div class="uk-section uk-background-secondary uk-light">
            <div class="uk-container uk-container-expand uk-text-center " style=" padding: 0%; border: red;">
                <br>
			    <h3 style="margin-top:-4%"> All the best for the Quiz </h3>
			    <h5 style="margin-top:1%; border: 1px solid red; padding:2.5%;"> There will be 10 questions, Each question carries 1 marks. The answers given by the user will evaluated to 10 marks </h5>
            </div>
            <br>
            <div class="uk-container uk-container-expand" style="background-color: rgb(62, 65, 68)">
       
            <form action="check.php" method="post">
			
				<?php     
                     $i = 1;
                     for( $i ; $i <= 1 ;$i++)
                     {
                        $ansid = $i;
                        $sql1 = "SELECT * FROM QUESTIONS WHERE QID = $i ";
                        $sql2 = "SELECT * FROM ANSWERS WHERE ANS_ID = $i ";
                        $result1 = mysqli_query($con, $sql1);
                        $result2 = mysqli_query($con, $sql2);
                        while( $rows1 = mysqli_fetch_array($result1) )  
                        {		 
                ?>	
                            <div class="uk-card-secondary">
                            <p class> <?php echo $i ."  :  ". $rows1['QUESTIONS']; ?> </p>
                            
                <?php        
                            while ( $rows2 = mysqli_fetch_array($result2) )
                            {
                ?>           
                                 <input type="radio" name="1"> <?php echo $rows2['ANSWERS']; ?> <br> 
                <?php
                            }
                        }
                    }   
                ?>	
                </div>
            </form>
     
        </div>
	</div>	
    </body>
</html>