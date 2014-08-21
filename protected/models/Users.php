<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $uid
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $password
 * @property string $userType
 * @property string $profilePic
 * @property string $contact
 * @property string $createdOn
 * @property integer $status
 * @property string $updatedOn
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			array('firstName, lastName, email, password, contact,userType, verifyCode', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('firstName, lastName, email, password, profilePic, createdOn, updatedOn', 'length', 'max'=>256),
			array('userType', 'length', 'max'=>7),
			array('contact', 'length', 'max'=>80),
                        array('email','unique','message'=>'Your account resgisterd with the enterd email.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, firstName, lastName, email, userType, contact, createdOn, status', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'email' => 'Email',
			'password' => 'Password',
			'userType' => 'User Type',
			'profilePic' => 'Profile Pic',
			'contact' => 'Contact',
			'createdOn' => 'Created On',
			'status' => 'Status',
			'updatedOn' => 'Updated On',
                        'verifyCode'=>'Verification Code',
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

		$criteria->compare('uid',$this->uid);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('userType',$this->userType,true);
		$criteria->compare('profilePic',$this->profilePic,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('createdOn',$this->createdOn,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('updatedOn',$this->updatedOn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getPass($id){
            $user = Users::model()->findByPK($id);
            $password = $user->password;
            return $password;
        }
}
