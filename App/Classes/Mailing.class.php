<?php

    include(ROOT_PATH. '/bootstrap/bootstrap.php');
    class Mailing extends Model
    {
        private static $tableName = "newsletter";
        private static $validatorCheck;
        private static $requestResult;
        private static $successMessage;
        private static $errorMessage;
        private static $queryString;

        /***
         * @param $request
         * @return string
         * @throws Exception
         * @mailing list create method
         */
        public static function mailingListCreate($request)
        {
            $request = [
                'email' => $request['email']
            ];
            self::$queryString = parent::createQuery(self::$tableName,$request);
            if (self::$queryString) {
               return  true;
            } else {
                return false;
            }
        }//END

        /***
         * @return false
         * @throws Exception
         * Get all mail Method
         */
        public static function getAllMail()
        {
            self::$requestResult = parent::readQuery(self::$tableName);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END

        /***
         * @param $request
         * @throws Exception
         * @mail blast method
         */

        public static function mailBlast($request)
        {
            $validator = [
                'subject'   => ['required', 'min' => 6, 'trim'],
                'body'      => ['required', 'min' => 6,  'trim'],
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'subject'     => $request['subject'],
                    'body'  => $request['body'],
                ];
                foreach (self::getAllMail() as $email => $value){
                    $email = $value['email'];
                    if (Mail::mailCreate($email,$request['subject'],$request['body']));
                        self::$successMessage = "<div class='alert alert-success'> Mail blast sent successfully </div>";
                        return self::$successMessage;
                }
            }
        }//END


        /***
         * @param $id
         * @return string
         * @throws Exception
         * Delete mail Method
         */
        public static function delEmailById($id)
        {
            self::$requestResult = parent::deleteQuery(self::$tableName,"id",$id);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END

    }