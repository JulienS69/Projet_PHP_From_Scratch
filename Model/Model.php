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

    static function find($id)
    {
        $pdo = self::connection();
        $table = strtolower(get_called_class());
        $model = get_called_class();
        $sql = "SELECT * FROM $table WHERE id = ?";
        $req = $pdo->prepare($sql);
        $req->execute(array($id));
        $result = $req->fetch();
        $obj = new $model();
        foreach ($result as $key => $value){
            $obj->$key = $value;
        }
        return $obj;
    }

    static function create(array $data){
        $pdo = self::connection();
        $table = strtolower(get_called_class());
        $sql = "insert into $table values ()";
        $req = $pdo->prepare($sql);
        $req->execute();
        $id = $pdo->lastInsertId();
        self::update($id, $data);
    }

    static function delete($id){
        $pdo = self::connection();
        $table = strtolower(get_called_class());
        $sql = "DELETE FROM $table where id = ?";
        $req = $pdo->prepare($sql);
        $req->execute(array($id));
    }

    static function update(int $id, array $data){
        $pdo = self::connection();
        $table = strtolower(get_called_class());
        foreach ($data as $key => $value) {
            $sql = "update $table set $key = ? where id = ?";
            $req = $pdo->prepare($sql);
            $req->execute(array($value, $id));
        }
    }

    function save(){
        $table = strtolower(get_called_class());
        $db = $this->connection();
        $pk = $this->id;
        if($pk == null) {
            $st = $db->prepare("insert into $table Values ()");
            $st->execute();
            $st = $db->prepare("select MAX(id) as id from $table ");
            $st->execute();
            $row = $st->fetch(PDO::FETCH_ASSOC);
            $this->id = $row["id"];
        }
        foreach ($this->fields as $field){
            $st = $db->prepare("update $table set $field = VALUE WHERE id=:id");
            $st->bindValue("Value",$this->$field);
            $st->bindValue("id",$this->id);
            $st->execute();
        }
    }

    static function connection()
    {
        return  new PDO('mysql:host=localhost:3306;dbname=projet_yael;charset=utf8','root', '');
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

    function all2()
    {
        $array2=[];
        $db = $this->connection();
        $model=get_called_class();
        $table = strtolower(get_called_class());
        $st = $db->prepare('SELECT * FROM compte join client on compte.ClientId = client.id ');
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

//    function delete(){
//        $db=$this->connection();
//        $table=strtolower(get_called_class());
//        $st=$db->prepare("delete from $table where id=:id");
//        $st ->bindValue("id", $this->id);
//        $st ->execute();
//    }

}
