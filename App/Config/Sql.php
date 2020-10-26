<?php
    include_once('DB.php');
    /**
     * this is the root sql file
     * package built by 
     * Orutu Akposieyefa Williams 
     * Twitter => @Orutu_AW
     * Phone => 08100788859
     * Email => orutu1@gmail.com
    */
    class Sql extends DB
    {
        public static $dbCreate;
        /**
         * this function is use to create a table
         * in your database
         */
        public static function createTable($table)
        {
            try {
                self::$dbCreate = parent::dbConnect()->exec($table);
                return self::$dbCreate;
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }

        public static function addColume($sql)
        {
            try {
                $sql = "ALTER TABLE customers ADD email VARCHAR(50) NOT NULL";
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }


        /**
         * this function is used to drop a table 
         * in your database
         */
        public static function dropTable($tablename)
        {
            try {
                $sql = "DROP TABLE table_name";
                self::$dbCreate = parent::dbConnect()->exec($sql);
                return self::$dbCreate;
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


//CREATE TABLE Orders (
//    OrderID int NOT NULL,
//    OrderNumber int NOT NULL,
//    PersonID int,
//    PRIMARY KEY (OrderID),
//    FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
//);

//CREATE TABLE comments (
//    id int NOT NULL,
//    name varchar(50) NOT NULL,
//    email varchar(30) NOT NULL,
//    message text NOT NULL,
//    created_at date,
//    post_id int NOT NULL,
//    PRIMARY KEY (id),
//    FOREIGN KEY (post_id) REFERENCES blog(id)
//);
    Sql::createTable();
    
?>