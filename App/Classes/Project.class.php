<?php
    include(ROOT_PATH. '/bootstrap/bootstrap.php');

    class Project extends  Model
    {
        private static $tableName = "projects";
        private static $validatorCheck;
        private static $requestResult;
        private static $successMessage;
        private static $errorMessage;
        private static $queryString;

        /***
         * @param $request
         * @return string
         * @throws Exception
         * Project create Method
         */
        public static function projectCreate($request)
        {
            $validator = [
                'title'                 => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'organization_name'      => ['required', 'min' => 6,  'trim'],
                'image'                 => ['required'],
                'project_date'          => ['required'],
                'description'           => ['required', 'min' => 100, 'trim'],
                'problem'               => ['required', 'min' => 6,  'trim'],
                'solution'              => ['required', 'min' => 6, 'trim'],
                'result'                => ['required', 'min' => 6, 'trim'],
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $file_name = date('dmYHis').str_replace(" ", "", basename($_FILES["image"]["name"]));
                $file_tmp =$_FILES['image']['tmp_name'];

                $request = [
                    'title'     => $request['title'],
                    'organization_name'  => $request['organization_name'],
                    'project_date'      => $request['project_date'],
                    'description'       => $request['description'],
                    'problem'           => $request['problem'],
                    'solution'          => $request['solution'],
                    'result'            => $request['result'],
                    'image'             => $file_name,
                ];
                $path = move_uploaded_file($file_tmp,ROOT_PATH."/layouts/projects/".$file_name);
                if ($path) {
                    self::$queryString = parent::createQuery(self::$tableName,$request);
                    if (self::$queryString) {
                        self::$successMessage = "<div class='alert alert-success'> Project created successfully </div>";
                        return self::$successMessage;
                    } else {
                        self::$errorMessage = "<div class='alert alert-danger'>Error in crating project </div>";
                        return self::$errorMessage;
                    }
                } else {
                    self::$errorMessage = "<div class='alert alert-danger'>Error image not moved to folder</div>";
                    return self::$errorMessage;
                }
            }
        }//END


        /***
         * @return false
         * @throws Exception
         * Get all project method
         */
        public static function getAllProject()
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
         * Find single project method
         */
        public static function findProject($id)
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
         * Update product Method
         */
        public static function updateProject($id,$request)
        {
            $validator = [
                'title'                 => ['required', 'min' => 6, 'max' => 150, 'trim'],
                'organization_name'      => ['required', 'min' => 6,  'trim'],
                'project_date'          => ['required'],
                'description'           => ['required', 'min' => 100, 'trim'],
                'problem'               => ['required', 'min' => 6,  'trim'],
                'solution'              => ['required', 'min' => 6, 'trim'],
                'result'                => ['required', 'min' => 6, 'trim'],
            ];
            self::$validatorCheck = Validator::coreValidator($request, $validator);
            if (Validator::error()) {
                Validator::errorLoop(Validator::error());
            }else {
                $request = [
                    'title'     => $request['title'],
                    'organization_name'  => $request['organization_name'],
                    'project_date'      => $request['project_date'],
                    'description'       => $request['description'],
                    'problem'           => $request['problem'],
                    'solution'          => $request['solution'],
                    'result'            => $request['result'],
                ];
                self::$queryString = parent::updateQuery(self::$tableName,$request,"id",$id);
                if (self::$queryString) {
                    self::$successMessage = "<div class='alert alert-success'> Project profile update successfully </div>";
                    return self::$successMessage;
                } else {
                    self::$errorMessage = "<div class='alert alert-danger'>Error in updating project profile </div>";
                    return self::$errorMessage;
                }
            }
        }//END

        /***
         * @param $request
         * @return false
         * @throws Exception
         * Delete project method
         */
        public static function deleteProject($id)
        {
            self::$requestResult = parent::deleteQuery(self::$tableName,"id",$id);
            if (self::$requestResult) {
                return self::$requestResult;
            }else {
                return false;
            }
        }//END


    }