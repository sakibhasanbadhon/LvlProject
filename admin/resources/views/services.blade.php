@extends('layout.app')
@section('title','Service')

@section('content')




<div id="mainDiv" class="container d-none">
	<div class="row">
		<div class="col-md-12 p-5">
			<button class="addNewBntId my-3 btn btn-info btn-sm"> Add New</button>

			<table id="serviceDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
  				<thead>
				    <tr>
				    	<th class="th-sm">Image</th>
					  	<th class="th-sm">Name</th>
					  	<th class="th-sm">Description</th>
					  	<th class="th-sm">Edit</th>
					  	<th class="th-sm">Delete</th>
				    </tr>
 				 </thead>

  			<tbody id="service_table">

				
  			</tbody>

		</table>

	  </div>
	</div>
</div>



 {{-- service loading Animation imgae --}}
<div id="loaderDiv" class="container">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			<img class="m-5" width="420" height="230" src="{{asset('images/Loading.svg')}}" alt="">

	  </div>
	</div>
</div>

{{-- something went Wrong --}}
<div id="wrongDiv" class="container d-none">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			
			<h3> Something went Wrong !</h3>

	  </div>
	</div>
</div>



<!-- Service Delete Modals -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body"> are you sure to delete this item</div>

	  <h6 id="serviceDeleteId" class="text-center d-none"> </h6>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">NO</button>
        <button id="serviceDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">YES</button>
      </div>
    </div>
  </div>
</div>



<!-- Edit Modals -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content pb-5 p-5">
			<div class="modal-header border-bottom mb-3">
				<h5 class="modal-title">Update New Service</h5>
			</div>
		
		<h6 id="serviceEditId" class="text-center d-none"> </h6> 
			      
		<div id="serviceEditForm" class="d-none w-100">
			<input type="text" id="serviceNameId" class="form-control mb-4" placeholder="Service Name">
			<input type="text" id="serviceDesId" class="form-control mb-4" placeholder="Service Description">
			<input type="text" id="serviceImgId" class="form-control mb-4" placeholder=" Service Image link">	
		</div>
		
		<img id="serviceEditLoader" class="m-4" width="350" height="150" src="{{asset('images/Loading.svg')}}" alt="">
		<h5 id="serviceEditWrong" class="d-none"> Something went Wrong !</h5>
		 

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
				<button id="serviceEditConfirmBtn" type="button" class="btn btn-danger btn-sm">Save</button>
			</div>
    	</div>
  	</div>
</div>




<!-- Add Modals -->

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content pb-5 p-5">
			      
		<div id="serviceAddForm" class="w-100">
			<h6 class="text-center font-weight-bold mb-4">Add New Services</h6>
			<span>নামঃ</span> <br>
			<input type="text" id="serviceAddNameId" class="form-control mb-4" placeholder="সার্ভিস নাম ">
			<span>বর্ণনাঃ </span> <br>
			<input type="text" id="serviceAddDesId" class="form-control mb-4" placeholder="সার্ভিস বর্ণনা">
			<span>ছবি লিংকঃ </span> <br>
			<input type="text" id="serviceAddImgId" class="form-control mb-4" placeholder=" সার্ভিস ছবি লিংক ">	
		</div>
		

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
				<button id="serviceAddConfirmBtn" type="button" class="btn btn-danger btn-sm">Add New</button>
			</div>
    	</div>
  	</div>
</div>




@endsection







<!-- script Section Er jonno/ app.blade.php er niche yield ase -->

@section('script')

	<script type="text/javascript">
		getServiceData();

// For Service Table
function getServiceData() {
	axios.get('/getService')

		.then(function(response) {
			if(response.status==200) {

				$('#mainDiv').removeClass('d-none');
				$('#loaderDiv').addClass('d-none');

				$('#serviceDataTable').DataTable().destroy(); // jquery DataTable empty korar jonno
				$('#service_table').empty(); //getServiceData fun ses a re-call korar somoy ai table first a empty hobe

				var jsonData =response.data;
				$.each(jsonData,function(i,item){
				  $('<tr>').html(
			  		"<td> <img class='table-img' src="+jsonData[i].service_img +"></td>"+
			  		"<td>"  +jsonData[i].service_name + "</td>" +
			  		"<td> "  +jsonData[i].service_des + "  </td>" +
			  		"<td> <a class='serviceEditBtn' data-id="+jsonData[i].id+"   ><i class='fas fa-edit'></i></a>   </td>" +
			  		"<td> <a class='serviceDeleteBtn' data-id="+jsonData[i].id+"  ><i class='fas fa-trash-alt'></i></a>  </td>"
					).appendTo('#service_table');
		});

	// Service table Delete Icon Click
	$('.serviceDeleteBtn').click(function(){
		var id = $(this).data('id');
			$('#deleteModal').modal('show'); //modal show korar jonno
			$('#serviceDeleteId').html(id);
	})




	// Service table Edit Icon Click
	$('.serviceEditBtn').click(function(){
			var id = $(this).data('id');
			$('#serviceEditId').html(id); //service page er serviceEditId Dhorse
			serviceUpdateDetails(id);
			$('#editModal').modal('show'); // Edit modal show korar jonno

	})


 
	//======= jquery Data Table Part =========

	$('#serviceDataTable').DataTable({"order":false});
	$('.dataTables_length').addClass('bs-select');

 



	}else{
		$('#loaderDiv').addClass('d-none');
		$('#wrongDiv').removeClass('d-none');
	}

	})

	.catch(function(error) {
		$('#loaderDiv').addClass('d-none');
		$('#wrongDiv').removeClass('d-none');
	});

}



// service Delete Modal Yes/delete Btn
$('#serviceDeleteConfirmBtn').click(function(){
	var id = $(serviceDeleteId).html();
	serviceDelete(id); //serviceDelete function Er Id Ata
})

//service delete
function serviceDelete(deleteId){

	$('#serviceDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation

axios.post('/serviceDelete',{
		id:deleteId
})
	.then(function(response){
		$('#serviceDeleteConfirmBtn').html("Yes");

		if(response.status==200) {

			if (response.data==1) {
				$('#deleteModal').modal('hide');
				toastr.success('Delete Success');
				getServiceData();
	
			}else{
				$('#deleteModal').modal('hide');
				toastr.error('OPPS! Delete Faild');
				getServiceData();
			}

		}else{
			$('#deleteModal').modal('hide'); //delete jodi na hoy
			toastr.error('Something went Wrong');
		}

})

.catch(function(error) {
	$('#deleteModal').modal('hide');
	toastr.error('Something went Wrong');

});


}


//================== Service each Details  ==============================

//each Update details
function serviceUpdateDetails(detailsId){
	axios.post('/serviceDetails',{id:detailsId})
		.then(function(response){
			if (response.status==200) {
				$('#serviceEditForm').removeClass('d-none');
				$('#serviceEditLoader').addClass('d-none');

				var jsonData =response.data;

				$('#serviceNameId').val(jsonData[0].service_name); // ak joner details input show korar jonno
				$('#serviceDesId').val(jsonData[0].service_des);
				$('#serviceImgId').val(jsonData[0].service_img);

			}else{
				$('#serviceEditLoader').addClass('d-none');
				$('#serviceEditWrong').removeClass('d-none');
				
			}

	})
	
	.catch(function(error) {
		$('#serviceEditLoader').addClass('d-none');
		$('#serviceEditWrong').removeClass('d-none');
	
	});
	
	
	}

//================== Service UPDATE  ========================================= 

// service Edit Modal Save Btn
$('#serviceEditConfirmBtn').click(function(){
	var id = $(serviceEditId).html(); //upore je responds ase sey value ta dhorse
	var name = $(serviceNameId).val();
	var des = $(serviceDesId).val();
	var img = $(serviceImgId).val();
		serviceUpdate(id,name,des,img);
})


//Service Update
function serviceUpdate(serviceId,serviceName,serviceDes,serviceImg){
	
	if(serviceName.length==0){
		toastr.error('OPPS! Service Name empty !');
	}
	else if(serviceDes.length==0){
		toastr.error('OPPS! Service description empty !');
	}
	else if(serviceImg.length==0){
		toastr.error('OPPS! Service Image empty !');
	}
	else{

		$('#serviceEditConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/serviceUpdate',{
			id:serviceId,
			name:serviceName, //ai name gula uporer Algument
			des:serviceDes,
			img:serviceImg
		})
			.then(function(response){
				$('#serviceEditConfirmBtn').html("save"); //serviceEditConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //serviceDelete er motoy
						$('#editModal').modal('hide');
						toastr.success('Update Success');
						getServiceData(); // table ta reload korar jonno getServiceData ke call kora hoyese
			
					}else{
						$('#editModal').modal('hide');
						toastr.error('OPPS! Update Faild');
						getServiceData();// table ta reload korar jonno getServiceData ke call kora hoyese
					}
				}else{
					$('#editModal').modal('hide');
					toastr.error('Something went Wrong');

				}

	
		})
		
		.catch(function(error) {
			$('#editModal').modal('hide');
			toastr.error('Something went Wrong');
		
		});

	}

	}


	//================== Service ADD  ========================================= 

	
// Service add new btn Click
$('.addNewBntId').click(function(){
	$('#addModal').modal('show'); // Edit modal show korar jonno
})


// service add Modal Save Btn
$('#serviceAddConfirmBtn').click(function(){
	var name = $(serviceAddNameId).val();
	var des = $(serviceAddDesId).val();
	var img = $(serviceAddImgId).val();
	serviceAdd(name,des,img);
})


//service Add function

function serviceAdd(serviceName,serviceDes,serviceImg){
	
	if(serviceName.length==0){
		toastr.error('OPPS! Service Name empty !');
	}
	else if(serviceDes.length==0){
		toastr.error('OPPS! Service description empty !');
	}
	else if(serviceImg.length==0){
		toastr.error('OPPS! Service Image empty !');
	}
	else{

		$('#serviceAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/serviceAdd',{
			name:serviceName, //ai name gula uporer Algument
			des:serviceDes,
			img:serviceImg
		})
			.then(function(response){
				$('#serviceAddConfirmBtn').html("save"); //serviceEditConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //serviceDelete er motoy
						$('#addModal').modal('hide');
						toastr.success('Add Success');
						getServiceData(); // table ta reload korar jonno getServiceData ke call kora hoyese
						
			
					}else{
						$('#addModal').modal('hide');
						toastr.error('OPPS! Add Faild');
						getServiceData();
					}
				}else{
					$('#addModal').modal('hide');
					toastr.error('Something went Wrong');

				}

		})
		
		.catch(function(error) {
			$('#addModal').modal('hide');
			toastr.error('Something went Wrong ok');
		
		});
	}

	}



	</script>

@endsection