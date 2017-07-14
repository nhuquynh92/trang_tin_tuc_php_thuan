<?php
include ('./model/m_tintuc.php');
include ('./model/pager.php');
/**
 * Created by PhpStorm.
 * User: LuckyStar
 * Date: 7/13/2017
 * Time: 2:39 PM
 */
class c_tintuc
{
    //function đưa ra slide trên trang
    function index(){
        $m_tintuc = new m_tintuc();
        $slide = $m_tintuc->getSlilde();
        $menu = $m_tintuc->getMenu();

        return array('slide'=>$slide, 'menu'=>$menu);
    }

    //function đưa ra trang loại tin
    function loai_tin(){
        $id_loai = $_GET['id_loai'];
        $m_tintuc = new m_tintuc();
        $danhmuctin = $m_tintuc->getTintucByIdLoai($id_loai);

        $trang_hien_tai = (isset($_GET['page']))?$_GET['page']:1;

        $pagination = new pagination(count($danhmuctin), $trang_hien_tai, 4, 3 );
        $pagiObj = $pagination->showPagination();
        $limit = $pagination->_nItemOnPage;
        $vitri = ($trang_hien_tai-1)*$limit;
        $danhmuctin = $m_tintuc->getTintucByIdLoai($id_loai, $vitri, $limit);

        $menu = $m_tintuc->getMenu();
        $title = $m_tintuc->getTitleById($id_loai);

        return array('menu'=>$menu, 'danhmuctin'=>$danhmuctin, 'title'=>$title, 'thanh_phan_trang'=>$pagiObj);
    }

    function chi_tiet_tin(){
        $id_chitiet = $_GET['id_chitiet'];
        $alias = $_GET['alias'];
        $m_tintuc = new m_tintuc();
        $chitiettin = $m_tintuc->getChitietTin($id_chitiet);
        $comment = $m_tintuc->getComment($id_chitiet);
        $relative_new = $m_tintuc->getRelativeNew($alias);

        return array('chitiettin'=>$chitiettin, 'comment'=>$comment, 'relativeNew'=>$relative_new);
    }
}