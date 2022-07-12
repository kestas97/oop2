<?php

namespace Model;

use Core\AbstractModel;
use Core\Interfaces\ModelInterface;
use Helper\DBHelper;

class Message extends AbstractModel implements ModelInterface
{
    protected const TABLE = 'messages';

    private  $name;

    private  $surname;

    private $email;

    private  $message;

    public function __construct($id = null)
    {

        if($id !== null){
            $this->load($id);
        }

    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed
     */
    public function setName( $name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed
     */
    public function setSurname( $surname)
    {
        $this->surname = $surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed
     */
    public function setMessage( $message)
    {
        $this->message = $message;
    }

    public function assignData()
    {
        $this->data = [
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'message' => $this->message,

        ];
    }

    public function load($id)
    {
        $db = new DBHelper();
        $msg = $db->select()->from(self::TABLE)->where('id', $id)->getOne();
        if(!empty($msg)){
            $this->id = $msg['id'];
            $this->name = $msg['name'];
            $this->surname = $msg['surname'];
            $this->email = $msg['email'];
            $this->message = $msg['message'];

        }
        return $this;
    }

    public static function getAllMessages()
    {
        $db = new DBHelper();
        $data = $db->select()->from(self::TABLE)->get();
        $messages = [];

        foreach ($data as $element){
            $message = new Message();
            $message->load((int)$element['id']);
            $messages[] = $message;
        }

        return $messages;
    }

}
