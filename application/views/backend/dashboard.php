         <br>
         <?php if($this->session->userdata('level') == 1) :?>
             <div class="analytics-sparkle-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="analytics-sparkle-line reso-mg-b-30">
                                <div class="analytics-content">
                                    <h5>Creditor Activity</h5>
                                    <h2><span class="counter"><?= $councreditor ?></span> <span class="tuition-fees">Total Activity</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="analytics-sparkle-line reso-mg-b-30">
                                <div class="analytics-content">
                                    <h5>Debitor Activity</h5>
                                    <h2><span class="counter"><?= $coundebitor ?></span> <span class="tuition-fees">Total Activity</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                                <div class="analytics-content">
                                    <h5>Website users</h5>
                                    <h2><span class="counter">2000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($this->session->userdata('level') == 2) :?>
                <div class="single-pro-review-area mt-t-30 mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <?php if($this->session->flashdata('allert') == 'success_insert') :?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>Data added successfully</strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif;?>
                        <?php if($this->session->flashdata('allert') == 'failed_insert'): ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Data failed to add</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>    
                  <?php endif;?>
                  <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Basic Information</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                         <form action="<?php echo base_url(). 'back/ActivityController/storesuperuser'; ?>" enctype="multipart/form-data" method="post">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                     <select class='fstdropdown-select' name="user_id" id="first">
                                                        <option value="">Select creditors</option>
                                                        <?php foreach($activity as $activ) :?>
                                                            <option value="<?php echo $activ->user_id ?>"><?php echo $activ->firstname ?> <?php echo $activ->lastname ?> - <?php echo $activ->proof_id ?></option>
                                                        <?php endforeach ;?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                 <select class='fstdropdown-select' name="jenis" id="first">
                                                    <option value="">Select type creditors</option>
                                                    <option value="Preferen">Preferen</option>
                                                    <option value="Separatis">Separatis</option>
                                                    <option value="Konkuren">Konkuren</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label>Total Amount of Debt</label>
                                            <div class="form-group">
                                                <input name="total" type="number" required="" class="form-control" placeholder="Rp 10.000.000">
                                            </div> 

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="payment-adress">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php elseif($this->session->userdata('level') == 3) :?>
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if($this->session->flashdata('allert') == 'success_insert') :?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Data added successfully</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif;?>
                <?php if($this->session->flashdata('allert') == 'failed_insert'): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data failed to add</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>                 
          <?php endif;?>
          <div class="product-payment-inner-st">
            <ul id="myTabedu1" class="tab-review-design">
                <li class="active"><a href="#description">Basic Information</a></li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div id="dropzone1" class="pro-ad">
                                 <form action="<?php echo base_url(). 'back/ActivityController/store'; ?>" enctype="multipart/form-data" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input name="firstname" type="text" class="form-control" placeholder="Firstname" required="">
                                            </div>
                                            <div class="form-group">
                                                <input name="lastname" type="text" class="form-control" placeholder="Lastname" required="">
                                            </div>
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input name="phone" id="phone" type="number" class="form-control" placeholder="Number Phone" required="">
                                            </div>
                                            <div class="form-group">
                                                <textarea required="" name="address" placeholder="Your address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input name="total_k" type="number" required="" class="form-control" placeholder="Rp 10.000.000">
                                            </div> 
                                            <label>Documents supports <span style="color: red">*</span></label>
                                            <div class="form-group">
                                                <input name="file1" type="file" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input name="file2" type="file" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input name="file3" type="file" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input name="file4" type="file" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input name="file5" type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="payment-adress">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php endif ;?>
