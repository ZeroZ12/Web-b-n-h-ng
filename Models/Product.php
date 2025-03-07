<?php

class Product extends BaseModel
{
    public function all()
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function searchProductName($name)
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE name LIKE '%$name%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Hàm lấy ra các sản phẩm là LAPTOPGAMING
     * được xác định bởi thuộc tính type=1
     */
    public function listProductLaptop()
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE type=1 LIMIT 4";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    /**
     * Hàm lấy ra các sản phẩm không phải là laptop gaming
     * được xác định bởi type=0
     */
    public function listProductOtherLaptop()
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE type=0 LIMIT 8";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listPcComponent()
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE cate_name IN ('PCs') LIMIT 10";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listPcComponents()
    {
        $categories = ['Linh kiện PC','Ram','Main','Ổ cứng','Card','CPU'];
        $placeholders = implode(',', array_fill(0, count($categories), '?'));
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE cate_name IN ($placeholders) LIMIT 10";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($categories);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listProductInCategory($id)
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE c.id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($data)
    {
        $sql = "INSERT INTO products(name, image, price, price_sale, is_sale, quantity, description, status, category_id) 
            VALUES(:name, :image, :price, :price_sale, :is_sale, :quantity, :description, :status, :category_id)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'name' => $data['name'],
            'image' => $data['image'],
            'price' => $data['price'],
            'price_sale' => $data['price_sale'] ?? null,
            'is_sale' => $data['is_sale'] ?? 0,
            'quantity' => $data['quantity'],
            'description' => $data['description'],
            'status' => $data['status'],
            'category_id' => $data['category_id'],
        ]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE products 
            SET name=:name, image=:image, price=:price, price_sale=:price_sale, 
                is_sale=:is_sale, quantity=:quantity, description=:description, 
                status=:status, category_id=:category_id 
            WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        $data['id'] = $id; // Gán ID vào mảng dữ liệu
        $stmt->execute([
            'id' => $id,
            'name' => $data['name'],
            'image' => $data['image'],
            'price' => $data['price'],
            'price_sale' => $data['price_sale'] ?? null,
            'is_sale' => $data['is_sale'] ?? 0,
            'quantity' => $data['quantity'],
            'description' => $data['description'],
            'status' => $data['status'],
            'category_id' => $data['category_id'],
        ]);
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM products WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    /**
     * function find: lấy ra 1 bản ghi theo id
     * @id: mã sản phẩm cần tìm
     */
    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function listProductReload: lấy sản phẩm liên quan
    // @category_id: Mã danh mục
    public function listProductReload($category_id, $id)
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE c.id=:category_id AND p.id <> :id ORDER BY id DESC LIMIT 4";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'category_id' => $category_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
