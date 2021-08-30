<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style(gallery).css">


</head>

<body>

    <section class="gallery" id="gallery"> <br><br>

        <h1 class="heading">
            Travel Nature
        </h1> <br><br><br><br><br><br>

        <div class="box-container">

            <div class="box">
                <img src="../images/admin.jpg" alt="">
                <div class="content">
                    <h3>Saint Martin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="saintmartin.php" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/bgcube.jpg" alt="">
                <div class="content">
                    <h3>Bandarban</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="bandarban.php" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/home.jpg" alt="">
                <div class="content">
                    <h3>Sylhet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="sylhet.php" class="btn">See More</a>
                </div>
            </div>

        </div>
        <br><br><br>

        <a href="welcome.php" class="link">Back</a>

    </section>
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"  data-bs-delay="2000">
            <div class="toast-body bg-danger text-light">
                Sorry! Something went wrong.
            </div>
        </div>
    </div>
    <?php
        if(isset($_GET['error'])){
            echo '<script> var warning = 1; </script>';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script>
    if(warning==1){
        var toastLiveExample = document.getElementById('liveToast');
        var toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
        warning = 0;
    }
</script>
</body>

</html>