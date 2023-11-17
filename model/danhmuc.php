<?php

function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danh_muc(tendanhmuc) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM danh_muc WHERE id_danhmuc= '$id'";
    pdo_query($sql);
}

function loadAll()
{
    $sql = "SELECT * FROM danh_muc ORDER BY id_danhmuc DESC";
    $listdm = pdo_query($sql);
    return $listdm;
}

function loadOne($id)
{
    $sql = "SELECT * FROM danh_muc WHERE id_danhmuc = '$id'";
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danh_muc SET name='$tenloai' WHERE id_danhmuc = '$id'";
    pdo_execute($sql);
}





?>