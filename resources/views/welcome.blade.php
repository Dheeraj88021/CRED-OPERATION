<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-OPERATIONS</title>
    <link rel="shortcut icon" href="data:image/png;base64,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" type="data:image/png;base64,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">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

      /* styling the whole landing page and also mobile respoinsive */

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      /* Custom ScroolBar */

      ::-webkit-scrollbar{
        width: 1px;
        background-color:black;
      }

      body {
        background: #800080;
      }
      
      /* background custom color */
      .bg {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(
          45deg,
          #800080 20%,
          #e95557 46%,
          #ff8c00 100%
        );
      }
      .glass {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
      .glass li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.18);
        animation: spin 5s linear infinite;
        bottom: -150px;
      }
      .glass li:nth-child(1) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 2s;
      }
      .glass li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
        animation-duration: 12s;
      }
      .glass li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 6s;
      }
      .glass li:nth-child(4) {
        left: 40%;
        width: 20px;
        height: 20px;
        animation-delay: 8s;
        animation-duration: 18s;
      }
      .glass li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
      }
      .glass li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 4s;
      }
      .glass li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 6s;
      }
      .glass li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
      }
      .glass li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
      }
      .glass li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
      }
      @keyframes spin {
        0% {
          transform: translateY(0) rotate(0deg);
          opacity: 1;
          border-radius: 10%;
        }
        100% {
          transform: translateY(-1000px) rotate(720deg);
          opacity: 0;
        }
      }

       /* Navbar Side */
      nav{
        position: absolute;
        top:0;
        color:white;
        padding:25px 50px;
        width: 100%;
      }
      .navTop{
        display:flex;
        align-items:center;
        justify-content:space-between;
      }
      .search{
        display:flex;
        align-items:center;
        background-image: linear-gradient(
          45deg,
          #800080 20%,
          #e95557 46%,
          #ff8c00 100%
        );
        padding:10px 30px;
        border-radius:10px;
    }
    
    .SearchInp{
        color:white;
        border:none;
        outline:none;
        background-color:transparent;
    }
    .SearchInp::placeholder{
        color:white;
    }
    .limited{
        font-size:20px;
        border-bottom:2px solid green;
        cursor:pointer;
    }
    .navBottom{
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .menu{
        margin-right:40px;
        margin-top:20px;
        cursor:pointer;
        color:lightgray;
        font-weight:300;
        font-size:22px;
    }
    
    /* custom slider start point  */

    .slider{
        position: absolute;
        top:150px;
        width: 100%;
        height:127%;
        background: url("https://images.unsplash.com/photo-1604147495798-57beb5d6af73?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80");
        overflow: hidden;
    }
    .sliderWrapper{
          display: flex;
          width: 500vw;
          transition: all 1.5s ease-in-out;
        }

    .sliderItem {
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        }

    .sliderBag {
        width: 750px;
        height: 750px;
        border-radius: 50%;
        position: absolute;
        }

        .sliderImg{
            z-index: 1;
        }

    .sliderTitle {
        position: absolute;
        top: 10%;
        right: 10%;
        font-size: 60px;
        font-weight: 900;
        text-align: center;
        color: white;
        z-index: 1;
        }

    .sliderPrice {
        position: absolute;
        top: 10%;
        padding:10px;
        border-radius:20px;
        left: 10%;
        font-size: 60px;
        font-weight: 300;
        text-align: center;
        color: white;
        border: 1px solid gray;
        z-index: 1;
        }

    .buyButton {
        position: absolute;
        top: 50%;
        right: 10%;
        font-size: 30px;
        font-weight: 900;
        color: white;
        padding:10px;
        border-radius:10px;
        border: 1px solid gray;
        background-color: black;
        z-index: 1;
        cursor: pointer;
        }

    .buyButton:hover {
        background-color: white;
        color: black;
        }

    .sliderItem:nth-child(1) .sliderBag{
            background-color:#369e62;
        }

    .sliderItem:nth-child(2) .sliderBag{
            background-color:rebeccapurple;
        }
    .sliderItem:nth-child(3) .sliderBag{
            background-color:teal;
        }
    .sliderItem:nth-child(4) .sliderBag{
            background-color:cornflowerblue;
        }
   .sliderItem:nth-child(5) .sliderBag{
            background-color: rgb(124, 115, 80);;
        }
    
    .sliderItem:nth-child(1) .sliderPrice{
            color:#369e62;
        }

    .sliderItem:nth-child(2) .sliderPrice{
            color:white;
        }
    .sliderItem:nth-child(3) .sliderPrice{
            color:teal;
        }
    .sliderItem:nth-child(4) .sliderPrice{
            color:cornflowerblue;
        }
    .sliderItem:nth-child(5) .sliderPrice{
            color: cornsilk;
        }


  @media screen and (max-width:480px) {
  nav{
    padding: 5px;
    margin:-1px;
  }

  .search{
    display: none;
  }

  .navBottom{
    flex-wrap: wrap;
  }

  .menu{
    margin: 20px;
    font-weight: 700;
    font-size: 20px;
  }

  .slider{
    clip-path: none;
  }

  .sliderImg{
    width: 90%;
  }

  .sliderBag{
    width: 100%;
    height: 100%;
  }

  .sliderTitle{
    display: none;
  }

  .sliderPrice{
    top: unset;
    bottom: -50;
    left: 0;
    background-color: lightgrey;
  }

  .buyButton{
    right: 0;
    top: 0;
  }
  }
    
    </style>
</head>
<body>

<!-- here are to create the custom background color -->

<div class="bg">
      <div class="glass">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </div>
</div>

<!-- and there are the landing page of the ecommerce website  -->

<nav>
        <div class="navTop">
            <div class="navItem">
                <h2>.sneakers</h2>
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="search" placeholder="Search here....." class="SearchInp">
                    <img src="https://github.com/safak/youtube/blob/html-css-js-ecommerce/img/search.png?raw=true" width="20px" height="20px" class="searchIcon">
                </div>
            </div>

            <div class="navItem">
            <span class="limited">
                Limited
            </sapn>    
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menu">SHOESE<h3>
            <h3 class="menu">JORDAN<h3>
            <h3 class="menu">SHOESE PUMA<h3>
            <h3 class="menu">SHOESE NIKE <h3>
            <h3 class="menu">SHOESE ADDIDAS<h3>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="https://raw.githubusercontent.com/safak/youtube/html-css-js-ecommerce/img/air.png" class="sliderImg">
                    <div class="sliderBag"></div>
                    <h1 class="sliderTitle">SHOESE </br> NEW </br> SEASEN</h1>
                    <h2 class="sliderPrice">$119</h2>
                    <button class="buyButton">BUY NOW</button>
            </div>
            
            <div class="sliderItem">
                <img src="https://raw.githubusercontent.com/safak/youtube/html-css-js-ecommerce/img/jordan.png" class="sliderImg">
                    <div class="sliderBag"></div>
                    <h1 class="sliderTitle">JORDAN </br> NEW </br> SEASEN</h1>
                    <h2 class="sliderPrice">$119</h2>
                    <button class="buyButton">BUY NOW</button>
            </div>
            <div class="sliderItem">
                <img src="https://raw.githubusercontent.com/safak/youtube/html-css-js-ecommerce/img/crater.png" class="sliderImg">
                    <div class="sliderBag"></div>
                    <h1 class="sliderTitle">SHOESE PUMA  </br> NEW </br> SEASEN</h1>
                    <h2 class="sliderPrice">$119</h2>
                    <button class="buyButton">BUY NOW</button>
            </div>
            <div class="sliderItem">
                <img src="https://github.com/safak/youtube/blob/html-css-js-ecommerce/img/blazer.png?raw=true" class="sliderImg">
                    <div class="sliderBag"></div>
                    <h1 class="sliderTitle">SHOESE NIKE </br> NEW </br> SEASEN</h1>
                    <h2 class="sliderPrice">$119</h2>
                    <button class="buyButton">BUY NOW</button>
            </div>
            <div class="sliderItem">
                <img src="https://raw.githubusercontent.com/safak/youtube/html-css-js-ecommerce/img/crater2.png" class="sliderImg">
                    <div class="sliderBag"></div>
                    <h1 class="sliderTitle">SHOESE AIR </br> NEW </br> SEASEN</h1>
                    <h2 class="sliderPrice">$119</h2>
                    <button class="buyButton">BUY NOW</button>
            </div>

        </div>
    </div>



    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    

    <script>

      const wrapper = document.querySelector(".sliderWrapper");
      const menuItems = document.querySelectorAll(".menu");

      menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;
      })})


  </script>
</body>
</html>