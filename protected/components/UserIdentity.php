<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;

	public function authenticate()
	{
		if(strpos($this->username, '@') !== false){
			$userRecord = Admin::model()->findByAttributes(array('email'=>$this->username));
		} else {
			$userRecord = Admin::model()->findByAttributes(array('username'=>$this->username));
		}

		if($userRecord===null){
			return $this->errorCode=self::ERROR_USERNAME_INVALID;
		} else if($userRecord->password != $this->password){
			return $this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else {
			# set session
			$this->_id = $userRecord->id;
			$this->setState('userId', $userRecord->id);
			$this->setState('username', $userRecord->username);
			$this->setState('userEmail', $userRecord->email);
			$this->setState('userFirstname', $userRecord->first_name);
			$this->setState('userLastname', $userRecord->last_name);

			return $this->errorCode=self::ERROR_NONE;
		}
		exit;
	}

	public function getId()
	{
		return $this->_id;
	}
}