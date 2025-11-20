<?php
class DanhMuc
{
    public $conn;

    // Kết nối CSDL
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Danh sách danh mục
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM danh_muc_tour';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }
    //Thêm dữ liệu vào CSDL
    public function postData($ten, $mo_ta, $loai)
    {
        try {
            $sql = 'INSERT INTO danh_muc_tour (ten, mo_ta, loai)
                VALUES (:ten, :mo_ta, :loai)';

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':ten', $ten);
            $stmt->bindParam(':mo_ta', $mo_ta);
            $stmt->bindParam(':loai', $loai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    // Lây thống tin chi tiết
    public function getDetailData($id)
    {
        try {
            $sql = 'SELECT * FROM danh_muc_tour WHERE id = :id';

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    // Xóa dữ liệu trong CSDL
    public function deleteData($id)
    {
        try {
            $sql = 'DELETE FROM danh_mucs WHERE id = :id';

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    //Cập nhật dữ liệu vào CSDL
    public function updateData($id, $ten, $mo_ta, $loai)
    {
        try {
            $sql = 'UPDATE danh_muc_tour 
                SET ten = :ten, loai = :loai, mo_ta = :mo_ta
                WHERE id = :id';

            $stmt = $this->conn->prepare($sql);

            // Gán tham số
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ten', $ten);
            $stmt->bindParam(':loai', $loai);
            $stmt->bindParam(':mo_ta', $mo_ta);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    //Hủy kết nối CSDl
    public function __destruct()
    {
        $this->conn = null;
    }
}
