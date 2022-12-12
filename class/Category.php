<?php
class Category extends Db{
    function all(){
        $sql='select*from category';
        return $this->select($sql);
    }
    function delete($id){
        $sql='delete from category whare cat_id=?';
        $arr=[$id];
        return $this->update($sql, $id);
    }
    function insert($id, $name){
        $sql='insert into category(cat_id, cat_name) values(?,?)';
        $arr=[$id, $name];
        return $this->update($sql, $arr);
    }
}