<?php

namespace common\models;

use \common\models\base\Status as BaseStatus;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tb_status".
 */
class Status extends BaseStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
            [
                [['STATUS_NAME'], 'required'],
                [['RANK', 'WORKFLOW'], 'integer'],
                [['STATUS_NAME'], 'string', 'max' => 30],
                [['STATUS_DESC'], 'string', 'max' => 100],
                [['COLOR', 'SCOPE'], 'string', 'max' => 10],
                [['STATUS_NAME'], 'unique'],
                [['RANK'], 'unique']
            ]);
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return $this->attributeLabels();
    }

    public static function GetStatus($order_id, array $scope = ['ALL'], $workflow = 0)
    {

        $exclusion_list = self::StatusExclusionList($order_id);

        $status = self::find()
            ->where(['SCOPE' => $scope])
            ->andWhere(['WORKFLOW' => $workflow])
            ->andWhere(['NOT IN', 'STATUS_NAME', $exclusion_list])
            ->orderBy(['RANK' => SORT_ASC])
            ->all();

        $listData = ArrayHelper::map($status, 'STATUS_NAME', 'STATUS_DESC');

        return $listData;
    }

    /**
     * @param $order_id
     * @return array
     */
    public static function StatusExclusionList($order_id)
    {
        $exclusion_list = [];
        $tracked_status = OrderTracking::find()
            ->select(['STATUS'])
            ->where(['ORDER_ID' => $order_id])
            ->asArray()
            ->all();

        foreach ($tracked_status as $key => $value) {
            $exclusion_list[] = $value['STATUS'];
        }

        return $exclusion_list;
    }
}
