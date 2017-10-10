<html>
    <head>
        <title> Palindrome </title>
    </head>

    <body>
        <?php
            echo '<form method="post">';
            echo 'Please enter a String <br>';
            echo '<input type="text" name="palindrome" ><br> <br>';
            
            

            $num = $_POST["palindrome"];
            $flag=1;
            for($i=0;$i < strlen($num) ;$i++)
            {
                
                if($num[$i]!=$num[strlen($num)-1])
                {
                    $flag=0;
                    
                    break;
                }    
            }
            if($flag==1)
                echo "$num is a Palindrome";
            else
                echo "$num is not a palindrome";
            echo '</form>';
        
            echo "Request to pull";
        ?>
    </body>

</html>
