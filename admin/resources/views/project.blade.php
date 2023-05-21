@extends('layout.app')
@section('title','Project')

@section('content')




<div id="projectMainDiv" class="container">
    <div class="row">
        <div class="col-md-12 p-5">
          <button id="projectAddBtn" class="btn btn-info btn-sm"> Add New </button>

            <table id="projectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th class="th-sm">Image</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Description</th>
                    <th class="th-sm">project Link</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                    </tr>
                </thead>

                <tbody id="project_Table">


                </tbody>
            </table>
        </div>
    </div>
</div>




 {{-- service loading Animation imgae --}}
 <div id="projectLoaderDiv" class="container ">
	<div class="row">
		<div class="col-md-12 text-center">
			<img class="m-5" width="420" height="230" src="{{asset('images/Loading.svg')}}" alt="">
	  </div>
	</div>
</div>



{{-- something went Wrong --}}
<div id="projectWrongDiv" class="container d-none">
	<div class="row">
		<div class="col-md-12 text-center p-5">
		    <h3> <i class='fas fa-not'></i> Something went Wrong !</h3>
	  </div>
	</div>
</div>






<!-- Service Delete Modals -->

<div class="modal fade" id="projectDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <div class="modal-body"> are you sure to delete this item</div>
  
        <h6 id="projectDeleteId" class="text-center d-none"> </h6>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">NO</button>
          <button id="projectDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">YES</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Edit Modals -->

<div class="modal fade" id="projectEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content pb-5 p-5">
			<div class="modal-header border-bottom mb-3">
				<h5 class="modal-title">Update New Service</h5>
			</div>
		
		<h6 id="projectEditId" class="text-center d-none"> </h6> 
			      
		<div id="projectEditForm" class="d-none w-100">
			<input type="text" id="projectNameId" class="form-control mb-4" placeholder="Service Name">
			<input type="text" id="projectDesId" class="form-control mb-4" placeholder="Service Description">
            <input type="text" id="projectLinkId" class="form-control mb-4" placeholder="Service Description">
			<input type="text" id="projectImgId" class="form-control mb-4" placeholder=" Service Image link">	
		</div>
		
		<img id="projectEditLoader" class="m-4" width="350" height="150" src="{{asset('images/Loading.svg')}}" alt="">
		<h5 id="projectEditWrong" class="d-none"> Something went Wrong !</h5>
		 

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
				<button id="projectEditConfirmBtn" type="button" class="btn btn-danger btn-sm">Save</button>
			</div>
    	</div>
  	</div>
</div>




<!-- Add Modals -->

<div class="modal fade" id="projectAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content pb-5 p-5">
			      
		<div id="projectAddForm" class="w-100">
			<h6 class="text-center font-weight-bold mb-4">Add New Services</h6>
			<span>নামঃ</span> <br>
			    <input type="text" id="projectAddNameId" class="form-control mb-4" placeholder="সার্ভিস নাম ">
			
                <span>বর্ণনাঃ </span> <br>
			    <input type="text" id="projectAddDesId" class="form-control mb-4" placeholder="সার্ভিস বর্ণনা">
			
                <span>প্রজেক্ট লিংকঃ </span> <br>
                <input type="text" id="projectAddLinkId" class="form-control mb-4" placeholder="লিংক">
           
                <span>ছবি লিংকঃ </span> <br>
			    <input type="text" id="projectAddImgId" class="form-control mb-4" placeholder=" সার্ভিস ছবি লিংক ">	
		</div>
		

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
				<button id="projectAddConfirmBtn" type="button" class="btn btn-danger btn-sm">Add New</button>
			</div>
    	</div>
  	</div>
</div>







@endsection










@section('script')

	<script type="text/javascript">

        getProjectData();




		// For Service Table
function getProjectData() {
	axios.get('/getProjectData')

		.then(function(response) {
			if(response.status==200) {

				$('#projectMainDiv').removeClass('d-none');
				$('#projectLoaderDiv').addClass('d-none');

                $('#projectTable').DataTable().destroy(); // jquery DataTable empty korar jonno
				$('#project_Table').empty(); //getServiceData fun ses a re-call korar somoy ai table first a empty hobe

				var jsonData =response.data;
				$.each(jsonData,function(i,item){
				  $('<tr>').html(
			  		"<td> <img class='table-img' src="+jsonData[i].project_img +"></td>"+
			  		"<td>"  +jsonData[i].project_name + "</td>" +
			  		"<td> "  +jsonData[i].project_des + "  </td>" +
                    "<td> "  +jsonData[i].project_link + "  </td>" +
			  		"<td> <a class='projectEditBtn' data-id="+jsonData[i].id+"   ><i class='fas fa-edit'></i></a>   </td>" +
			  		"<td> <a class='projectDeleteBtn' data-id="+jsonData[i].id+"  ><i class='fas fa-trash-alt'></i></a>  </td>"
					).appendTo('#project_Table');
		});



// project table Delete Icon Click

$('.projectDeleteBtn').click(function(){
    var id = $(this).data('id');
        $('#projectDeleteModal').modal('show'); //modal show korar jonno
        $('#projectDeleteId').html(id);
})




	// Service table Edit Icon Click

	$('.projectEditBtn').click(function(){
			var id = $(this).data('id');
			$('#projectEditId').html(id); //service page er serviceEditId Dhorse
			projectUpdateDetails(id);
			$('#projectEditModal').modal('show'); // Edit modal show korar jonno

	})


 
	//======= jquery Data Table Part =========

	  $('#projectTable').DataTable({"order":false});
	  $('.dataTables_length').addClass('bs-select');

 



	}else{
		$('#projectLoaderDiv').addClass('d-none');
		$('#projectWrongDiv').removeClass('d-none');
	}

	})

	.catch(function(error) {
		$('#projectLoaderDiv').addClass('d-none');
		$('#projectWrongDiv').removeClass('d-none');
	});

}


//=======================   DELETE ===============================



// Project Delete Modal Yes/delete Btn

$('#projectDeleteConfirmBtn').click(function(){
	var id = $(projectDeleteId).html();
	projectDelete(id); //serviceDelete function Er Id Ata
})

//Project delete
function projectDelete(deleteId){

	$('#projectDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation

axios.post('/projectDelete',{
		id:deleteId
})
	.then(function(response){
		$('#projectDeleteConfirmBtn').html("Yes");
		if(response.status==200) {

			if (response.data==1) {
				$('#projectDeleteModal').modal('hide');
				toastr.success('Delete Success');
				getProjectData();
	
			}else{
				$('#projectDeleteModal').modal('hide');
				toastr.error('OPPS! Delete Faild');
				getProjectData();
			}

		}else{
			$('#projectDeleteModal').modal('hide'); //delete jodi na hoy
			toastr.error('Something went Wrong');
		}

})

.catch(function(error) {
	$('#projectDeleteModal').modal('hide');
	toastr.error('Something went Wrong');

});


}



//================== Project each Details  ==============================

//each Update details
function projectUpdateDetails(detailsId){
	axios.post('/getProjectDetails',
        {id:detailsId
    })
		.then(function(response){
			if (response.status==200) {
				$('#projectEditForm').removeClass('d-none');
				$('#projectEditLoader').addClass('d-none');

				var jsonData =response.data;

				$('#projectNameId').val(jsonData[0].project_name); // ak joner details input show korar jonno
				$('#projectDesId').val(jsonData[0].project_des);
                $('#projectLinkId').val(jsonData[0].project_link);
				$('#projectImgId').val(jsonData[0].project_img);

			}else{
				$('#projectEditLoader').addClass('d-none');
				$('#projectEditWrong').removeClass('d-none');
				
			}

	})
	
	.catch(function(error) {
		$('#projectEditLoader').addClass('d-none');
		$('#projectEditWrong').removeClass('d-none');
	
	});
	
	
	}

	
    //================== Project UPDATE  ========================================= 

// Project Edit Modal Save Btn
$('#projectEditConfirmBtn').click(function(){
	var id = $(projectEditId).html(); //upore je responds ase sey value ta dhorse

	var name = $(projectNameId).val();
	var des = $(projectDesId).val();
	var link = $(projectLinkId).val();
    var img = $(projectImgId).val();
		projectUpdate(id,name,des,link,img);
})


//Service Update
function projectUpdate(projectEditId,projectName,projectDes,projectLink,projectImg){
	
	if(projectName.length==0){
		toastr.error('OPPS! Service Name empty !');
	}
	else if(projectDes.length==0){
		toastr.error('OPPS! Service description empty !');
	}
	else if(projectLink.length==0){
		toastr.error('OPPS! Service Image empty !');
	
    }else if(projectImg.length==0){
		toastr.error('OPPS! Service Image empty !');
	}
	else{

		$('#projectEditConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/projectUpdate',{
			id:projectEditId,
			name:projectName, //ai name gula uporer Algument
			des:projectDes,
			link:projectLink,
            img:projectImg
		})
			.then(function(response){
				$('#projectEditConfirmBtn').html("save"); //serviceEditConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //serviceDelete er motoy
						$('#projectEditModal').modal('hide');
						toastr.success('Update Success');
						getProjectData(); // table ta reload korar jonno getProjectData ke call kora hoyese
			
					}else{
						$('#projectEditModal').modal('hide');
						toastr.error('OPPS! Update Faild');
						getProjectData();// table ta reload korar jonno getProjectData ke call kora hoyese
					}
				}else{
					$('#projectEditModal').modal('hide');
					toastr.error('Something went Wrong');

				}

	
		})
		
		.catch(function(error) {
			$('#projectEditModal').modal('hide');
			toastr.error('Something went Wrong');
		
		});

	}

	}



	//================== Project ADD  ========================================= 

	
// Project add new btn Click
$('#projectAddBtn').click(function(){
	$('#projectAddModal').modal('show'); // Edit modal show korar jonno
})


// Project add Modal Save Btn
$('#projectAddConfirmBtn').click(function(){
	var name = $(projectAddNameId).val();
	var des = $(projectAddDesId).val();
    var link = $(projectAddLinkId).val();
	var img = $(projectAddImgId).val();
	projectAdd(name,des,link,img);
})


//service Add function

function projectAdd(projectAddName,projectAddDes,projectAddLink,projectAddImg){
	
	if(projectAddName.length==0){
		toastr.error('OPPS! Name empty !');
	}
	else if(projectAddDes.length==0){
		toastr.error('OPPS! description empty !');
	}
	else if(projectAddLink.length==0){
		toastr.error('OPPS! link empty !');
	}
    else if(projectAddImg.length==0){
		toastr.error('OPPS! Image empty !');
	}

	else{

		$('#projectAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/projectAdd',{
			name:projectAddName, //ai name gula uporer Algument
			des:projectAddDes,
            link:projectAddLink,
			img:projectAddImg
		})
			.then(function(response){
				$('#projectAddConfirmBtn').html("save"); //projectAddConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //serviceDelete er motoy
						$('#projectAddModal').modal('hide');
						toastr.success('Add Success');
						getProjectData(); // table ta reload korar jonno getProjectData ke call kora hoyese
						
			
					}else{
						$('#projectAddModal').modal('hide');
						toastr.error('OPPS! Add Faild');
						getProjectData();
					}
				}else{
					$('#projectAddModal').modal('hide');
					toastr.error('Something went Wrong');

				}

		})
		
		.catch(function(error) {
			$('#projectAddModal').modal('hide');
			toastr.error('Something went Wrong ok');
		
		});
	}

	}



    </script>

@endsection