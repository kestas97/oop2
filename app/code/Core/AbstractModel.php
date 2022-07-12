<?php

namespace Core;

use Helper\DBHelper;
use Helper\Logger;

class AbstractModel
{
    protected array $data;

    protected int $id;

    protected const TABLE = '';

    public function getId()
    {
        return $this->id;
    }


    public function save()
    {
        $this->assignData();
        if (!isset($this->id)) {
            $this->create();
//            Logger::log('create');
        } else {
//            Logger::log('update');
            $this->update();
        }
    }

    protected function update()
    {
        $db = new DBHelper();
        $db->update(static::TABLE, $this->data)->where('id', $this->id)->exec();
    }

    protected function create()
    {
        $db = new DBHelper();
        $db->insert(static::TABLE, $this->data)->exec();
    }

    protected function assignData()
    {
        $this->data = [];
    }

    public function delete()
    {
        $db = new DBHelper();
        $db->delete()->from(static::TABLE)->where('id', $this->id)->exec();
    }

}