        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">

                    <?php if($this->session->userdata('level') == 2) :?>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <div style="overflow-x:auto;">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name Creditors</th>
                                            <th>Type Creditors</th>
                                            <th>Address</th>
                                            <th>Number Phone</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <?php if($activity == NULL) :?>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>Empty!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>         
                                      <?php else:?>
                                        <tbody>
                                            <?php foreach($activity as $activ) :?>
                                                <tr>
                                                    <td><?php echo $activ->firstname.' '.$activ->lastname ?></td>
                                                    <td>
                                                       <button class="pd-setting badge"><?php echo $activ->jenis ?></button>
                                                   </td>
                                                   <td><?php echo $activ->address ?></td>
                                                   <td><?php echo $activ->phone ?></td>
                                                   <td>Rp <?php echo rupiah($activ->total) ?></td>
                                               </tr>
                                           <?php endforeach;?>
                                       </tbody>
                                   <?php endif;?>
                               </table>
                           </div>
                       </div>
                   </div>
                   <?php elseif($this->session->userdata('level') == 3) :?>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <div style="overflow-x:auto;">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Number Phone</th>
                                            <th>Document Supports</th>
                                            <th>Total</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <?php if($activity == NULL) :?>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>Empty!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>         
                                      <?php else:?>
                                        <tbody>
                                            <?php foreach($activity as $activ) :?>
                                                <tr>
                                                    <td><?php echo $activ->firstname.' '.$activ->lastname ?></td>
                                                    <td><?php echo $activ->email ?></td>
                                                    <td><?php echo $activ->address ?></td>
                                                    <td><?php echo $activ->phone ?></td>
                                                    <td>
                                                        <?php if($activ->file1.$activ->file2.$activ->file3.$activ->file4.$activ->file5 == NULL ) :?>
                                                            <ul>Empty!</ul>
                                                            <?php else:?>
                                                                <ul>
                                                                    <li><?php echo $activ->file1 ?> </li>
                                                                    <li><?php echo $activ->file2 ?></li>
                                                                    <li><?php echo $activ->file3 ?></li>
                                                                    <li><?php echo $activ->file4 ?></li>
                                                                    <li><?php echo $activ->file5 ?></li>
                                                                </ul>
                                                            <?php endif;?>
                                                        </td>
                                                        <td>Rp <?php echo rupiah($activ->total_k) ?></td>
                                                        <td><?php echo $activ->date ?></td>
                                                    </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                        <?php endif;?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>


        <script>

            $(document).ready(function() {
                var table = $('#example').DataTable();
            } );

        </script>