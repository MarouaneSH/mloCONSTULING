 <style>

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .carousel-inner>.item>img, .carousel-inner>.item>a>img {
        display: block;
        height: auto;
        max-width: 100%;
        line-height: 1;
        width: 100%; // Add this
        }
        .carousel-caption
        {
             top: 40%;
             bottom: auto;
        }
        .carousel-caption h1
        {
                font-size: 90px;
              font-weight: bold;
        }
        .carousel-caption h3
        {
            font-size:20px;
        }
      





        /* Typed */
        .typed-cursor{
            opacity: 1;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @keyframes  blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
  </style>