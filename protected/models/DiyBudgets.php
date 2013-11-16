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
			array('user_id, date_created, likes, dislikes', 'required'),
			array('likes, dislikes', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, date_created, likes, dislikes, comment', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'date_created' => 'Date Created',
			'likes' => 'Likes',
			'dislikes' => 'Dislikes',
			'comment' => 'Comment',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('likes',$this->likes,true);
		$criteria->compare('dislikes',$this->dislikes,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function saveDIY($userId,$new=NULL,$auto=NULL,$comment=NULL){
		$model = new DiyBudgets;
		$model->user_id = $userId;
		$model->likes = 0;
		$model->dislikes = 0;
		$model->comment = $comment;
		$model->save(false);
		DiyBreakdown::saveBreakDown($model->id,$new,$auto);
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
	public static function listAll(){
		$model = Yii::app()->db->createCommand()
				->select('t1.id, t1.user_id, t1.date_created, t1.likes, t1.dislikes,t1.comment, t2.full_name')
				->from('diy_budgets t1')
				->leftJoin("users t2", "t1.user_id = t2.id");

		$countQuery = clone $model;
		$countQuery->select('count(*) as count');
		$count = $countQuery->queryScalar();
		$pages = new CPagination($count);
		$pages->pageSize = Yii::app()->params['pageSize']; // results per page
		$pages->pageVar = "vote";
		//$offset=$pages->getOffset();
		//$limit=$pages->getLimit();
		$model->limit($pages->getLimit(),$pages->getOffset());

		$data = $model->queryAll();

		$result = array('data'=>$data,'pages'=>$pages,"count"=>$count);

		return $result;
	}
	public static function getCustomUserBudget($id)
	{
		$query = Yii::app()->db->createCommand()
				->select('*')
				->from('diy_budgets')
				->where('user_id = :userId', array(':userId'=>$id))
				->queryAll();

		return $query;
	}
}