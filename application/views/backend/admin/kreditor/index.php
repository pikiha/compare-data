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
                                    <th>Document Supports</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Number Phone</th>
                                    <th>Total</th>
                                    <th>%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($creditor as $credit) :?>
                                    <tr>
                                        <td><?php echo $credit->firstname.' '.$credit->lastname ?></td>
                                        <td>
                                            <ul>
                                                <li><?php echo $credit->file1.'</li>'.'<li>'.$credit->file2.'</li>'.'<li>'.$credit->file3.'</li>'.'<li>'.$credit->file4.'</li>'.'<li>'.$credit->file5 ?></li>
                                            </ul>
                                        </td>
                                        <td><?php echo $credit->email ?></td>
                                        <td><?php echo $credit->address ?></td>
                                        <td><?php echo $credit->phone ?></td>
                                        <td>Rp <?php echo rupiah($credit->total_k) ?></td>
                                        <td><?php echo $credit->percent_k. '%' ?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis', 'print' ]
        } );

        table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
    } );

</script>
