<!DOCTYPE html>
<html lang="en">
    
    <head>
       <meta charset="UTF-8">
       <title>Adami Walker</title>
       <link rel="stylesheet" type="text/css" href="dist/css/main.min.css">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </nav>
        </header>


        <main>
            <h1 id="name">Adami Walker</h1>
            <button id="btn">Push Me</button>  
                    <p id="change"><img src="https://s.gravatar.com/avatar/9b35000c32a7318c89a4ac04e227292c?s=80" class="avatar" alt="My Avatar">
                        Hi im Adam and I have a love for programming applications. 
                        My skills extend along the path of html2, css, javascript, php and mysql.
                        I have been coding applications for 5 years now and I have fell in love.
                        This is by far the simple and most comfortable position to work at as a career. 
                        I believe more people should attend the classes for technology because it will
                        dramatically increase your earning potential. The Best deal out of getting a great education in 
                        software technology is the freedom to work remote and spend time with your family. It also helps 
                        having the enery to do something else after work when you get off instead of being tired from a long day.
                     
                    </p> 
                    
                    

                   
        <h2>Projects</h2>
        <div class="grid">

            <div class="col">
                <div class="card">
                    <h3>Draw on Canvas</h3>
                    <p>
                        Built a drawing application using the canvas and javascript.
                    </p>
                    <div class="card-controls">
                        <a href="/draw">Demo</a>
                    </div>
                </div>

            </div>

        </div>
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