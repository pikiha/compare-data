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
 									<th>Type of creditors</th>
 									<th>Address</th>
 									<th>Number Phone</th>
 									<th>Total</th>
 									<th>%</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php foreach($debitor as $debt) :?>
 									<tr>
 										<td><?php echo $debt->firstname.' '.$debt->lastname ?></td>
 										<td><?php echo $debt->jenis ?></td>
 										<td><?php echo $debt->address ?></td>
 										<td><?php echo $debt->phone ?></td>
 										<td>Rp <?php echo rupiah($debt->total) ?></td>
 										<td><?php echo $debt->percent. '%' ?></td>
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
