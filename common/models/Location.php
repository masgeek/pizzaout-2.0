<?php

namespace common\models;

use \common\models\base\Location as BaseLocation;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "location".
 */
class Location extends BaseLocation
{
    public static function GetActiveLocation()
    {
        $location = self::find()
            ->where(['ACTIVE' => true])
            ->all();

        $listData = ArrayHelper::map($location, 'LOCATION_ID', 'LOCATION_NAME');

        return $listData;
    }

    public static function GetAllLocations()
    {
        $location = self::find()
            ->all();

        $listData = ArrayHelper::map($location, 'LOCATION_ID', 'LOCATION_NAME');

        return $listData;
    }
}
