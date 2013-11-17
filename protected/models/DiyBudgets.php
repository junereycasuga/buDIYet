<?php

/**
 * This is the model class for table "diy_budgets".
 *
 * The followings are the available columns in table 'diy_budgets':
 * @property integer $id
 * @property string $username
 * @property string $date_created
 * @property string $likes
 * @property string $dislikes
 */
class DiyBudgets extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DiyBudgets the static model class
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
		return 'diy_budgets';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, date_created, likes, dislikes', 'required'),
			array('username', 'length', 'max'=>150),
			array('likes, dislikes', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, date_created, likes, dislikes', 'safe', 'on'=>'search'),
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
			'date_created' => 'Date Created',
			'likes' => 'Likes',
			'dislikes' => 'Dislikes',
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
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('likes',$this->likes,true);
		$criteria->compare('dislikes',$this->dislikes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function saveDIY($userId,$new,$auto){

		$model = self::model();
		$model->user_id = $userId;
		if($model->save()){
			DiyBreakdown::saveBreakDown($diyId,$new,$auto);
		}



	}

	public function upVote($id)
	{
		$model = self::model()->findByPk($id);
		
		if($model){
			$model->likes += 1;
			$model->save();
		} else {
			throw new CHttpException(403);
		}
	}

	public function downVote($id)
	{
		$model = self::model()->findByPk($id);

		if($model){
			$model->dislikes -= 1;
			$model->save();
		} else {
			throw new CHttpException(403);
		}

	}
}