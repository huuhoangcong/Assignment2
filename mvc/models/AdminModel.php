<?php
class AdminModel extends Database
{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function getRooms()
    {
        $sql = "SELECT * FROM monan JOIN nhom ON nhom.MaNhom = monan.MaNhom";
        $result = mysqli_query($this->connect, $sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $rooms;
    }

    public function thongKeDoanhThu($nam)
    {
        $stmt = mysqli_prepare($this->connect, "CALL ThongKeDoanhThu(CAST(? AS INT))");
        mysqli_stmt_bind_param($stmt, "s", $nam);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $data;
    }

    public function getRoomById($id)
    {
        $sql = "";
        if ($id[0] ==  'D'){
            $sql = "SELECT *
                    FROM MonAn AS M JOIN (SELECT * 
                                          FROM nuocuong N JOIN kichthuocnuocuong K ON N.MaMon = K.MaNuocUong
                                          WHERE N.MaMon = '$id') AS temp
                                    ON M.MaMon = temp.MaMon ";
        }
        else {
            $sql = "SELECT *
                    FROM MonAn AS M JOIN (SELECT * 
                                          FROM doan F JOIN GioPhucVuDoAn G ON F.MaMon = G.MaDoAn
                                          WHERE F.MaMon = '$id') AS temp
                                ON M.MaMon = temp.MaMon";
        }
        $result = mysqli_query($this->connect, $sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $rooms;
    }

    public function addRoom($MaMon, $MaNhom, $Ten, $Hinh)
    {
        $sql = "INSERT INTO MonAn (MaMon, MaNhom, Ten, Hinh) VALUES ('$MaMon', '$MaNhom', '$Ten', '$Hinh')";
        $result = mysqli_query($this->connect, $sql);
        // mysqli_free_result($result);
        return $result;
        if (!$result) {
            // handle query error
            return false;
        }
        
        // if ($result instanceof mysqli_result) {
        //     mysqli_free_result($result);
        // }
        
        return true;
    }

    // public function updateRoom($id, $roomname, $price, $img)
    // {
    //     $sql = "UPDATE rooms SET roomName = '$roomname', price = '$price', image = '$img' WHERE id = '$id'";
    //     $result = mysqli_query($this->connect, $sql);
    //     mysqli_free_result($result);
    //     return $result;
    // }

    
    public function updateRoom($MaMon, $MaNhom, $Ten, $Hinh)
    {
        $sql = "UPDATE monan SET MaMon = '$MaMon', MaNhom = '$MaNhom', Ten = '$Ten', Hinh = '$Hinh' WHERE MaMon = '$MaMon'";
        $result = mysqli_query($this->connect, $sql);
        if (!$result) {
            // handle query error
            return false;
        }
        
        // if ($result instanceof mysqli_result) {
        //     mysqli_free_result($result);
        // }
        
        return true;
    }

    public function deleteRoom($id)
    {
        $sql = "DELETE FROM monan WHERE MaMon = '$id'";
        $result = mysqli_query($this->connect, $sql);
        // mysqli_free_result($result);
        // return $result;
        if (!$result) {
            return false;
        }
        return true;
    }
}
?>