<!-- 1.	Write a PHP script to: 

a.	Convert the entered string to uppercase.
b.	Convert the entered string to lowercase.
c.	Make the first letter of the string uppercase.
d.	Make the first letter of each word capitalized.
 -->


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 
 
 <form action="task01.php" method='post'> 
    <label >Txt to be converted</label>
    <input type="text" name="String">
    <br>
    <input type="submit">
        
 </form>

 <?php
    $Txt=$_POST['String'];

    echo strtoupper($Txt);
    echo "<br>";

    
    echo strtolower($Txt);
    echo "<br>";

    echo ucwords($Txt);
    echo "<br>";

    echo ucfirst($Txt);
    echo "<br>";

    



 ?>

 
 </body>
 </html>