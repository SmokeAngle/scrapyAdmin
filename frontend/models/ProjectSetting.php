<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_setting".
 *
 * @property integer $iPid
 * @property string $szName
 * @property string $szDomain
 * @property string $szStartUrl
 * @property string $szStartUrlReg
 * @property string $szUrlReg
 * @property string $szTitleXPath
 * @property string $szDesc
 * @property integer $iTotalPage
 * @property integer $iCurrentPage
 * @property integer $iSuccessPage
 * @property integer $iFailPage
 * @property integer $iStatus
 * @property string $dtModifyTime
 * @property string $dtCreateTime
 *
 * @property ProjectDetailPage[] $projectDetailPages
 */
class ProjectSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['szName', 'szDomain', 'iTotalPage', 'dtCreateTime'], 'required'],
            [['szDesc'], 'string'],
            [['iTotalPage', 'iCurrentPage', 'iSuccessPage', 'iFailPage', 'iStatus'], 'integer'],
            [['dtModifyTime', 'dtCreateTime'], 'safe'],
            [['szName', 'szDomain', 'szStartUrlReg', 'szTitleXPath'], 'string', 'max' => 255],
            [['szStartUrl', 'szUrlReg'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iPid' => 'I Pid',
            'szName' => 'Sz Name',
            'szDomain' => 'Sz Domain',
            'szStartUrl' => 'Sz Start Url',
            'szStartUrlReg' => 'Sz Start Url Reg',
            'szUrlReg' => 'Sz Url Reg',
            'szTitleXPath' => 'Sz Title Xpath',
            'szDesc' => 'Sz Desc',
            'iTotalPage' => 'I Total Page',
            'iCurrentPage' => 'I Current Page',
            'iSuccessPage' => 'I Success Page',
            'iFailPage' => 'I Fail Page',
            'iStatus' => 'I Status',
            'dtModifyTime' => 'Dt Modify Time',
            'dtCreateTime' => 'Dt Create Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectDetailPages()
    {
        return $this->hasMany(ProjectDetailPage::className(), ['iPid' => 'iPid']);
    }
}
