<?php 


$meta = [];
$meta['title']='Adami Walker';
$meta['description']='Developing the future one day at a time';
$meta['keywords']='AdamWalker, FullStack , Mobile Developer';


$content = <<<EOT

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
EOT;

include '../core/layout.php';