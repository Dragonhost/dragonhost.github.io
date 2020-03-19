<?php

    if(isset($_REQUEST['send'])){
        if(isset($_REQUEST['name'])){
            if(!empty($_REQUEST['name'])){
                $name = $_REQUEST['name'];
            }  else{
                $error = "Enter your name";
            }

        }
        if(isset($_REQUEST['email'])){
            if(!empty($_REQUEST['email'])){
                $mail = $_REQUEST['email'];
            }  else{
                $error = "Enter your email";
            }

        }
        if(isset($_REQUEST['message'])){
            if(!empty($_REQUEST['message'])){
                $message = $_REQUEST['message'];
            }  else{
                $error = "Enter your message";
            }

        }
      
   
        // Send mail
    
        // require 'vendor/autoload.php'; 
  
        // $email = new \SendGrid\Mail\Mail(); 
        // if(!empty($_REQUEST['email'])){
        //     $email->setFrom($mail, "Portfolio Messages");
        //     $email->setSubject("Message From my portfolio");
        //     if(!empty($_REQUEST['name'])){
        //         $email->addTo("kamaltejag@gmail.com", "Message from: ".$name);
        //         if(!empty($_REQUEST['message'])){
        //             $email->addContent("text/plain", $message);
        
        //             $sendgrid = new \SendGrid('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');
            
        //             if($sendgrid->send($email)){
        //                 $error = "Message Sent";
        //             }
        //         }
        //         else{
        //             $success = "Enter the Message";
        //         }
         
        //     }
        //     else{
        //         $error = "Enter your name";

        //     }
        // }
        // else{
        //     $error = "Enter your email";

        // }

        // if(empty($_REQUEST['name']) && empty($_REQUEST['email']) && empty($_REQUEST['message'])){
        //     $error = "Enter the details";
        // }
        
            
        require 'vendor/autoload.php'; 
  
        $email = new \SendGrid\Mail\Mail(); 
        if(!empty($_REQUEST['email'])){
            $email->setFrom($mail, "Portfolio Messages");
            $email->setSubject("Message From my portfolio");
            if(!empty($_REQUEST['name'])){
                $email->addTo("kamaltejag@gmail.com", "Message from: ".$name);
                $email->addContent("text/plain", $message);
        
                $sendgrid = new \SendGrid('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');
        
                if($sendgrid->send($email)){
                    $error = "Message Sent";
                }
                else{
                    header("Location: message.php");
                }
            }
            else{
                $error = "Enter your name";
            }
       
        }

        if(empty($_REQUEST['name']) && empty($_REQUEST['email']) && empty($_REQUEST['message'])){
            $error = "Enter the details";
        }
        


    }

?>