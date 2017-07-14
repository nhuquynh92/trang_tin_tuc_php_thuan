<?php
include ('database.php');
/**
 * Created by PhpStorm.
 * User: LuckyStar
 * Date: 7/13/2017
 * Time: 2:24 PM
 */
class m_tintuc extends database
{
    //hàm lấy hết slide trong database
    function getSlilde(){
        $sql = "select * from slide";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    //hàm đổ menu ra trang
    function getMenu(){
        $sql = "select tl.*, group_concat(DISTINCT lt.id,':', lt.Ten,':', lt.TenKhongDau) as LoaiTin, 
                tt.id as idTin, tt.TieuDe as TieuDeTin, tt.Hinh as HinhTin, tt.TomTat as TomTatTin, tt.TieuDeKhongDau as TieuDeKhongDauTin
                from theloai as tl inner join loaitin as lt on 
                lt.idTheLoai = tl.id inner join tintuc as tt on tt.idLoaiTin = lt.id group by tl.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    //ham lấy trang loại tin
    function getTintucByIdLoai($id_loaitin, $vitri = -1, $limit = -1){
        $sql = "select * from tintuc where idLoaiTin = $id_loaitin";
        if($vitri>-1 && $limit>1){
            $sql .= " limit $vitri, $limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_loaitin));
    }
    // Hàm lấy title theo id
    function getTitleById($id_loaitin){
        $sql = "select Ten from loaitin where id = $id_loaitin";
        $this->setQuery($sql);
        return $this->loadRow(array($id_loaitin));
    }

    //Hàm hiển thị chi tiết tin
    function getChitietTin($idTin){
        $sql = "select * from tintuc where id = $idTin";
        $this->setQuery($sql);
        return $this->loadRow(array($idTin));
    }

    //Hàm lấy comment trong bảng sql
    function getComment($id_comment){
        $sql = "select * from comment where idTinTuc = $id_comment";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_comment));
    }

    //Hàm lấy tin liên quan
    function getRelativeNew($alias){
        $sql = "select tt.*, lt.TenKhongDau as TenKhongDau, lt.id as idLoaiTin from tintuc tt 
                  inner join loaitin lt on tt.idLoaiTin = lt.id
                  where lt.TenKhongDau = '$alias' limit 0,5";
        $this->setQuery($sql);
        return $this->loadAllRows(array($alias));
    }
}