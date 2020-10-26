<?php
    include(ROOT_PATH. '/bootstrap/bootstrap.php');

    class Service extends Model
    {
        private static $tableName = "service";
        private static $validatorCheck;
        private static $requestResult;
        private static $successMessage;
        private static $errorMessage;
        private static $queryString;


        /***
         * @param $request
         * @return string
         * @throws Exception
         * Service create method
         */
        public static function serviceCreate($request)
        {
            $validator = [
                'name' => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'description' => ['required', 'min' => 6, 'trim']
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'name'      => $request['name'],
                    'description' => $request['description'],
                ];

                self::$queryString = parent::createQuery(self::$tableName,$request);
                if (self::$queryString) {
                    self::$successMessage = "<div class='alert alert-success'> Service created successfully </div>";
                    return self::$successMessage;
                } else {
                    self::$errorMessage = "<div class='alert alert-danger'>Error in creating service </div>";
                    return self::$errorMessage;
                }

            }
        }//END


        /***
         * @return false
         * @throws Exception
         * Get all service method
         */
        public static function getAllService()
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
         * Find single service method
         */
        public static function findService($id)
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
         * Update service Method
         */
        public static function updateService($id,$request)
        {
            $validator = [
                'name' => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'description' => ['required', 'min' => 6, 'trim']
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'name'      => $request['name'],
                     'description' => $request['description']
                ];
                self::$queryString = parent::updateQuery(self::$tableName,$request,"id",$id);
                if (self::$queryString) {
                    self::$successMessage = "<div class='alert alert-success'> Service update successfully </div>";
                    return self::$successMessage;
                } else {
                    self::$errorMessage = "<div class='alert alert-danger'>Error in updating service </div>";
                    return self::$errorMessage;
                }
            }
        }//END

        /***
         * @param $request
         * @return false
         * @throws Exception
         * Delete service method
         */
        public static function deleteService($request)
        {
            self::$requestResult = parent::deleteQuery(self::$tableName,"id",$request);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END



    }