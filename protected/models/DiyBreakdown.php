<?php

/**
 * This is the model class for table "diy_breakdown".
 *
 * The followings are the available columns in table 'diy_breakdown':
 * @property integer $diy_id
 * @property string $department
 * @property string $owner
 * @property string $project_name
 * @property double $budget_amt
 */
class DiyBreakdown extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diy_breakdown';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('diy_id, department, owner, project_name, budget_amt, type', 'required'),
			array('diy_id, type', 'numerical', 'integerOnly'=>true),
			array('budget_amt', 'numerical'),
			array('department', 'length', 'max'=>150),
			array('owner', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('diy_id, department, owner, project_name, budget_amt, type', 'safe', 'on'=>'search'),
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
			'diy_id' => 'Diy',
			'department' => 'Department',
			'owner' => 'Owner',
			'project_name' => 'Project Name',
			'budget_amt' => 'Budget Amt',
			'type' => 'Type',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('diy_id',$this->diy_id);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('budget_amt',$this->budget_amt);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiyBreakdown the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function saveBreakDown($diyId,$new=NULL,$auto=NULL){
		
		if(isset($new)){
			for($i=0;$i<sizeOf($new);$i++){
				$newAppro = explode("|",$new[$i]);
				$model = new DiyBreakdown;

				$model->diy_id = $diyId;
				$model->department = $newAppro[0];
				$model->owner = $newAppro[1];
				$model->project_name = $newAppro[2];
				$model->budget_amt = $newAppro[3];
				$model->type = 1;
				$model->save(false);
			}
		}
		if(isset($auto)){
			for($i=0;$i<sizeOf($auto);$i++){
				$autoAppro = explode("|",$auto[$i]);
				$model = new DiyBreakdown;

				$model->diy_id = $diyId;
				$model->department = $autoAppro[0];
				$model->owner = $autoAppro[1];
				$model->project_name = $autoAppro[2];
				$model->budget_amt = $autoAppro[3];
				$model->type = 2;
				$model->save(false);
			}
		}

		return true;
	}

	public static function getDiyDetails($id)
	{
		$query = Yii::app()->db->createCommand()
				->select('*')
				->from('diy_breakdown')
				->where('diy_id = :diyId', array(':diyId'=>$id));

		Common::pre($query->queryAll());exit;
	}
}
