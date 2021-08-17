<!-- footer section-->
<footer class="ht-footer">
  <div class="container">
    <div class="flex-parent-ft">
      <div class="flex-child-ft item1">
         <a href="<?php echo base_url('welcome/index'); ?>"><img class="logo" src="<?php echo base_url('assets/images/logo1.png'); ?>" alt=""></a>
         <p>Movie<br>
        Jakarta Barat</p>
        <p>Call us: <a href="#">+62838-7865-4003</a></p>
      </div>
      <div class="flex-child-ft item2">
        <h4>Resources</h4>
        <ul>
          <li><a href="#">About</a></li> 
          <li><a href="#">Blockbuster</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Forums</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Help Center</a></li>
        </ul>
      </div>
      <div class="flex-child-ft item3">
        <h4>Legal</h4>
        <ul>
          <li><a href="#">Terms of Use</a></li> 
          <li><a href="#">Privacy Policy</a></li> 
          <li><a href="#">Security</a></li>
        </ul>
      </div>
      <div class="flex-child-ft item4">
        <h4>Account</h4>
        <ul>
          <li><a href="#">My Account</a></li> 
          <li><a href="#">Watchlist</a></li>  
          <li><a href="#">Collections</a></li>
          <li><a href="#">User Guide</a></li>
        </ul>
      </div>
      <div class="flex-child-ft item5">
        <h4>Newsletter</h4>
        <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
        <form action="#">
          <input type="text" placeholder="Enter your email...">
        </form>
        <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
      </div>
    </div>
  </div>
  <div class="ft-copyright">
    <div class="backtotop">
      <p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
    </div>
  </div>
</footer>
<!-- end of footer section-->

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins2.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
<!-- <script type="text/javascript">
  url ='https://imdb-api.com/en/API/Top250Movies/k_quzyc85y';
  $.ajax({
    type: 'GET',
    url: url,
    // data: { category: 'advanced' },
    async:true,
    dataType : 'json',   //you may use jsonp for cross origin request
    crossDomain:true,
      success: function (data) {
        var item = data.items;
        var loop = document.getElementById('loop');
        var html = "";
        html += '<div class="slick-multiItemSlider">';
        for (const [key, value] of Object.entries(item)){
          if(key < 10){
            // console.log(value.id);
                $('#loop').append('<div class="movie-item"><div class="mv-img"><a href="#"><img src="' + value.image + '" alt="" width="285" height="437"></a></div><div class="title-in"><div class="cate"><h6><a href="#">' + value.fullTitle + '</a></h6><p><i class="ion-android-star"></i><span>'+ value.imDbRating +'</span></p></div></div>');
                // html += '<div class="movie-item"><div class="mv-img"><a href="#"><img src="' + value.image + '" alt="" width="285" height="437"></a></div><div class="title-in"><div class="cate"><h6><a href="#">' + value.fullTitle + '</a></h6><p><i class="ion-android-star"></i><span>'+ value.imDbRating +'</span></p></div></div></div>';
          }
          // if(key > 9){
          //    $('loop1').append('<div class="item"><div class="trailer-img"><img src="' + value.image + '"  alt="photo by Barn Images" width="4096" height="2737"></div><div class="trailer-infor"><h4 class="desc">' + value.fullTitle + '</h4><p>2:30</p></div></div>');
          // }
        }
        // loop.innerHTML = html;
      }
  });
</script>
<script type="text/javascript">
  url ='https://imdb-api.com/en/API/Top250Movies/k_quzyc85y';
  $.ajax({
    type: 'GET',
    url: url,
    // data: { category: 'advanced' },
    async:true,
    dataType : 'json',   //you may use jsonp for cross origin request
    crossDomain:true,
      success: function (data) {
        console.log(data.items);
        var item = data.items;
        for (const [key, value] of Object.entries(item)){
          if(key > 9 && key < 20){
            // console.log(value.fullTitle);
            $('.loop1').append('<div class="item"><div class="trailer-img"><img src="' + value.image + '"  alt="photo by Barn Images" width="4096" height="2737"></div><div class="trailer-infor"><h4 class="desc">' + value.fullTitle + '</h4><p>2:30</p></div></div>');
          }
        }
      }
  });
</script> -->
</body>


</html>