<?php

/**
 * This is the model class for table "diy_breakdown".
 *
 * The followings are the available columns in table 'diy_breakdown':
 * @property integer $diy_id
 * @property string $department
 * @property string $project_name
 * @property double $budget_amt
 */
class DiyBreakdown extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DiyBreakdown the static model class
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
			array('diy_id, department, project_name, budget_amt', 'required'),
			array('diy_id', 'numerical', 'integerOnly'=>true),
			array('budget_amt', 'numerical'),
			array('department, project_name', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('diy_id, department, project_name, budget_amt', 'safe', 'on'=>'search'),
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
			'project_name' => 'Project Name',
			'budget_amt' => 'Budget Amt',
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

		$criteria->compare('diy_id',$this->diy_id);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('budget_amt',$this->budget_amt);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}