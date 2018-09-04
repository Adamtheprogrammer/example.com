<?php 
include '../core/processContactForm.php'; 
$meta = [];
$meta['title']='Get In Touch';
$content =<<<EOT

       <h1>Adami Walker</h1>

  
        <form action="contact.php" method="POST">
            <input type="hidden" name="_subject" value="New submission!">
            <input type="hidden" name="_next" value="https://adamtheprogrammer.io/thanks.html" />
             
             
            <div class="form-control">
                <label for="name">Adam</label>
            <input value="{$valid->userInput('name')}" type="text" name="name" id="name">
                <div>{$valid->userInput('name')} </div>
            </div>
            
            
             <div class="form-control">    
                <label for="_replyto">Email</label> 
                <input value="{$valid->userInput('email')}" type="email" name="email" id="_replyto">
                <div>{$valid->userInput('email')}</div>
            </div>
            <div class="form-control">
                <label for="message">Ask a question?</label>
                <textarea col="20" row"10" name="message" id="message">{$valid->userInput('message')}</textarea>
                <div>{$valid->userInput('message')} </div>
            </div>
            
            <div class="form-control">
                <input type="hidden" name="_subject" value="New submission!">
                 <input type="submit" value="Send">
            </div>

            

        </form>
EOT;
include '../core/layout.php';

