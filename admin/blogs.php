<?php
    include "redirection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/links.php" ?>
</head>

<body>

    <?php include "./components/navbar.php" ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto overflow-hidden p-4" id="admin-content">
                <div class="d-flex justify-content-between">
                    <h1 class="text-warning"><i class="fa-solid fa-blog me-2"></i></h1>
                </div>
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBlogModal">Add blog +</button>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-md-3 mt-3">
                            <input class="form-control me-2 shadow-none" id="searchText" type="search" placeholder="Search blog title..."
                            onkeyup="searchFilter()" aria-label="Search">
                        </div>
                    </div>
                    <div class="container-fluid mt-4 p-0">
                        <div class="row" id="blog-table">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addBlogModalLabel">Add new blog</h1>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addBlog" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control shadow-none" id="floatingInput" placeholder="Blog title" required>
                            <label for="floatingInput">Blog title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="topic" class="form-control shadow-none" id="floatingInput" placeholder="Blog topic" required>
                            <label for="floatingInput">Topic</label>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="description" class="form-control shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                <label for="floatingTextarea2">Description</label>
                            </div>
                        </div>
                        <div class="submit-btn text-center mt-5">
                            <button type="submit" class="btn btn-success w-50">Submit</button>
                            <button type="reset" class="reset-form d-none">reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/scripts.php" ?>
    <script>
        let searchText = document.getElementById("searchText");


        function searchFilter(){

            let str = searchText.value.toLowerCase();
            let tr = document.querySelectorAll(".blog-table");

            for(let i=0; i < tr.length; i++){

                let blogName = tr[i].getElementsByTagName("h5")[0];

                if(blogName){

                    let data1 = blogName.textContent || blogName.innerHTML;

                    if((data1.toLowerCase().indexOf(str) > -1)){

                        tr[i].style.display = "";
                    }else{
                        tr[i].style.display = "none";
                    }
                }
            }
        }

    </script>
</body>

    <script>

        function getBlogs(){

            $.ajax({
                url: "./ajax/get_blogs.php",
                method: "POST",
                success: function (data){
                    $("#blog-table").html("")
                    $("#blog-table").append(data)
                }
            })
        }

        $(document).ready(()=>{

            getBlogs()

            $("#addBlog").submit((e)=>{

                e.preventDefault()

                let formData = new FormData($("#addBlog")[0])

                $.ajax({
                    url: "./ajax/add_blogs.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        if(data == "successfull") {
                            $(".form-indicator").removeClass("d-flex")
                            $(".form-indicator").addClass("d-none")
                            $(".btn-close").click()
                            $(".reset-form").click()
                            getBlogs()
                        }
                    }
                })

            })
        })
    </script>

</html>