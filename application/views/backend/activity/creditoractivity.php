        <div class="product-status mg-b-15">
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="product-status-wrap drp-lst">
                <div style="overflow-x:auto;">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Name Creditors</th>
                        <th>Email</th>
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
                                <?php echo $activ->email ?>
                              </td>
                              <td><?php echo $activ->phone ?></td>
                              <td>Rp <?php echo rupiah($activ->total_k) ?></td>
                            </tr>
                          <?php endforeach;?>
                        </tbody>
                      <?php endif;?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>

        $(document).ready(function() {
          var table = $('#example').DataTable();
        } );

      </script>