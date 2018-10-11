<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Not_bill]].
 *
 * @see Not_bill
 */
class RedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Not_bill[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Not_bill|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
