@extends('admin.layouts.default')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Customer</a></li>
</ul>

<h1>Customers</h1>


<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Customer manage table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>#</th>								  
								  <th>Name</th>								  
								  <th>Email</th>
								  <th>Mobile</th>
								  <th>Address</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>								
								<td class="center"></td>						
								<td class="center">Rahim</td>						
								<td class="center">Rahim@gmail.com</td>					
								<td class="center">0172532365</td>						
								<td class="center">Mirpur-1,panirtanki bazar</td>
							</tr>
							<tr>								
								<td class="center"></td>						
								<td class="center">Riaz</td>						
								<td class="center">Riaz@gmail.com</td>					
								<td class="center">0172532365</td>						
								<td class="center">Dhanmondi-1,panirtanki bazar</td>
							</tr>
							

					
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


@stop