<?php
class Blog extends Controller
{

    /* trang giới thiệu các bài viết */
    public function news()
    {
        $blogInfoModel = $this->model("blogModel");
        $blogContent = $blogInfoModel->blogInfo();
        $this->view("blogView", ["blogContent" => $blogContent]);
    }

    /* trang nội chi tiết bài viết */
    public function detailNews($id, $iddm)
    {
        /* detail blog */
        $blogDetailModel = $this->model("blogModel");
        $blogDetail = $blogDetailModel->detailBlog($id);

        /* related blog */
        $relatedBlogModel = $this->model("blogModel");
        $relatedBlog = $relatedBlogModel->relatedBlog($iddm);

        $this->view("detailBlogView", ["blogDetail" => $blogDetail, "relatedBlog" => $relatedBlog]);

    }

}
?>