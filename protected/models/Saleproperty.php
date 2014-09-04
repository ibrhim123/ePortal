<?php

/**
 * This is the model class for table "saleproperty".
 *
 * The followings are the available columns in table 'saleproperty':
 * @property integer $spid
 * @property integer $pid
 * @property string $category
 * @property string $title
 * @property string $descr
 * @property string $mainPic
 * @property string $gallPics
 * @property string $beds
 * @property string $baths
 * @property string $size
 * @property string $price
 * @property string $location
 * @property string $city
 */
class Saleproperty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'saleproperty';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, title, descr, beds, baths, size, price, location, city', 'required'),
			array('pid', 'numerical', 'integerOnly'=>true),
			array('category', 'length', 'max'=>230),
			array('title, mainPic, location', 'length', 'max'=>256),
			array('beds, baths, size', 'length', 'max'=>40),
			array('price', 'length', 'max'=>100),
			array('city', 'length', 'max'=>140),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('spid, pid, category, title, descr, mainPic, gallPics, beds, baths, size, price, location, city', 'safe', 'on'=>'search'),
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
			'spid' => 'Spid',
			'pid' => 'Pid',
			'category' => 'Category',
			'title' => 'Title',
			'descr' => 'Descr',
			'mainPic' => 'Main Pic',
			'gallPics' => 'Gall Pics',
			'beds' => 'Beds',
			'baths' => 'Baths',
			'size' => 'Size',
			'price' => 'Price',
			'location' => 'Location',
			'city' => 'City',
			
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

		$criteria->compare('spid',$this->spid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('descr',$this->descr,true);
		//$criteria->compare('mainPic',$this->mainPic,true);
		//$criteria->compare('gallPics',$this->gallPics,true);
		//$criteria->compare('beds',$this->beds,true);
		//$criteria->compare('baths',$this->baths,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('city',$this->city,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Saleproperty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
