<?php
    include(ROOT_PATH. '/bootstrap/bootstrap.php');

    class Blog extends Model
    {
        private static $tableName = "blog";
        private static $validatorCheck;
        private static $requestResult;
        private static $successMessage;
        private static $errorMessage;
        private static $queryString;

        /***
         * @param $request
         * @return string
         * @throws Exception
         * Blog create Method
         */
        public static function blogCreate($request)
        {
            $validator = [
                'title'     => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'author'    => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'body'      => ['required', 'min' => 150, 'trim'],
                'image'     => ['required',  'trim']
            ];

            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $file_name = date('dmYHis').str_replace(" ", "", basename($_FILES["image"]["name"]));
                $file_tmp =$_FILES['image']['tmp_name'];
                $request = [
                    'title'   => $request['title'],
                    'author'  => $request['author'],
                    'body'    => $request['body'],
                    'image'   => $file_name,
                ];
                $path = move_uploaded_file($file_tmp,ROOT_PATH."/layouts/uploads/".$file_name);
                if ($path) {
                    self::$queryString = parent::createQuery(self::$tableName,$request);
                    if (self::$queryString) {
                        self::$successMessage = "<div class='alert alert-success'> Blog post created successfully </div>";
                        return self::$successMessage;
                    } else {
                        self::$errorMessage = "<div class='alert alert-danger'>Error in crating blog post </div>";
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
         * Update blog Method
         */
        public static function updateBlog($id,$request)
        {
            $validator = [
                'title'     => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'author'    => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'body'      => ['required', 'min' => 150, 'trim']
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'author' => $request['author'],
                    'title'      => $request['title'],
                    'body' => $request['body'],
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
         * @return false
         * @throws Exception
         * Get all blog Method
         */
        public static function getAllBlog()
        {
            self::$requestResult = parent::readQuery(self::$tableName);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END

        /***
         * @return false
         * @throws Exception
         * Get all blog Method
         */
        public static function recentBlog($limit)
        {
            self::$requestResult = parent::readQuery(self::$tableName,$limit);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END

        /***
         * @param $id
         * @return array|false
         * Find blog method
         */
        public static function findBlog($id)
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
         * Delete blog Method
         */
        public static function delBlogById($id)
        {
            self::$requestResult = parent::deleteQuery(self::$tableName,"id",$id);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END
    }