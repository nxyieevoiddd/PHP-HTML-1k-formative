<!-- your code goes here -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 </body>
 <?php
 echo"<h1>About</h1>";
 $indexedArray =[
    ["name"=>"Lorem ipsum dolor sit amet."],
    ["name"=>"Lorem ipsum dolor sit amet, consectetur adipisicing."],
    ["name"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."]
 ];
 foreach ($indexedArray as $value) {
    echo "<p>$value[name]</p>";
};
 ?>
 </html>