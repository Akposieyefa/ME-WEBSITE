<?php
    /**
     * this is the root format file
     * package built by 
     * Orutu Akposieyefa Williams 
     * Twitter => @Orutu_AW
     * Phone => 08100788859
     * Email => orutu1@gmail.com
    */
    class Format
    {
        private static $mainDate;
        /***
         * @param $date
         * @return false|string
         * Format Date Method
         */
        public static function formatDate($date)
        {
           self::$mainDate = date("l, jS F Y", strtotime($date));
            return self::$mainDate;
        }//End

        public  static  function shortDate($date){
            self::$mainDate = date("jS F Y", strtotime($date));
            return self::$mainDate;
        }

        /***
         * @param $text
         * @param int $limit
         * @return string
         * Text Shorten Method
         */
        public static function textShorten($text, $limit = 400)
        {
            $text = $text . " ";
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $text = $text . ".....";
            return $text;
        }//End

    }
