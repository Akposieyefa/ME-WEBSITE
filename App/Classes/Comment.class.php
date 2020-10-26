<?php
include(ROOT_PATH. '/bootstrap/bootstrap.php');


class Comment extends  Model
{
    private static $tableName = "comments";
    private static $validatorCheck;
    private static $requestResult;
    private static $successMessage;
    private static $errorMessage;
    private static $queryString;

    /***
     * @param $request
     * @return string
     * @throws Exception
     * Comments create Method
     */
    public static function commentCreate($request)
    {

            $request = [
                'name'      => $request['name'],
                'email' => $request['email'],
                'comment' => $request['comment'],
                'created_at' => date("H:i:s"),
                'post_id' => $request['id']
            ];
            self::$queryString = parent::createQuery(self::$tableName,$request);
            if (self::$queryString) {
                self::$successMessage = "<div class='alert alert-success'> Blog post created successfully </div>";
                return self::$successMessage;
            } else {
                self::$errorMessage = "<div class='alert alert-danger'>Error in crating blog post </div>";
                return self::$errorMessage;
            }

    }//END

    /***
     * @param $id
     * @return array|false
     * Find single post comment
     */
    public static function findPostComment($id)
    {
        self::$requestResult = parent::readOneQuery(self::$tableName, "post_id",$id);
        if (self::$requestResult) {
            return self::$requestResult;
        }else {
            return false;
        }
    }//END

}