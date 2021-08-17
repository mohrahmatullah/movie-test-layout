<?php $this->load->view("_partials/head.php") ?>

<div class="slider movie-items">
  <div class="container">
    <div class="row">
      <div class="social-link">
        <p>Follow us: </p>
        <a href="#"><i class="ion-social-facebook"></i></a>
        <a href="#"><i class="ion-social-twitter"></i></a>
        <a href="#"><i class="ion-social-googleplus"></i></a>
        <a href="#"><i class="ion-social-youtube"></i></a>
      </div>
      <div class="slick-multiItemSlider">
        <?php foreach($database as $key => $value) : ?> 
          <?php if($key < 10){ ?>
          <div class="movie-item" data-toggle="modal" data-target="#exampleModal<?php echo $value->id; ?>">
              <div class="mv-img">
                <a><img src="<?php echo $value->image; ?>" alt="" width="285" height="437"></a>
              </div>
              <div class="title-in">
                <div class="cate">
                  <span class="blue"><a href="#"><?php echo $value->year; ?></a></span>
                </div>
                <h6><a><?php echo $value->title; ?></a></h6>
              </div>
          </div>
          <?php } ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<div class="trailers">
  <div class="container">
    <div class="row ipad-width">
      <div class="col-md-12">
        <div class="title-hd">
          <h2>in theater</h2>
          <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
        </div>
        <div class="videos">
          <div class="slider-nav-2 thumb-ft"> 
            <?php foreach($database as $key => $value) : ?> 
              <?php if($key > 9 && $key < 20){ ?>
                <?php if($value->rank % 2 == 0){ ?>
                  <div class="item" data-toggle="modal" data-target="#exampleModal<?php echo $value->id; ?>">
                    <div class="trailer-infor" style="width: 100%;">
                      <h4 class="desc"><?php echo $value->title; ?></h4>
                      <p><?php echo $value->year; ?></p>
                    </div>
                    <div class="trailer-img">
                      <img src="<?php echo $value->image; ?>"  alt="photo by Barn Images" width="4096" height="2737">
                    </div>
                  </div>
                <?php }else{ ?>
                  <div class="item" data-toggle="modal" data-target="#exampleModal<?php echo $value->id; ?>">
                    <div class="trailer-img">
                      <img src="<?php echo $value->image; ?>"  alt="photo by Barn Images" width="4096" height="2737">
                    </div>
                    <div class="trailer-infor">
                      <h4 class="desc"><?php echo $value->title; ?></h4>
                      <p><?php echo $value->year; ?></p>
                    </div>
                  </div>
                <?php } ?>                
              <?php } ?>
            <?php endforeach; ?>
          </div>
        </div>   
      </div>
    </div>
  </div>
</div>

<?php foreach($database as $key => $value) : ?> 
  <?php if($key < 10){ ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #06121e; color: #abb7c4;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->fullTitle; ?></h5>
          </div>
          <div class="modal-body">
            <div class="container mt-5">
                <div class="d-flex justify-content-center row">
                    <div class="align-content-center col-md-6">
                        <div class="review-card p-2 bg-white rounded">
                            <div class="d-flex mt-0 p-2">
                                <img src="<?php echo $value->image; ?>">
                                <br><br>
                                <div class="ml-1 mt-2">
                                    <h6 class="crop-text mb-0"><?php echo $value->title; ?></h6>
                                    <div class="mt-0"><span class="cmpny-name">Tahun : <?php echo $value->year; ?></span></div>
                                </div>
                            </div>
                            <div class="px-4 rating-box mb-3">
                                <div class="border rounded">
                                    <div class="score py-2">
                                        <div class="rating-out"><span class="get-rating">Rating : <?php echo $value->imDbRating; ?></span></div>
                                        <div><span>Crew : <?php echo $value->crew; ?></span></div>
                                    </div>
                                    <div class="d-flex justify-content-around align-items-center align-content-center border-top">
                                        <div class="border-right px-2 py-2"><span class="d-block font-weight-bold">Rank : </span><span><?php echo $value->rank; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #06121e;color: white;">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
<?php endforeach; ?>


<?php foreach($database as $key => $value) : ?> 
  <?php if($key > 9 && $key < 20){ ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #06121e; color: #abb7c4;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->fullTitle; ?></h5>
          </div>
          <div class="modal-body">
            <div class="container mt-5">
                <div class="d-flex justify-content-center row">
                    <div class="align-content-center col-md-6">
                        <div class="review-card p-2 bg-white rounded">
                            <div class="d-flex mt-0 p-2">
                                <img src="<?php echo $value->image; ?>">
                                <br><br>
                                <div class="ml-1 mt-2">
                                    <h6 class="crop-text mb-0"><?php echo $value->title; ?></h6>
                                    <div class="mt-0"><span class="cmpny-name">Tahun : <?php echo $value->year; ?></span></div>
                                </div>
                            </div>
                            <div class="px-4 rating-box mb-3">
                                <div class="border rounded">
                                    <div class="score py-2">
                                        <div class="rating-out"><span class="get-rating">Rating : <?php echo $value->imDbRating; ?></span></div>
                                        <div><span>Crew : <?php echo $value->crew; ?></span></div>
                                    </div>
                                    <div class="d-flex justify-content-around align-items-center align-content-center border-top">
                                        <div class="border-right px-2 py-2"><span class="d-block font-weight-bold">Rank : </span><span><?php echo $value->rank; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #06121e;color: white;">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
<?php endforeach; ?>
<?php $this->load->view("_partials/footer.php") ?>
