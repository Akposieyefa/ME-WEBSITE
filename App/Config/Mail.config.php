<?php
    require_once(ROOT_PATH. "/App/PHPMailer/PHPMailerAutoload.php");
    /**
     * this is the root email function
     * package built by 
     * @Orutu Akposieyefa Williams
     * Twitter => @Orutu_AW
     * Phone => 08100788859
     * Email => orutu1@gmail.com
     */
    class Mail
    {
        /**
         * Create email method
         */
        public function mailCreate($email,$subject,$message)
        {
            try {

                $mail=new PHPMailer();
                $mail=new PHPMailer();
                $mail->CharSet = 'UTF-8';

                $mail->IsSMTP();
                $mail->Host       = MAIL_HOST;

                $mail->SMTPSecure = MAIL_SMTP;
                $mail->Port       = MAIL_PORT;
                $mail->SMTPAuth   = true;
                $mail->From     = APP_NAME;

                $mail->Username   = MAIL_USERNAME;
                $mail->Password   = MAIL_PASSWORD;

                $mail->SetFrom(MAIL_USERNAME);
                $mail->AddReplyTo(MAIL_USERNAME,'no-reply');
                $mail->Subject    = $subject;

                $mail->MsgHTML("
                    $message
                ");
                $mail->AddAddress($email , $message);
                if (!$mail->send()) {$msg= "Mailer Error: " . $mail->ErrorInfo;
                }

            } catch (Exception $e) {
                $error_msg = "Mailer Error: " . $e->getMessage();
                return $error_msg;
            }
        }

    }

