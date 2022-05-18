<?php include 'head.php';
include 'Database/login.php'
?>

<?php include 'Home/navbar.php';


if(isset($_SESSION['name']) && $_SESSION['email']=="admin@ncs.com"){
    ?>

<style>
    body{
        background-color: #000;
    }
    .avatar {
        border-radius: 20px;
        border: 2px solid #fff;
        background-color: #000 !important;
        box-sizing: border-box;
        box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
        transform: translatey(0px);
        animation: float 6s ease-in-out infinite;
        margin:auto auto;
    }

    a h2 {
        color: cyan;
        background-color: rgba(0, 0, 0, 0.6);
        /* opacity: 0.8; */
        font-size: 1.6rem;
        margin: 10px auto;
        width: fit-content;
        padding: 15px;
        border: 2px solid cyan;
        border-radius: 200px;
        font-family: monospace;
        font-weight: bold;
    }
</style>

<body>
    <div class="container-fluid pt-5" style="display:block; background-color: #000; height:300px;">
        <div class="container avatar mt-5" >
            <div class="row mt-4 pb-4">
                <div class="col" style="border:2px solid #000 ; color:green;">
                    <h4><a onclick="change_carousel()">
                            <h2>Change Carousel</h2>
                        </a></h4>
                </div>
                <div class="col" style="border:2px solid #000 ; color:red;">
                    <h4><a onclick="change_about()">
                            <h2>Change About</h2>
                        </a></h4>
                </div>
                <div class="col" style="border:2px solid #000 ; color:red;">
                    <h4><a onclick="manage_accounts()">
                            <h2>Manage Accounts</h2>
                        </a></h4>
                </div>
                <div class="col" style="border:2px solid #000 ; color:red;">
                    <h4><a onclick="manage_gallery()">
                            <h2>Manage Gallery</h2>
                        </a></h4>
                </div>

            </div>
        </div>
    </div>


    <?php }
   else {?>
    <div class="container justify-content-center align-items-center my-5"
        style="display:flex; height:500px; background-color:black;">
        <div class="btn btn-outline-light" style="color:aliceblue">
            <a href="../index.php">LOGIN </a>
        </div>
    </div>
    <?php }?>
    <script>

    function change_about() {
            var del = confirm("Are you sure you want to change your About");
            if (del) {
                window.location.href = "Admin/change_about.php";
            } else {
                alert("Action canceled");
            }
        }

        function change_carousel() {
            var del = confirm("Are you sure you want to change carousel");
            if (del) {
                window.location.href = "Admin/change_carousel.php";
            } else {
                alert("Action canceled");
            }
        }

        function manage_accounts() {
            var del = confirm("Are you sure you want to manage accounts");
            if (del) {
                window.location.href = "Admin/manage_accounts.php";
            } else {
                alert("Action canceled");
            }
        }

        function manage_gallery() {
            var del = confirm("Are you sure you want to manage gallery");
            if (del) {
                window.location.href = "Admin/manage_gallery.php";
            } else {
                alert("Action canceled");
            }
        }

    </script>

    <?php include 'end.php';?>