<?php

/**
 * This is the model class for table "replies".
 *
 * The followings are the available columns in table 'replies':
 * @property integer $rplyId
 * @property integer $pid
 * @property integer $uid
 * @property string $userType
 * @property string $phone
 * @property string $message
 * @property string $repliedOn
 */
class Replies extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'replies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, uid, userType, phone, message, repliedOn', 'required'),
			array('pid, uid', 'numerical', 'integerOnly'=>true),
			array('userType, phone', 'length', 'max'=>60),
			array('repliedOn', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rplyId, pid, uid, userType, phone, message, repliedOn', 'safe', 'on'=>'search'),
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
			'rplyId' => 'Rply',
			'pid' => 'Pid',
			'uid' => 'Uid',
			'userType' => 'User Type',
			'phone' => 'Phone',
			'message' => 'Message',
			'repliedOn' => 'Replied On',
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

		$criteria->compare('rplyId',$this->rplyId);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('userType',$this->userType,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('repliedOn',$this->repliedOn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Replies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
