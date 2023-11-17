<?php
  include("header.php");
  include("boxleft.php");
  include("home.php");
  include "../model/danhmuc.php";  
  include "../model/pdo.php"; 

  if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case "adddm":
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tendanhmuc'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
                //ktra khach hang co muon them dm hay kh
            }
            include "danhmuc/add.php";
            break;

        case "listdm":
            $listdanhmuc = loadAll();
            include "danhmuc/list.php";
            break;
        case "xoadm":
            if (isset($_GET["id_danhmuc"]) && $_GET["id_danhmuc"] > 0) { //ktra id co ton tai hay khong neu dung thi se xoa id dm
                $id = $_GET["id_danhmuc"];
                delete_danhmuc($id);
            }
            $listdanhmuc = loadAll();
            include "danhmuc/list.php";
            break;

        case "suadm":
            if (isset($_GET["id_danhmuc"]) && $_GET["id_danhmuc"] > 0) {
                $id = $_GET["id_danhmuc"];
                $dm = loadOne($id);
            }
            include "danhmuc/update.php";
        // break;

        case "updatedm":
            if (isset($_POST['capnhat'])) {
                $id = $_POST["id"];
                $tenloai = $_POST['tenloai'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadAll();
            include "danhmuc/list.php";
            break;
            
        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'listbl':
            include "binhluan/list.php";
            break;
        case 'addbl':
            include "binhluan/add.php";
            break;
        case 'listdh':
            include "donhang/list.php";
            break;
        case 'adddh':
            include "donhang/add.php";
            break;
        case 'listuser':
            include "user/list.php";
            break;
        case 'adduser':
            include "user/add.php";
            break;
        case 'listtt':
            include "tintuc/list.php";
            break;
        case 'addtt':
            include "tintuc/add.php";
            break;
        case 'listlh':
            include "lienhe/list.php";
            break;
        case 'addlh':
            include "lienhe/add.php";
            break;
        case 'listkm':
            include "khuyenmai/list.php";
            break;
        case 'addkm':
            include "khuyemmai/add.php";
            break;
        case 'listbt':
            include "bienthe/list.php";
            break;
        case 'addbt':
            include "bienthe/add.php";
            break;
        case 'listbanner':
            include "banner/list.php";
            break;
        case 'addbanner':
            include "banner/add.php";
            break;
        default:
            
            break;
    }
 }else{
    
 }
?>

  
  

  
<?php
  include("footer.php");
?>
  