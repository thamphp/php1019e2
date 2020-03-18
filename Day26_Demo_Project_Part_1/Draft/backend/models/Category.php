<?php
require_once 'models/Model.php';
class Category extends Model {
  //khai báo các thuộc tính của category
  public $id;
  public $name;
  public $avatar;
  public $description;
  public $status;
  public $created_at;
  public $updated_at;

  public function insert() {
    //chuẩn bị câu truy vấn
    $obj_insert = $this->connection->prepare("INSERT INTO categories(`name`, `avatar`, `description`, `status`) VALUES (:name, :avatar, :description, :status)");
    //gán giá trị cho các param trong câu truy vấn
    $arr_insert = [
      ':name' => $this->name,
      ':avatar' => $this->avatar,
      ':description' => $this->description,
      ':status' => $this->status,
    ];

    return $obj_insert->execute($arr_insert);
  }
}