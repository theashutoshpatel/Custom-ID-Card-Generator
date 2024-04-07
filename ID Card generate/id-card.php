<?php
$notfound = false;
include 'config.php';
$html = '';
if (isset($_POST['search'])) {

    $id_no = $_POST['id_no'];

    $sql = "Select * from cards where id_no='$id_no' ";

    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        $html = "<div class='card' style='width:350px; padding:0;' >";

        $html .= "";
        while ($row = mysqli_fetch_assoc($result)) {

            $name = $row["name"];
            $id_no = $row["id_no"];
            $grade = $row['grade'];
            $dob = $row['dob'];
            $address = $row['address'];
            $email = $row['email'];
            $exp_date = $row['exp_date'];
            $phone = $row['phone'];
            $address = $row['address'];
            $image = $row['image'];
            $date = date('M d, Y', strtotime($row['date']));


            $html .= "
                                        <!-- second id card  -->
                                        <div class='container' style='text-align:left; border:2px dotted black;'>
                                            <div class='header'>
                                                
                                            </div>
                                
                                            <div class='container-2'>
                                                <div class='box-1'>
                                                <img src='$image'/>
                                                </div>
                                                <div class='box-2'>
                                                    <h2>$name</h2>
                                                    <p style='font-size: 14px;'>Student</p>
                                                </div>
                                                <div class='box-3'>
                                                    <img src='assets/images/gIET LOGO2.png' alt=''>
                                                </div>
                                            </div>
                                
                                            <div class='container-3'>
                                                <div class='info-1'>
                                                    <div class='id'>
                                                        <h4>ID No</h4>
                                                        <p>$id_no</p>
                                                    </div>
                                
                                                    <div class='dob'>
                                                        <h4>Phone</h4>
                                                        <p>$phone</p>
                                                    </div>
                                
                                                </div>
                                                <div class='info-2'>
                                                    <div class='join-date'>
                                                        <h4>Joined Date</h4>
                                                        <p>$date</p>
                                                    </div>
                                                    <div class='expire-date'>
                                                        <h4>Expire Date</h4>
                                                        <p>$exp_date</p>
                                                    </div>
                                                </div>
                                                <div class='info-3'>
                                                    <div class='email'>
                                                        <h4>Address</h4>
                                                        <p>$address </p>
                                                    </div>
                                                    
                                                </div>
                                                <div class='info-4'>
                                                <div class='sign'>
                                                    <br>
                                                    <img src='assets/images/Sign.png' alt='Your Signature'>
                                                </div>
                                            </div>
                                            
                                                <!-- id card end -->
                                        ";


        }


    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <title>Card Generation | GIET</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="image/jpg" href="./assets/images/gIET LOGO.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<style>

.info-4 {
        width: 50px; 
        padding: 10px; 
        text-align: center; 
        position: relative; 
    }
.sign {
        position: absolute; 
        bottom: 0; 
        left: 50%; 
        transform: translateX(-50%); 
        bottom: 4em;
    }
.sign img {
        max-width: 100%;
        height: auto; 
    }
    
body{
        font-family:'arial';
        font-family: "Fira Sans", sans-serif;
        background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
        font-style: normal;
        font-weight: 400;
}
.lavkush img {
    border: 2px solid blue;
    border-radius: 8px;
}
span{

    font-family: 'Orbitron', sans-serif;
    font-size:16px;
}
hr.new2 {
    width:350px;
    border-top: 1px dashed black;
    align-items:left;
    text-align:left;
}
p{
    font-size: 13px;
    margin-top: -5px;
}
.container {
    width: 80vh;
    height: 45vh;
    margin: auto;
    background: rgb(133,229,249);
    background: linear-gradient(90deg, rgba(133,229,249,1) 0%, rgba(53,219,253,1) 100%);
    box-shadow: 0 1px 10px rgb(146 161 176 / 50%);
    overflow: hidden;
    border-radius: 10px;
}
.header {
    width: 73vh;
    height: 15vh;
    margin: 20px auto;
    background-color: white;
    background-image: url(assets/images/ert.png);
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
}
.header h1 {
    color: rgb(27, 27, 49);
    text-align: right;
    margin-right: 20px;
    margin-top: 15px;
}
.header p {
    color: rgb(157, 51, 0);
    text-align: right;
    margin-right: 22px;
    margin-top: -10px;
}
.container-2 {
    width: 73vh;
    height: 10vh;
    margin: 0px auto;
    margin-top: -20px;
    display: flex;
}
.box-1 {
    width: 90px;
    height: 95px;
    margin: -40px 25px;
    border-radius: 3px;
}
.box-1 img {
    width: 82px;
    height: 87px;
}
.box-2 {
    width: 33vh;
    height: 8vh;
    margin: 7px 0px;
    padding: 5px 7px 0px 0px;
    text-align: left;
    font-family: 'Poppins', sans-serif;
}
.box-2 h2 {
    font-size: 1.3rem;
    margin-top: -5px;
    color: rgb(27, 27, 49);
    ;
}
.box-2 p {
    font-size: 0.7rem;
    margin-top: -5px;
    color: rgb(179, 116, 0);
}
.box-3 {
    width: 8vh;
    height: 8vh;
    margin: 8px 0px 8px 30px;
}
.box-3 img {
    width: 10vh;

}
.container-3 {
    width: 73vh;
    height: 12vh;
    margin: 0px auto;
    margin-top: 10px;
    display: flex;
    font-family: 'Shippori Antique B1', sans-serif;
    font-size: 0.7rem;
}
.info-1 {
    width: 17vh;
    height: 12vh;
}
.id {
    width: 17vh;
    height: 5vh;
}
.id h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.dob {
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.dob h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.info-2 {
    
    width: 17vh;
    height: 12vh;
}

.join-date {
    width: 17vh;
    height: 5vh;
}

.join-date h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.expire-date {
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.expire-date h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.info-3 {

    width: 17vh;
    height: 12vh;
}

.email {
    width: 22vh;
    height: 5vh;
}

.email h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.phone {
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.info-4 {
    width: 22vh;
    height: 12vh;
    margin: 0px 0px 0px 0px;
    font-size:15px;
}

.phone h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.sign {
    width: 17vh;
    height: 5vh;
    margin: 41px 0px 0px 20px;
    text-align: center;
}
.btn {
    border-radius: 5px;
    border: none;
    font-size: 16px;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
}
.btn:hover {
    background-color: #0056b3;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    </head>
    <body>

<nav>
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-primary p-4">
        <h4 class="text-white">GIET UNIVERSITY</h4>
        <a class="btn btn-light" href="./index.php" role="button">Home</a>
    </div>
</div>
<nav class="navbar navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
</nav>
</div>


<br>

<div class="row" style="margin: 0px 20px 5px 20px">
    <div class="col-sm-6">
    <div class="card jumbotron">
        <div class="card-body">
        <form class="form" method="POST" action="id-card.php">
        <label for="exampleInputEmail1">Student Id Card No.</label>
        <input class="form-control mr-sm-2" type="search" placeholder="Enter Id Card No." name="id_no">
        <small id="emailHelp" class="form-text text-muted">Every student's should have unique Id no.</small>
        <br>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search">Generate</button>
        </form>
    </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="card">
        <div class="card-header" >
            Here is your Id Card
        </div>
        <div class="card-body" id="mycard">
            <?php echo $html ?>
        </div>
        <br>
        
    </div>
</div>
<hr>
<button id="demo" class="downloadtable btn btn-primary" onclick="downloadtable()">Download</button>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
    function downloadtable() {
        var node = document.getElementById('mycard');
        hideButton(); 
        domtoimage.toPng(node)
            .then(function (dataUrl) {
                downloadURI(dataUrl, "Student ID card.png");
            })
            .catch(function (error) {
                console.error('Oops, something went wrong', error);
            });
    }

    function hideButton() {
        var button = document.getElementById('demo');
        if (button) {
            button.style.display = 'none'; 
        }
    }

    function downloadURI(uri, name) {
        var link = document.createElement("a");
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
    }
</script>


</body>
</html>