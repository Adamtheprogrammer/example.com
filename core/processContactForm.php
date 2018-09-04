
<?php 

include '../core/Adam/src/Validation/Validate.php';
include '../vendor/autoload.php';
include '../../config/keys.php';

use Adam\Validation;
use Mailgun\Mailgun;
    $valid = new Adam\validation\Validate();


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

    


    