<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Document</title>
    </head>
    <body>
    
    @include('header');
    
    <div class="trasperent">
        <div class="container-fuild">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class=" w3-center w3-animate-top">Contact</h4>   
                </div>
            </div>
        </div>
    </div>

    <div class="row home">
        <div class="col-sm-12">
            <a href="index.php" class="list-group-item"><i class="fa fa-home fa-fw"></i> Home > contact</a>
                <!-- <a href="#">home > <span>contact</span></a> -->
        </div>
    </div>
    <div class="contactbackground">
       <div class="container">
           <div class="row sign">
                <div class="col-sm-6">
                    <i class="fa fa-volume-control-phone">&nbsp; <b>Call Us :</b></i>
                    <h6> 9552246484</h6><br>
                    <i class="fa fa-comment">&nbsp; <b>Email-id :</b></i>
                    <h6> Ashvinibhone@gmail.com</h6><br>

                    <i class="fa fa-clock-o">&nbsp; <b>Time:</b></i>
                    <h6>9:00am to 6:00pm</h6><br>
                    <i class="fa fa-address-book"></i>&nbsp;<b>Address:</b></i>
                    <h6>B-wing near cummins collage lane no 6,karwe Nagar</h6>
                </div>
                <div class="col-sm-6">
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <input type="text" name="fname" id="fname" class="form-control" value="" placeholder="Enter your First Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lname" id="lname" class="form-control" value="" placeholder="Enter your Last Name">
                        </div>
                         <div class="form-group">
                            <input type="text" name="phone" id="Phone" class="form-control" value="" placeholder="Enter your Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Email" id="Email" class="form-control" value="" placeholder="Enter your Email ">
                        </div>
                        <div class="form-group">
                             <textarea name="msg" id="msg" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="sm">
                            <button type="submit" name="submit" class="btn btn-primary">send message</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <div>
    </div>
    @include('footer');
</body>
</html>
   
