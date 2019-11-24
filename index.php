<!DOCTYPE html>

<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <meta name="description" content="Český lorem ipsum bot">
        
        <meta name="keywords" content="HTML,CSS,CSV,JavaScript, lorem, ipsum">
        
        <meta name="author" content="Lukáš Zendel">
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <title>Blábot - české lorem ipsum</title>
        
    </head>
    
    <script>
        location.reload();
        <button onclick="location.reload();">Refresh Page</button>
    </script>

    <body>

        <div id="case">
            

            <h1>
                
                Blábot - české lorem ipsum 
                
            </h1> 
            
            <?php
            
         /*
         *  poslední úprava 19.11. //14
         */
            
            require "wordbook.php";
            
            
            $csv = new wordbook();
            
            
            $csv->generateWords(1000);
            
         /*
         *  poslední úprava 21.11. //17
         */
            ?>
  
    </div>

 
</body>

</html>