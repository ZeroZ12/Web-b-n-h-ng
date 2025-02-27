<?php

class User extends BaseModel
{
    public function all()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findUserOfEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function emailExists($email)
    {
        $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetchColumn() > 0; // Trả về true nếu có email trong DB
    }

    public function create($data)
    {
        $sql = "INSERT INTO users (fullname, email, password, phone, address, role) 
            VALUES (:fullname, :email, :password, :phone, :address, :role)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(
            $data
        );
    }

    public function update($id, $data)
    {
        $sql = "UPDATE users SET fullname=:fullname,phone=:phone, address=:address, role=:role, active=:active WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        
        $data['id'] = $id;
        $stmt->execute($data);
    }
    public function updateUser($id,$data)
    {
        $sql = "UPDATE users SET fullname=:fullname,phone=:phone,address=:address,email=:email WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        
        $data['id'] = $id;
        $stmt->execute($data);
    }
    public function updateUserA($id,$data)
    {
        $sql = "UPDATE users SET fullname=:fullname,phone=:phone,address=:address,email=:email,role=:role,password=:password WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        
        $data['id'] = $id;
        $stmt->execute($data);
    }
    public function updateActive($id, $active)
    {
        $sql = "UPDATE users SET active=:active WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'active'=>$active]);
    }
}
