<?php
    include(ROOT_PATH. '/bootstrap/bootstrap.php');

    class Testimonial extends Model
    {
        private static $tableName = "testimonials";
        private static $validatorCheck;
        private static $requestResult;
        private static $successMessage;
        private static $errorMessage;
        private static $queryString;

        /***
         * @param $request
         * @return string
         * @throws Exception
         * CREATE TESTIMONIAL METHOD
         */
        public static function testimonialCreate($request)
        {
            $validator = [
                'name'       => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'portfolio'    => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'image'      => ['required'],
                'remark'     => ['required','min' => 20, 'trim']
            ];

            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $file_name = date('dmYHis').str_replace(" ", "", basename($_FILES["image"]["name"]));
                $file_tmp =$_FILES['image']['tmp_name'];
                $request = [
                    'name'   => $request['name'],
                    'portfolio'  => $request['portfolio'],
                    'image'    => $file_name,
                    'remark'   => $request['remark']
                ];
                $path = move_uploaded_file($file_tmp,ROOT_PATH."/layouts/testimonials/".$file_name);
                if ($path) {
                    self::$queryString = parent::createQuery(self::$tableName,$request);
                    if (self::$queryString) {
                        self::$successMessage = "<div class='alert alert-success'> Testimonial  created successfully </div>";
                        return self::$successMessage;
                    } else {
                        self::$errorMessage = "<div class='alert alert-danger'>Error in process </div>";
                        return self::$errorMessage;
                    }
                } else {
                    self::$errorMessage = "<div class='alert alert-danger'>Error image not moved to folder</div>";
                    return self::$errorMessage;
                }
            }
        }//END


        /***
         * @param $id
         * @param $request
         * @return string
         * @throws Exception
         * UPDATE TESTIMONIAL METHOD
         */
        public static function updateTestimonial($id,$request)
        {
            $validator = [
                'name'       => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'portfolio'    => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'remark'     => ['required','min' => 20, 'trim']
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'name'   => $request['name'],
                    'portfolio'  => $request['portfolio'],
                    'remark'   => $request['remark']
                ];

                self::$queryString = parent::updateQuery(self::$tableName,$request,"id",$id);
                if (self::$queryString) {
                    self::$successMessage = "<div class='alert alert-success'> Testimonial update successfully </div>";
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
         * GET ALL TESTIMONIALS
         */
        public static function getAllTestimonial()
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
         * FIND TESTIMONIAL METHOD
         */
        public static function findTestimonial($id)
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
         * @return string
         * @throws Exception
         * DELETE TESTIMONIAL
         */
        public static function delTestimonialById($id)
        {
            self::$requestResult = parent::deleteQuery(self::$tableName,"id",$id);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END
    }