<?php

    include(ROOT_PATH. '/bootstrap/bootstrap.php');

    class Faq extends Model
    {
        private static $tableName = "faq";
        private static $validatorCheck;
        private static $requestResult;
        private static $successMessage;
        private static $errorMessage;
        private static $queryString;

        /***
         * @param $request
         * @return string
         * @throws Exception
         * FAQ CREATE METHOD
         */
        public static function faqCreate($request)
        {
            $validator = [
                'question' => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'answer' => ['required', 'min' => 6, 'trim']
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'question'      => $request['question'],
                    'answer' => $request['answer'],
                ];

                self::$queryString = parent::createQuery(self::$tableName,$request);
                if (self::$queryString) {
                    self::$successMessage = "<div class='alert alert-success'> FAQ created successfully </div>";
                    return self::$successMessage;
                } else {
                    self::$errorMessage = "<div class='alert alert-danger'>Error </div>";
                    return self::$errorMessage;
                }

            }
        }//END


        /***
         * @return false
         * @throws Exception
         * FAQ GET ALL METHOD
         */
        public static function getAllFaq()
        {
            self::$requestResult = parent::readQuery(self::$tableName);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END


        /***
         * @param $id
         * @return array|false
         * FIND FAQ METHOD
         */
        public static function findFaq($id)
        {
            self::$requestResult = parent::readOneQuery(self::$tableName, "id",$id);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END


        /***
         * @param $id
         * @param $request
         * @return string
         * @throws Exception
         * UPDATE FAQ
         */
        public static function updateFaq($id,$request)
        {
            $validator = [
                'question' => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'answer' => ['required', 'min' => 6, 'trim']
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'question'      => $request['question'],
                    'answer' => $request['answer']
                ];
                self::$queryString = parent::updateQuery(self::$tableName,$request,"id",$id);
                if (self::$queryString) {
                    self::$successMessage = "<div class='alert alert-success'> FAQ update successfully </div>";
                    return self::$successMessage;
                } else {
                    self::$errorMessage = "<div class='alert alert-danger'>Error </div>";
                    return self::$errorMessage;
                }
            }
        }//END

        /***
         * @param $request
         * @return false
         * @throws Exception
         * DELETE METHOD
         */
        public static function deleteFaq($request)
        {
            self::$requestResult = parent::deleteQuery(self::$tableName,"id",$request);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END
    }