<?php

abstract class Model
{
    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    function find($id)
    {
        $db = $this->connection();

        $table = strtolower(get_called_class()); // exemple : vehicle
        $st = $db->prepare("Select * FROM " . $table . " WHERE id = " . $id);
        $st->execute();

        return $st->fetch(PDO::FETCH_ASSOC);
    }
    function save(){
        $table = strtolower(get_called_class());
        $db = $this->connection();
        $pk = $this->id;
        if($pk == null) {
            $st = $db->prepare("insert into $table default 
            Values returning id");
            $st->execute();
            $row = $st->fetch(PDO::FETCH_ASSOC);
            $this->id = $row["id"];
        }

        foreach ($this->$fields as $field){
            $st = $db->prepare("update $table set $field = VALUE WHERE id=:id");
            $st->bindValue("Value",$this->$field);
            $st->bindValue("id",$this->id);
            $st->execute();
        }
    }
    function connection()
    {
        return  new PDO('mysql:host=localhost:3306;dbname=creditsiov2;charset=utf8','root', '');
    }

    function all()
    {
        $array2=[];
        $db = $this->connection();
        $model=get_called_class();
        $table = strtolower(get_called_class());
        $st = $db->prepare('SELECT * FROM '. $table);
        $st -> execute();
        while($LRS = $st->fetch(PDO::FETCH_ASSOC)){
            $objet= new $model();
            foreach ($LRS as $key => $value){
                $objet->$key = $value;
            }
//            var_dump($array2);
            $array2[] = $objet;
        }
        return $array2;
    }

    function delete(){
        $db=$this->connection();
        $table=strtolower(get_called_class());
        $st=$db->prepare("delete from $table where id=:id");
        $st ->bindValue("id", $this->id);
        $st ->execute();
    }

}
