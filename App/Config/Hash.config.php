<?php
/**
     * this is the root hash file 
     * this class is used for password hashing
     * package built by 
     * Orutu Akposieyefa Williams 
     * Twitter => @Orutu_AW
     * Phone => 08100788859
     * Email => orutu1@gmail.com
     */
	class Hash
	{
		private static  $md5;
		private static  $sha1;
		private static  $crypt;
		private static  $password_peppered;
		private static  $hash;
		private static  $salt = 'st';
		private static  $pepper = 'foIwUVmkKGrGucNJMOkxkvcQ79iPNzP5OKlbIdGPCMTjJcDYnR';
		private static  $error;

        /***
         * @param $password
         * @return false|string|null
         * Make Hash Method
         */
		public static function MakeHash($password) 
		{
			try {
				
				self::$md5 = md5($password);
				self::$sha1 = sha1(self::$md5);
				self::$crypt = crypt(self::$sha1,self::$salt);

				self::$password_peppered = hash_hmac('sha256', self::$crypt, self::$pepper);
				return self::$hash = password_hash(self::$password_peppered, PASSWORD_BCRYPT);

			} catch (Exception $e) {
				
				self::$error = "Password Hash Error: " . $e->getMessage();
				return self::$error;
				
			}
		    
		}//End of Make Hash

        /***
         * @param $password
         * @param $hash
         * @return bool|string
         * Verify Hash Method
         */
		public static function verifyHash($password,$hash)
		{ 
			try {
				
				self::$md5 = md5($password);
				self::$sha1 = sha1(self::$md5);
				self::$crypt = crypt(self::$sha1,self::$salt);
			
				self::$password_peppered = hash_hmac('sha256', self::$crypt, self::$pepper);
			
				if (password_verify(self::$password_peppered, $hash)) {
					return true;
				} else {
					return false;
				}

			} catch (Exception $e) {
				
				self::$error = "Password Verify Error: " . $e->getMessage();
				return self::$error;
				
			}
	        
		}//End of password verify

	}


