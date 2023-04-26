<?php
class Admin extends Controller
{
    public function show()
    {
        $adminModel = $this->model("AdminModel");
        $rooms = $adminModel->getRooms();

        $this->view("content_layout", [
            "page" => "admin",
            "rooms" => $rooms
        ]);
    }

    public function thongKe(){
        if (isset($_POST['statistic'])) {

            $nam = $_POST['nam'];

            $adminModel = $this->model("AdminModel");
            $result = $adminModel -> thongKeDoanhThu($nam);
            $this->view("content_layout", [
                "page" => "doanhthu",
                "rooms" => $result,
                "nam" => $nam
            ]);
        }
    }

    public function viewDetail($id)
    {
        $adminModel = $this->model("AdminModel");
        $rooms = $adminModel->getRoomById($id);

        $this->view("content_layout", [
            "page" => "detail",
            "rooms" => $rooms
        ]);
    }

    public function addRoom()
    {
        if (isset($_POST['add'])) {

            $MaMon = $_POST['MaMon'];
            $Ten = $_POST['Ten'];
            $GroupID = $_POST['GroupID'];
            $Hinh = $_POST['link'];


            $adminModel = $this->model("AdminModel");
            $res = $adminModel->addRoom($MaMon, $GroupID, $Ten, $Hinh);

            if ($res) {
                echo "<script>alert('Add Success')</script>";
                header("Location: http://localhost/Assignment2/Admin");
            } else {
                echo "<script>alert('Add fail')</script>";

            }
        }
    }

    public function EditRoom($id)
    {
        if (isset($_POST['edit'])) {

            $MaNhom = $_POST['MaNhom'];
            $Ten = $_POST['Ten'];
            $Hinh = $_POST['link'];


            $adminModel = $this->model("AdminModel");
            $res = $adminModel->updateRoom($id, $MaNhom, $Ten, $Hinh);


            if ($res) {
                echo "<script>alert('Update Success')</script>";
                header("Location: http://localhost/Assignment2/Admin");
            } else {
                echo "<script>alert('Update Fail')</script>";
            }
        }
    }

    // delete member
    public function deleteRoom($id)
    {
        $adminModel = $this->model("AdminModel");
        $res = $adminModel->deleteRoom($id);

        if ($res) {
            echo "<script>alert('Delete Success')</script>";
            header("Location: http://localhost/Assignment2/Admin");
        } else {
            echo "<script>alert('Delete Fail')</script>";
        }
    }
}

?>