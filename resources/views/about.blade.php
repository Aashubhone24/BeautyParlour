<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
@include('header');
    <div class="trasperent">
        <div class="container-fuild">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class=" w3-center w3-animate-top">About Us</h4>   
                </div>
            </div>
        </div>
    </div>
    <div class="row stude">
        <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <img class="w3-animate-zoom" src=" /FinalProject/Images/purple.webp" alt="" width="500px">
            </div>
            <div class="col-sm-6">
                                <b><ul>
                                    <li>Hair makeup</li>
                                    <li>Menicure</li>
                                    <li>Pedicure</li>
                                    <li>hair cut</li>
                                    <li>Facial</li>
                                </ul></b>
                            </div>
                </div>
           
                <div class="row about ">
                    <div class="col-sm-6">
                        <p><b>ashvini Beauty Parlor is a trendsetting online store where you can fine the beauty supplies you need! Our mission is to provide excellent products and services to a multi-cultural community. We desire to help people feel beautiful in every way by providing the tools necessary to enhance both inner and outer beauty.</b></p>
                    </div>
                    <div class="col-sm-6">
                         <img  class="w3-animate-zoom" src="/FinalProject/Images/about.webp" alt="">
                    </div>
                </div>
            </div>
</div> 
@include('footer');
</body>
</html>