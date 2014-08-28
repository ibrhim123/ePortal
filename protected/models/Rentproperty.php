<?php

/**
 * This is the model class for table "rentproperty".
 *
 * The followings are the available columns in table 'rentproperty':
 * @property integer $rpid
 * @property integer $pid
 * @property integer $category
 * @property integer $title
 * @property string $descr
 * @property integer $mainPic
 * @property string $gallPics
 * @property string $baths
 * @property string $beds
 * @property string $location
 * @property string $city
 * @property string $size
 * @property string $price
 * @property string $rentPolicy
 * @property string $amenty
 * @property string $furnished
 */
class Rentproperty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rentproperty';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, title, descr, baths, beds, location, city, size, price, rentPolicy', 'required'),
			array('pid', 'numerical', 'integerOnly'=>true),
			array('baths', 'length', 'max'=>190),
			array('beds', 'length', 'max'=>200),
			array('city, price', 'length', 'max'=>250),
			array('rentPolicy', 'length', 'max'=>100),
			array('furnished', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('category, title, descr, baths, beds, location, city, size, price, rentPolicy, amenty, furnished', 'safe', 'on'=>'search'),
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
			'rpid' => 'Rpid',
			'pid' => 'Pid',
			'category' => 'Category',
			'title' => 'Title',
			'descr' => 'Description',
			'mainPic' => 'Main Picture',
			'gallPics' => 'Gall Pictures',
			'baths' => 'Baths',
			'beds' => 'Beds',
			'location' => 'Location',
			'city' => 'City',
			'size' => 'Size',
			'price' => 'Price',
			'rentPolicy' => 'Rent Policy',
			'amenty' => 'Amenities',
			'furnished' => 'Furnished',
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

		$criteria->compare('rpid',$this->rpid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('category',$this->category);
		$criteria->compare('title',$this->title);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('baths',$this->baths,true);
		$criteria->compare('beds',$this->beds,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('rentPolicy',$this->rentPolicy,true);
		$criteria->compare('amenty',$this->amenty,true);
		$criteria->compare('furnished',$this->furnished,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rentproperty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
