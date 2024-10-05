<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="swiper-bundle.min.css">
  <link rel="stylesheet" href="swiper-bundle1.min.css">
  <link rel="stylesheet" href="./css/Swipfile.css">
  <link rel="stylesheet" href="slide2.css">
  <title>labrary</title>
  <link rel="stylesheet" href="aa55.css" />
  <link rel="icon" 
     type="image/jpg" 
     href="30450324.jpg">
</head>

<body>
  <section id="section1">
    <div class="container">
        <img src="Group 25.png" alt="This picture is not avilable in this browser " width="76" height="104.98" />
      <div class="custom-search-bar">
        <input style="direction: rtl" type="text" placeholder="ابحث عن كتابك الان" />
        <i style="position: absolute; right: 30px"><img src="searchnormal1.png"
            alt="This picture is not avilable in this browser " width="20" height="20" /></i>
        <button type="submit">بحث</button>
      </div>

      <div class="profile-pic">
        <label class="-label" for="file">
          <span class="glyphicon glyphicon-camera"></span>
          <span>Change Image</span>
        </label>
        <input id="file" type="file" onchange="loadFile(event)" />
        <img src="unsplash_RGKdWJOUFH0 (1).png" id="output" />
      </div>
      <a href="#"><svg style="position:relative;right: -165px;top: 35px;width: 40px;height: 40px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"/></svg></a> 
      <a style="position:absolute;right:-30px;top: 35px;font-size: 30px;" href="sign-up.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></a>
    </div>

    <nav>
      <div id="navbar">
        <a class="active" href="#section1">Home</a>
        <a href="#section2">Future Books</a>
        <a href="#section3">Arrivals Books</a>
        <a href="#section4">Reviws</a>
        <a href="#section5">Our Blog</a>
      </div>
    </nav>

    <div style="background-color: #EBF2F9;height: 350px;position: relative;">
      <p style="font-size: 48px;position: absolute;left: 120px;top: 75px;">UPTO 75% OFF</p>
      <p style="font-size: 20px;position: absolute;left: 120px;top: 150px;width: 500px;">Lorem ipsum dolor sit amet
        consectetur, adipisicing elit. Eaque totam dolores perferendis non vel doloribus fugit molestiae veniam sapiente
        dolore unde illum,</p>
      <button
        style="background-color: #3D85C6;border: none;border-radius: 12px;padding: 10px;width: 150px;color: #fff;position: absolute;left: 210px;top: 260px;">Read
        Now</button>
      <div class="hole" style="position: absolute;left: 800px;top: 0px;">
        <div class="swiper" style=" width: 300px;
        height: 185px;">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="img-book" src="7888152-M 3.png" alt="">
            </div>
            <div class="swiper-slide"><img class="img-book" src="10110415-M 4.png" alt="">
            </div>
            <div class="swiper-slide"><img class="img-book" src="7888152-M 3.png" alt="">
            </div>
          </div>




        </div>
        <div class="threshold" style=" width: 350px;
        height: 120px;">
          <!-- اهنا حط صوره رف -->
          <img src="-removal 2.png" alt="" class="theshold-book">
        </div>
      </div>
    </div>





    <script src="swiper-bundle.min.js"></script>
    <script src="slide2.js"></script>
    </div>
    <div class="servicebar">
      <div>

        <a href="#"><img src="carbon_delivery.png" style="width: 50px;height: 50px;"></a>
        <a href="#" class="img-fluid">Free Shipping</a>
        <p style="color: #8AB5DC;margin-left: 65px;margin-top: -10px;">Order over 100$</p>
      </div>
      <div>
        <a href="#"><img src="Vector.png" style="width: 50px;height: 50px;" class="img-fluid"></a>
        <a href="#" class="img-fluid">Secure Payment</a>
        <p style="color: #8AB5DC;margin-left: 75px;margin-top: -10px;"> 100 Secure Payment</p>
      </div>
      <div>
        <a href="#"><img src="refresh2.png" style="width: 50px;height: 50px;" class="img-fluid"></a>
        <a href="#" class="img-fluid">Easy Returns</a>
        <p style="color: #8AB5DC;margin-left: 70px;margin-top: -10px;">10 days return</p>
      </div>
      <div>
        <a href="#"><img src="fa-solid_headset.png" style="width: 50px;height: 50px;" class="img-fluid"></a>
        <a href="#" class="img-fluid">24/7 Support</a>
        <p style="color: #8AB5DC;margin-left: 77px;margin-top: -10px;">Call us at any time</p>
      </div>

    </div>
  </section>
  <section id="section2">
    <div className="col-xs-6 col-sm-6 col-md-6 col-lg-6 vacancy-summary"
      style="border: solid 1px;width: 300px;height: 67px;position: relative;left: 610px;">
      <p style="text-align: center;font-size: 26px;margin: 10px;">Featured Books</p>
    </div>
    <div>
      <div style="width:490px;margin-left: 120px;margin-top: -50px;">
        <hr>
      </div>
      <div style="width:475px;margin-left: 910px;margin-top: -17px;">
        <hr>
      </div>
    </div>
    <div class="container2" style="max-width: 1300px;">
      <div class="row">
        <div class="col-12">
          <div class="scoll-pane mt-4" id="container2">
            <ul class="photos2">
              <div style="margin-left: -35px;">
                <li>
                  <img src="-removal (1).png">
                </li>
                <button type="button" class="add-to-cart-button">Add to cart </button>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p class="discount">7.74$</p>
                <p class="price">30.99$</p>
              </div>



              <div>
                <li>
                  <img src="10110415-M 4.png">
                </li>
                <button type="button" class="add-to-cart-button">Add to cart </button>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="discount">7.74$</p>
                <p class="price">30.99$</p>
              </div>


              <div>
                <li>
                  <img src="7888152-M 3.png">
                </li>
                <button type="button" class="add-to-cart-button">Add to cart</button>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p class="discount">7.74$</p>
                <p class="price">30.99$</p>
              </div>


              <div>
                <li>
                  <img src="-removal.png">
                </li>
                <button type="button" class="add-to-cart-button">Add to cart</button>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p class="discount">7.74$</p>
                <p class="price">30.99$</p>
              </div>


              <div>
                <li>
                  <img src="10110415-M 4.png">
                </li>
                <button type="button" class="add-to-cart-button">Add to cart</button>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p class="discount">7.74$</p>
                <p class="price">30.99$</p>
              </div>


              <div>
                <li>
                  <img src="-removal (1).png">
                </li>
                <button type="button" class="add-to-cart-button">Add to cart</button>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="discount">7.74$</p>
                <p class="price">30.99$</p>
              </div>


              <div>
                <li>
                  <img src="7888152-M 3.png">
                </li>
                <button type="button" class="add-to-cart-button">Add to cart</button>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p class="discount">7.74$</p>
                <p class="price">30.99$</p>
              </div>



            </ul>
          </div>
        </div>
      </div>
    </div>
    <button id="slideBack" style="border-color: #3D85C6;" type="button"><img src="angle-left.png"></button>
    <button id="slide" type="button" style="border-color: #3D85C6;margin-left:200px;"><img src="angle-right.png"></button>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div>
      <img src="unsplash_kcT-7cirBEw.png" style="width: 1517px;height: 712px;" class="imageOfsec2">
      <p
        style="font-family: 'Roboto', sans-serif;color: #fff;font-size: 64px;font-weight: bold;position: relative;left: 760px;top:-600px;width: 500px;text-shadow: 0 0 5px #000000, 0 0 5px #000000;text-align: center;">
        Have Fun Choosing Your Book</p>
    </div>


  </section>
  <section id="section3">
    <div className="col-xs-6 col-sm-6 col-md-6 col-lg-6 vacancy-summary"
      style="border: solid 1px;width: 300px;height: 67px;position: relative;left: 580px;top: -250px;">
      <p style="text-align: center;font-size: 26px;margin: 10px;">New Arrivals</p>
    </div>
    <div>
      <div style="width:480px;margin-left: 100px;margin-top: -300px;">
        <hr>
      </div>
      <div style="width:475px;margin-left: 880px;margin-top: -20px;">
        <hr>
      </div>
      <div class="wrapper">
        <i id="left"><img src="angle-left.png"></i>
        <div class="carousel">
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>

              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>

              <p class="books-name">Harry Potter</p>

            </div>

          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>

              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>

              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>



              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>

              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>

              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>


        </div>
        <i id="right"><img src="angle-right.png"></i>

      </div>
      <div class="wrapper2">
        <i id="left2"><img src="angle-left.png"></i>
        <div class="carousel2">
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>



              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>



              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>



              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>
          <label class="bg-image2"><img src="10110415-M 4.png" alt="img" draggable="false">
            <div>
              <p class="booksINFO"> New Arrivals</p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>
              <p class="fa fa-star checked stars2"></p>


              <p class="discount2">7.74$</p>
              <p class="price2">30.99$</p>
              <p class="books-name">Harry Potter</p>
            </div>
          </label>


        </div>
        <i id="right2"><img src="angle-right.png"></i>

      </div>


      <div style="height: 515px;background-color: #EBF2F9;margin-top: -80px;">
        <img src="-removal 1.png" style="position: relative;left: 650px;">
        <p class="phover"
          style="text-transform: uppercase;font-size: 40px;font-family: 'Roboto'sans-serif;position: relative;top: -500px;left: 100px;width: 500px;">
          deal of the day</p>
        <p class="phover"
          style="text-transform: uppercase;font-size: 48px;font-family: 'Roboto'sans-serif;position: relative;top: -515px;left: 100px;width: 500px;font-weight: bold;">
          up to 50% off</p>
        <p class="phover"
          style="font-family: 'Roboto'sans-serif;position: relative;top: -530px;left: 100px;width: 500px;">Lorem, ipsum
          dolor sit amet consectetur adipisicing elit. Voluptas quaerat corporis, sed corrupti incidunt labore itaque
          magnam eaque neque nostrum facilis sequi reiciendis excepturi deserunt quam placeat rerum. Blanditiis,
          reiciendis.</p>
        <button type="submit" class="shopnow">Shop Now</button>

      </div>



  </section>



  <section id="section4">
    <div className="col-xs-6 col-sm-6 col-md-6 col-lg-6 vacancy-summary"
      style="border: solid 1px;width: 300px;height: 67px;position: relative;left: 610px;margin-top: 50px;">
      <p style="text-align: center;font-size: 26px;margin: 10px;">Reviws</p>
    </div>
    <div>
      <div style="width:490px;margin-left: 120px;margin-top: -50px;">
        <hr>
      </div>
      <div style="width:475px;margin-left: 910px;margin-top: -17px;">
        <hr>
      </div>
    </div>


    <div class="contin">
      <div class="swiper swiper-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img src="https://wallpapers.com/images/hd/cool-profile-picture-l0hzjr9omwan07nt.jpg" alt=""
                  class="prof">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> ali</h2>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="star">✰★★★★</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img
                  src="https://expertphotography.b-cdn.net/wp-content/uploads/2018/10/cool-profile-pictures-retouching-1.jpg"
                  alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> ali</h2>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="star">✰★★★★</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> ali</h2>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="star">✰★★★★</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img src="https://cdn140.picsart.com/52696599642627236248.webp?type=webp" alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> ali</h2>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="star">✰★★★★</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf-i2AK5EeP2v1YDvf28g5HptD_isu38904-4menVTlPUgfbaEqUMKsEv7mzZ4xUYzStg&usqp=CAU"
                  alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> ali</h2>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="star">✰★★★★</div>
            </div>
          </div>
        </div>



      </div>
      <div id="arrow-prev" class="swiper-button-prev"
        style="background-color: #3d86c600;color: #3D85C6;border: #3D85C6;"></div>
      <div id="arrow-next" class="swiper-button-next"
        style="background-color: #3d86c600;color: #3D85C6;border: #3D85C6;"></div>
    </div>
    </div>

  </section>

  <section id="section5">
    <div className="col-xs-6 col-sm-6 col-md-6 col-lg-6 vacancy-summary"
      style="border: solid 1px;width: 300px;height: 67px;position: relative;left: 600px;margin-top: 50px;">
      <p style="text-align: center;font-size: 26px;margin: 10px;">Our Blog</p>
    </div>
    <div>
      <div style="width:500px;margin-left: 100px;margin-top: -50px;">
        <hr>
      </div>
      <div style="width:475px;margin-left: 900px;margin-top: -17px;">
        <hr>
      </div>
    </div>
    <div class="content-2">
      <div class="swiper swiper-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img src="https://wallpapers.com/images/hd/cool-profile-picture-l0hzjr9omwan07nt.jpg" alt=""
                  class="prof">
              </div>
            </div>
            <div class="card-content">
              <div class="tex-like">
                <h2 class="name"> blog Your tittle</h2>
                <div class="heart">
                  <div class="heart-icon">
                    <div class="heart-t">❤</div>
                    <div class="num-like">321</div>
                  </div>
                </div>
              </div>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="hold-btn-t">
                <div class="btn-t">read more</div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img
                  src="https://expertphotography.b-cdn.net/wp-content/uploads/2018/10/cool-profile-pictures-retouching-1.jpg"
                  alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <div class="tex-like">
                <h2 class="name"> blog Your tittle</h2>
                <div class="heart">
                  <div class="heart-icon">
                    <div class="heart-t">❤</div>
                    <div class="num-like">321</div>
                  </div>
                </div>
              </div>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="hold-btn-t">
                <div class="btn-t">read more</div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <div class="tex-like">
                <h2 class="name"> blog Your tittle</h2>
                <div class="heart">
                  <div class="heart-icon">
                    <div class="heart-t">❤</div>
                    <div class="num-like">321</div>
                  </div>
                </div>
              </div>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="hold-btn-t">
                <div class="btn-t">read more</div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img src="https://cdn140.picsart.com/52696599642627236248.webp?type=webp" alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <div class="tex-like">
                <h2 class="name"> blog Your tittle</h2>
                <div class="heart">
                  <div class="heart-icon">
                    <div class="heart-t">❤</div>
                    <div class="num-like">321</div>
                  </div>
                </div>
              </div>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <div class="hold-btn-t">
                <div class="btn-t">read more</div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-content">
              <div class="profge">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf-i2AK5EeP2v1YDvf28g5HptD_isu38904-4menVTlPUgfbaEqUMKsEv7mzZ4xUYzStg&usqp=CAU"
                  alt="" class="prof">
              </div>
            </div>
            <div class="card-content">
              <div class="tex-like">
                <h2 class="name"> blog Your tittle </h2>
                <div class="heart">
                  <div class="heart-icon">
                    <div class="heart-t">❤</div>
                    <div class="num-like">321</div>
                  </div>
                </div>
              </div>
              <p class="description">The lorem text the section that contains header with having open functionality.</p>
               <br>
              <div class="hold-btn-t">
                <div class="btn-t">read more</div>
              </div>
            </div>
          </div>
        </div>



      </div>
      <div id="arrow-prev-2" class="swiper-button-prev"></div>
      <div id="arrow-next-2" class="swiper-button-next "></div>
    </div>

  </section>
  <footer>
    <nav>
      <div class="footernav">
        <a href="#"><img src="Group 25.png" class="footer-logo"></a>
        <label>our location</label>
        <label>qick links</label>
        <label>other links</label>
        <label>contact INFO</label>

        <div class="footerlocation">
          <ul>
            <li><a id="india" href="#">INDIA</a></li>
            <li><a id="USA" href="#">USA</a></li>
            <li><a id="CANADA" href="#">CANADA</a></li>
            <li><a id="JORDAN" href="#">JORDAN</a></li>
            <li><a id="UAE" href="#">UAE</a></li>
            <li><a id="KUWAIT" href="#">KUWAIT</a></li>

          </ul>
          <ul class="location">
            <li>
              <img for="india" src="location.png">
            </li>
            <li>
              <img for="USA" src="location.png">
            </li>
            <li>
              <img for="CANADA" src="location.png">
            </li>
            <li>
              <img for="JORDAN" src="location.png">
            </li>
            <li>
              <img for="UAE" src="location.png">
            </li>
            <li>
              <img for="KUWAIT" src="location.png">
            </li>
          </ul>
        </div>
        <div class="quick-links">
          <ul>
            <li>

              <section id="section1"><a href="section1">Home</a></section>
            </li>
            <li>

              <section id="section2"><a href="section2">Featured</a></section>
            </li>
            <li>

              <section id="section3"><a href="section3">Arrivals</a></section>
            </li>
            <li>

              <section id="section4"><a href="section4">Reviws</a></section>
            </li>
            <li>

              <section id="section5"><a href="section5">blogs</a></section>
            </li>
          </ul>
        </div>
        <div class="arrows">
          <span>&#8594;</span>
          <span>&#8594;</span>
          <span>&#8594;</span>
          <span>&#8594;</span>
          <span>&#8594;</span>
        </div>
        <div class="other-links">
          <ul>
            <li>

              <section><a href="#">Account INFO</a></section>
            </li>
            <li>

              <section><a href="#">Order</a></section>
            </li>
            <li>

              <section><a href="#">privacy & policy</a></section>
            </li>
            <li>

              <section><a href="#">Payment method</a></section>
            </li>
            <li>

              <section><a href="#">our services</a></section>
            </li>
          </ul>
        </div>
        <div class="arrows2">
          <span>&#8594;</span>
          <span>&#8594;</span>
          <span>&#8594;</span>
          <span>&#8594;</span>
          <span>&#8594;</span>
        </div>
        <div class="contact-info">
          <ul>
            <li>
              <a class="fa fa-phone" href="#"> +1 34433689433</a>
            </li>
            <li>
              <a class="fa fa-phone" href="#"> +1 34433899770</a>
            </li>
            <li>
              <a class="fa fa-envelope" href="#"> saiddebhaa@shujaa.com</a>
            </li>
          </ul>
        </div>
    </nav>
    <div>
      <a href="#"> <i class="fa fa-instagram icons"></i></a>
      <a href="#"> <i class="fa fa-facebook icons"></i></a>
      <a href="#"> <i class="fa fa-twitter icons"></i></a>
    </div>
    <h6>all copyrights reserved</h6>


  </footer>



  <script src="df.js"></script>
  <script src="./js/jsFile.js"></script>
</body>

</html>