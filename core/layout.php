<!DOCTYPE html>
<html lang="en">
    
    <head>
       <meta charset="UTF-8">
       <?php if(!empty($metal['title'])): ?>
           <title><?php echo $metal[$title];?></title>
        <?php endif;?>
         <?php if(!empty($metal['description'])): ?>
         <meta name="description" content="<?php echo $meta['description']; ?>">
        <?php endif;?>
        <?php if(!empty($metal['keywords'])): ?>
        <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
        <?php endif;?>

       <link rel="stylesheet" type="text/css" href="/dist/css/main.min.css">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <style>
       #change{
            display: none;

       }
       </style>
    </head>

    <body>
        <header>
                <span class="logo"><a href="index.php">Adam Walker</a></span>
                <a id="toggleMenu">Menu</a>
            <nav>
                <ul>
                    <li><a href="/.php">Home</a></li>
                    <li><a href="/resume.php">Resume</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                    <li><a href="/posts">Blog</a></li>
                </ul>

            </nav>
        </header>


        <main>
        <?php echo (!empty($message)?$message:null);?>
        <?php echo $content;?>
        </main>
        
        


        <script>

            var toggleMenu = document.getElementById('toggleMenu');
            var nav = document.querySelector('nav');
            toggleMenu.addEventListener(
                'click',
                function(){
                    if(nav.style.display=='block'){
                      nav.style.display='none';
                    }else{
                      nav.style.display='block';
                    }
                  }
                );

                
                document.getElementById("btn").addEventListener("click", function(){
                
               
                if (document.getElementById("change").style.display=== 'block'){
                    document.getElementById("change").style = "display: none;";
                  
                }else{
                    document.getElementById("change").style = "display:block; color: #000";
                }

              
            })

        </script>

        
          

    </body>
</html>