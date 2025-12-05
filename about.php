<!-- your code goes here -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aboutot</title>
 </head>
 <body>
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
    <a href="/contact.html">go to contact</a>
    <p></p>
    <a href="/index.html">go to index</a>
 </body>
 </html>