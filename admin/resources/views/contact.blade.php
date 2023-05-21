
@extends('layout.app')
@section('title','Contact')

@section('content')






<div id="contactMainDiv" class="container d-none">
    <div class="row">
    <div class="col-md-12 p-5">
    <table id="contactHeadTable" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm font-weight-bold ">Name</th>
          <th class="th-sm font-weight-bold ">Mobile</th>
          <th class="th-sm font-weight-bold ">email</th>
          <th class="th-sm font-weight-bold ">Contact Message</th>
          <th class="th-sm font-weight-bold ">Delete</th>

        </tr>
      </thead>
      <tbody id="contact_Table">
   

      </tbody>
    </table>
    
    </div>
    </div>
    </div>



 {{-- service loading Animation imgae --}}
 <div id="contactLoaderDiv" class="container ">
	<div class="row">
		<div class="col-md-12 text-center">
			<img class="m-5" width="420" height="230" src="{{asset('images/Loading.svg')}}" alt="">
	  </div>
	</div>
</div>



{{-- something went Wrong --}}
<div id="contactWrongDiv" class="container d-none">
	<div class="row">
		<div class="col-md-12 text-center p-5">
		    <h3> <i class='fas fa-not'></i> Something went Wrong !</h3>
	  </div>
	</div>
</div>












    <!-- contact Delete Modals -->

<div class="modal fade" id="contactDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <div class="modal-body"> are you sure to delete this item</div>
  
        <h6 id="contactDeleteId" class="text-center d-none"> </h6>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">NO</button>
          <button id="contactDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">YES</button>
        </div>
      </div>
    </div>
  </div>





@endsection


@section('script')

	<script type="text/javascript">

        getContactData(); //call kora hoyese





        // For Service Table
function getContactData() {
	axios.get('/getContactData')

		.then(function(response) {
			if(response.status==200) {

				$('#contactMainDiv').removeClass('d-none');
				$('#contactLoaderDiv').addClass('d-none');

				$('#contactHeadTable').DataTable().destroy(); // jquery DataTable empty korar jonno
				$('#contact_Table').empty(); //getServiceData fun ses a re-call korar somoy ai table first a empty hobe

				var jsonData =response.data;
				$.each(jsonData,function(i,item){
					$('<tr>').html(
						"<td class='font-weight-bold'>"  +jsonData[i].contact_name + "</td>" +
						"<td> "  +jsonData[i].contact_mobile + "  </td>" +
						"<td> "  +jsonData[i].contact_email + "  </td>" +
						"<td> "  +jsonData[i].contact_msg + "  </td>" +

						"<td> <a class='contactDeleteBtn' data-id="+jsonData[i].id+"  ><i class='fas fa-trash-alt'></i></a>  </td>"
					).appendTo('#contact_Table');
		});



//contact table Delete Icon Click

$('.contactDeleteBtn').click(function(){
	var id = $(this).data('id');
		$('#contactDeleteModal').modal('show'); //modal show korar jonno
		$('#contactDeleteId').html(id);
})


	
	//======= jquery Data Table Part =========

		$('#contactHeadTable').DataTable({"order":false});
		$('.dataTables_length').addClass('bs-select');




	}else{
		$('#contactLoaderDiv').addClass('d-none');
		$('#contactWrongDiv').removeClass('d-none');
	}

	})

	.catch(function(error) {
		$('#contactLoaderDiv').addClass('d-none');
		$('#contactWrongDiv').removeClass('d-none');
	});

}





//=======================   DELETE ===============================



// Project Delete Modal Yes/delete Btn

$('#contactDeleteConfirmBtn').click(function(){
	var id = $(contactDeleteId).html();
	contactDelete(id); //serviceDelete function Er Id Ata
})

//contact delete
function contactDelete(deleteId){

	$('#contactDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation

axios.post('/contactDelete',{
		id:deleteId
})
	.then(function(response){
		$('#contactDeleteConfirmBtn').html("Yes");
		if(response.status==200) {

			if (response.data==1) {
				$('#contactDeleteModal').modal('hide');
				toastr.success('Delete Success');
				getContactData();
	
			}else{
				$('#contactDeleteModal').modal('hide');
				toastr.error('OPPS! Delete Faild');
				getContactData();
			}

		}else{
			$('#contactDeleteModal').modal('hide'); //delete jodi na hoy
			toastr.error('Something went Wrong');
		}

})

.catch(function(error) {
	$('#contactDeleteModal').modal('hide');
	toastr.error('Something went Wrong');

});


}





    </script>  
@endsection