 <style type="text/css">
 	span.text {
 		font-weight: bold;
 	}
 </style>
 <div class="product-status mg-b-15">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 				<div class="product-status-wrap drp-lst">
 					<div class="sparkline13-hd">
 						<div class="main-sparkline13-hd">
 							<h1>Compare <span class="table-project-n"></span></h1>
 						</div>
 					</div>
 					<div style="overflow-x:auto;">
 						<table id="example" class="table table-striped table-bordered" style="width:100%">
 							<thead>
 								<tr>
 									<th width="100%">Basic Informations</th>
 									<th>Document Supports</th>
 									<th>The amount of the<br> bill Creditors</th>
 									<th>%</th>
 									<th>The amount of the <br>bill Debitors</th>
 									<th>%</th>
 									<th width="80%">Creditors</th>
 									<th width="80%">Debitors</th>
 									<th>Informations</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php foreach($compare as $comp) :?>
 									<tr>
 										<td>
 											<ul>
 												<li><?php echo $comp->firstname.' '. $comp->lastname ?></li>
 												<li><?php echo $comp->address ?></li>
 												<li><span class="text">phone : </span><?php echo $comp->phone.' '.'<span class="text">'.'email : '. '</span>' . $comp->email ?></li>
 											</ul>
 										</td>
 										<td>
 											<ul>
 												<li><a href="<?php echo base_url('admin/CompareController/download/'. $comp->file1)?>"><?php echo $comp->file1.'</a>'.'</li>'.'<li>'.$comp->file2.'</li>'.'<li>'.$comp->file3.'</li>'.'<li>'.$comp->file4.'</li>'.'<li>'.$comp->file5 ?></li>
 											</ul>
 										</td>
 										<td>Rp <?php echo rupiah($comp->total_k) ?></td>
 										<td><?php echo $comp->percent_k .'%' ?></td>
 										<td>Rp <?php echo rupiah($comp->total) ?></td>
 										<td><?php echo $comp->percent .'%' ?></td>
 										<td></td>
 										<td></td>
 										<td></td>
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
