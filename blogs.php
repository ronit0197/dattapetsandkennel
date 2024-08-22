<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online pet store - Datta pets and kennel</title>
    <link rel="shortcut icon" href="./assests/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body onload="preloader()">

    <!-- Navbar -->
    <?php include "./components/navbar.php" ?>

    <div class="preloader"></div>

    <div class="container-fluid header p-0">
        <img src="./images/backgrounds/cover.jpg" alt="">
        <div class="header-cover">
            <h1 class="text-white">Our Daily Blogs</h1>
            <h5 class="text-light">Read our daily blogs to gain more knowlage about pets and pet care</h5>
        </div>
    </div>

    <!-- Blog Grid -->
    <div class="container-fluid row my-5 mx-auto" id="itemsContainer">

        <div class="container-fluid text-center p-5">
            <button class="btn btn-outline-secondary load-more" id="loadMore">Load more</button>
        </div>
    </div>


    <?php include "./components/footer.php" ?>

    <?php include "./components/scripts.php" ?>

    <script src="./js/preloader.js"></script>
</body>

    <script>
        $(document).ready(()=>{

            let offset = 0;
            const limit = 12;

            function loadMoreItems() {
                $.ajax({
                    url: './ajax/get_blogs.php',
                    type: 'POST',
                    data: {
                        offset: offset,
                        limit: limit
                    },
                    success: function(response) {

                        if(response == "No more items to load"){
                            $('#loadMore').hide()
                        }else{

                            $('#itemsContainer').append(response);
                            offset += limit;
                        }

                    },
                    error: function() {
                        alert('Error loading items.');
                    }
                });
            }

            // Load initial items
            loadMoreItems();

            // Load more items on button click
            $('#loadMore').click(function() {
                loadMoreItems();
            });

        })
    </script>

</html>