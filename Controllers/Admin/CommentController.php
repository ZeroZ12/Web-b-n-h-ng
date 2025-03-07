<?php
class CommentController
{
    public function index()
    {
        $products = ( new Comment )->hasComment();
        return view('admin.comment.pcomment',compact('products'));
    }
    public function list()
    {
        $id = $_GET['id'];

        $comments = (new Comment)->commentIn($id);
        //lưu lại đg dẫn
        $_SESSION['uri_comment'] = $_SERVER['REQUEST_URI'];

        return view('admin.comment.list', compact('comments'));
    }
    //Kích hoạt
    public function updateActive()
    {
        $id = $_GET['id'];
        $value = $_GET['value'] ? 0:1;
        (new Comment)->updateActive($id,$value);

        return header("location: " . $_SESSION['uri_comment']);
    }
}   
?>