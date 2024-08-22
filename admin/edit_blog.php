<?php

    include "redirection.php";
    include "../database/connection.php";

    $blogId = $_GET["id"];

    $sql = "SELECT * FROM `blogs` WHERE id='$blogId'";
    $result = mysqli_query($conn, $sql);
    $display = mysqli_fetch_array($result);

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
                <a href="blogs.php" class="nav-link text-dark"><h1><i class="bi bi-arrow-left-circle"></i></h1></a>
                <form id="UpdateBlog" method="POST" class="w-100 mx-auto mt-5 border border-1 border-secondary rounded p-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" value="<?php echo $display["blog_title"]; ?>" name="title" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com" required>
                                <input type="hidden" name="id" value="<?php echo $blogId; ?>">
                                <label for="floatingInput">Blog title</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" value="<?php echo $display["blog_topic"]; ?>" name="topic" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Topic</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="description" class="form-control shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required><?php echo $display["blog"]; ?></textarea>
                                <label for="floatingTextarea2">Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="submit-btn text-center mt-3">
                        <button type="submit" class="btn btn-warning w-50 update-btn">Update<i class="bi bi-cloud-arrow-up ms-2"></i></button>
                        <button class="btn btn-secondary w-50 loading-btn d-none mx-auto" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status ms-1">Updating...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "./components/scripts.php" ?>
</body>

    <script>
        $(document).ready(()=>{

            $("#UpdateBlog").submit((e)=>{

                e.preventDefault()
                
                let formData = new FormData($("#UpdateBlog")[0])

                $.ajax({
                    url: "./ajax/edit_blog.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        if(data == "updated successfully") {

                            $(".update-btn").addClass("d-none")
                            $(".loading-btn").removeClass("d-none")
                            $(".loading-btn").addClass("d-block")
                            setTimeout(() => {
                                window.location = "blogs.php"
                            }, 2000);

                        }
                    }
                })

            })
        })
    </script>

</html>