<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" />
    

    <title>Home Page</title>

    <style>

.contain .btn {
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background-color: #555;
      color: white;
      font-size: 16px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }

.contain .p1{
      position: absolute;
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      color: red;
      font-size: 30px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    
}

.contain .p2{
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      color: green;
      font-size: 50px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    
}

.contain .p3{
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      color: blue;
      font-size: 20px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    
}

.contain .btn:hover {
  background-color: black;
}

.contain {
    position: relative;
    width: 100%;
    left: 0;
    top: 0;
    
  }


  .contain img {
    width: 100%;
    height: auto;
  }

</style>


  </head>
  <body>

  
  <header>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
          <img src="assets/sparks_logo.png" height="50px" width="50 px" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_us.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="contain">
  <?php echo'<img id="ind_img" src="assets/sp_back.png" alt="Snow" style="width:100%">' ;?>
  <p class="p2"><strong>GIVING FEELS GOOD</strong></p>
  <p class="p3">Helping thousands raise millions for good causes. Let us help you too</p>
  <p class="p1"><strong>No one has ever become poor by giving</strong></p>

  <a type="button" href="https://rzp.io/l/vtllmfUMp" value="donate" target="_blank" class="btn">DONATE NOW</a>
</div>



 <!-- footer  -->
 <footer style="background-color: #2c292f">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2 font-italic text-warning ">Sparks Foundation</span></h3>

                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="#">Home</a>
                            |
                            <a class="text-white" href="#">Blog</a>
                            |
                            <a class="text-white" href="#">About</a>
                            |
                            <a class="text-white" href="#">Contact</a>
                        </p>
                        <p class="text-light py-4 mb-4">&copy;2019 Sparks Foundation Pvt. Ltd.</p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                                    309 - Rupa Solitaire,
                                   Bldg. No. A - 1, Sector - 1
                                  Mahape, Navi Mumbai - 400710</p>
                        </div>

                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> +91 22-27782183</p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2"></i><a href="mailto:support@eduonix.com">support@eduonix.com</a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About the Company</span>
					<p class="text-warning my-2" >We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>

                </div>
            </div>  
        </div>
     </footer>
     <!-- end of footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><script src="js/script.js"></script>
  </body>
</html>