<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property integer $role
 */
class Admin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, first_name, last_name', 'required', 'on'=>'register'),
			array('first_name, last_name', 'required', 'except'=>'login'),
			array('email', 'match', 'not'=>true, 'pattern'=>'/[^a-zA-Z0-9\-\_\.\s\@]/', 'message'=>'Invalid email addres'),
			array('role', 'numerical', 'integerOnly'=>true),
			array('username, email, first_name, last_name', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, first_name, last_name, role', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'role' => 'Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function login()
	{
		$TPassword = new TPassword();
		$this->setAttribute('password', $TPassword->hash($this->password));

		if($this->_identity === null)
		{
			$this->_identity = new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}

		if($this->_identity->errorCOde===UserIdentity::ERROR_NONE){
			Yii::app()->user->login($this->_identity);
			return true;
		} else {
			Yii::app()->user->setFlash('msg','Invalid username/password');
			Yii::app()->user->setFlash('msgClass','alert alert-error');
			return false;
		}
	}
}