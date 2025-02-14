<?php

class Category extends BaseModel
{
    public function all()
    {
        $sql = "SELECT * FROM categories WHERE soft_delete=0";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO categories(cate_name, type) VALUES (:cate_name, :type)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute($data);
    }

    public function update($id,$data)
    {
        $sql = "UPDATE categories SET cate_name=:cate_name, type=:type WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $data['id'] = $id;
        $stmt->execute($data);
    }

    public function delete($id)
    {
        $sql = "UPDATE categories SET soft_delete=1 WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM categories WHERE id=:id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute(['id' => $id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}