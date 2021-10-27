var images = ['picture/HBCK_01.jpg', 'picture/HBCK_02.jpg', 'picture/HBCK_03.jpg',];

    var x = 0;

    var imgs = document.getElementById('imgSlider ');

    setInterval(slider, 2000);


    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";


    }
