<!DOCTYPE html>
<?php 

include 'core/Adam/src/Validation/Validate.php';
include 'vendor/autoload.php';
include '../config/keys.php';

use Adam\Validation;
    $valid = new Adam\validation\Validate();

    
    use Mailgun\Mailgun;   


    $filters = [
        'name'=>FILTER_SANITIZE_STRING,
        'email'=>FILTER_SANITIZE_STRING,
        'message'=>FILTER_SANITIZE_STRING,
    ];
    $input = filter_input_array(INPUT_POST, $filters);

    class Validate{
        public $validation = [];
        public $errors = [];
        private $data = [];
        public function email($value){
            if(filter_var($value, FILTER_VALIDATE_EMAIL)){
                return true;
            }
                return false;
        }

        public function notEmpty(){
            if(!empty($value)){
                return true;
            }
            return false;
        }
        public function check($input){
            $this->data = $input;

            foreach(array_keys($this->validation) as $fieldName){
            $this->rule($fieldName);
            }

        }
        private function rule($field){
            foreach($this->validation[$field] as $rule){
                if($this->{$rule['rule']}($this->data[$field])=== false){

                    $this->errors[$field] = $rule;
                }
            }
        }
        public function error($field){
            if(!empty($this->errros[$fields])){
                return $this->errors[$fields]['message'];
            }

        }

        public function userInput($field){
            return (!empty($this->data[$field])?$this->data[$field]:null);
        }    
    }

    $valid = new Validate();
    $filters = FILTER_SANITIZE_MAGIC_QUOTES;
    $input = filter_input_array(INPUT_POST, $filters);

    if(!empty($input)){
        $valid->validation = [
            'email'=>
                [[
                'rule'=>'email',
                'message'=>'Please enter a valid Email'
                ],[

                'rule'=>'notEmpty',
                'message'=>'Please enter a valid Email'
                ]],
                
            'name'=>[[
                'rule'=>'notEmpty',
                'message'=>'Please enter a valid Name'
                ]],
            'message'=>[[
                'rule'=>'notEmpty',
                'message'=>'Please enter a valid Name'
                ]]
         ];

            $valid->check($input);
            if(!empty($valid->errors)){

                # Include the Autoloader (see "Libraries" for install instructions)
               

                # Instantiate the client.
                $mgClient = new Mailgun(MG_KEY);


                # Make the call to the client.
                $result = $mgClient->sendMessage(MG_DOMAIN,
                        array('from'    => "{$input['name']} <{$input['email']}>",

                                'to'      => 'YOUR-NAME <quarterque2@gmail.com>',
                                'subject' => 'Hello Adami',
                                'text'    => $input['message']));

                if($result->http_response_code == 200){
                    return header('LOCATION: thanks.php');
                }
                
              

            }else{
                $message = '<div style="color:#ff0000">Your form has errors!</div>';
        }
    }

    

?>

<html lang="en">
        <head>
                <meta charset="UTF-8">
                <title>Adami Walker</title>
                <link rel="stylesheet" type="text/css" href="dist/css/main.min.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
               
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

        <?php echo (!empty($message)?$message:null);?>
       <h1>Adami Walker</h1>

  
        <form action="contact.php" method="POST">
            <input type="hidden" name="_subject" value="New submission!">
            <input type="hidden" name="_next" value="https://adamtheprogrammer.io/thanks.html" />
             
             
            <div class="form-control">
                <label for="name">Adam</label>
                <input value="<?php echo $valid->userInput('name') ?>" type="text" name="name" id="name">
                <div><?php echo $valid->userInput('name') ?> </div>
            </div>
            
            
             <div class="form-control">    
                <label for="_replyto">Email</label> 
                <input value="<?php echo $valid->userInput('email') ?>" type="email" name="email" id="_replyto">
                <div><?php echo $valid->userInput('email') ?> </div>
            </div>
            <div class="form-control">
                <label for="message">Ask a question?</label>
                <textarea value="<?php echo $valid->userInput('message') ?>" col="20" row"10" name="message" id="message"></textarea>
                <div><?php echo $valid->userInput('message') ?> </div>
            </div>
            
            <div class="form-control">
                <input type="hidden" name="_subject" value="New submission!">
                 <input type="submit" value="Send">
            </div>

            

        </form>
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
            </script> 
    </body>
</html>