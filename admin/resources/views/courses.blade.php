@extends('layout.app')
@section('title','Course')

@section('content')


<div id="mainDivCourse" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5">
        <button class="addNewCourseBntId my-3 btn btn-info btn-sm"> Add New</button>

        <table id="courseDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">name</th>
                    <th class="th-sm">Fee</th>
                    <th class="th-sm">Class</th>
                    <th class="th-sm">Enroll</th>
                    <th class="th-sm">Details</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                </tr>
            </thead>

      <tbody id="coursesTable">
            
        {{-- jquery diye Load hoye Akhane Astese --}}

      </tbody>

    </table>
    
    </div>
    </div>
</div>




 {{-- loading Animation imgae --}}
 <div id="loaderDivCourses" class="container">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			<img class="m-5" width="420" height="230" src="{{asset('images/Loading.svg')}}" alt="">

	  </div>
	</div>
</div>

{{-- something went Wrong --}}
<div id="wrongDivCourses" class="container d-none">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			
			<h3> Something went Wrong !</h3>

	  </div>
	</div>
</div>


{{-- Course Add Modal --}}

<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  text-center">
       <div class="container">
       	<div class="row">
       		<div class="col-md-6">
             	<input id="courseNameId" type="text" class="form-control mb-3" placeholder="Course Name">
          	 	<input id="courseDesId" type="text" class="form-control mb-3" placeholder="Course Description">
    		 	<input id="courseFeeId" type="text" class="form-control mb-3" placeholder="Course Fee">
     			<input id="courseEnrollId" type="text" class="form-control mb-3" placeholder="Total Enroll">
       		</div>
       		<div class="col-md-6">
     			<input id="courseClassId" type="text" class="form-control mb-3" placeholder="Total Class">      
     			<input id="courseLinkId" type="text" class="form-control mb-3" placeholder="Course Link">
     			<input id="courseImgId" type="text" class="form-control mb-3" placeholder="Course Image">
       		</div>
       	</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="CourseAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
      </div>
    </div>
  </div>
</div>




<!-- Course Delete Modals -->

<div class="modal fade" id="courseDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <div class="modal-body"> are you sure to delete this item</div>
  
        <h6 id="courseDeleteId" class="text-center"> </h6>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">NO</button>
          <button id="courseDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">YES</button>
        </div>
      </div>
    </div>
  </div>




<!-- Course Edit Modals -->

<div class="modal fade" id="courseEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Update New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>

      <h6 id="courseEditId" class="text-center"> </h6>

      <div class="modal-body  text-center ">

       <div id="courseEditForm" class="container d-none">
       	<div class="row">
       		<div class="col-md-6">
             	<input id="courseEditNameId" type="text" class="form-control mb-3" placeholder="Course Name">
          	 	<input id="courseEditDesId" type="text" class="form-control mb-3" placeholder="Course Description">
    		 	<input id="courseEditFeeId" type="text" class="form-control mb-3" placeholder="Course Fee">
     			<input id="courseEditEnrollId" type="text" class="form-control mb-3" placeholder="Total Enroll">
       		</div>
       		<div class="col-md-6">
     			<input id="courseEditClassId" type="text" class="form-control mb-3" placeholder="Total Class">      
     			<input id="courseEditLinkId" type="text" class="form-control mb-3" placeholder="Course Link">
     			<input id="courseEditImgId" type="text" class="form-control mb-3" placeholder="Course Image">
       		</div>
       	</div>
       </div>
      </div>

      <img id="courseEditLoader" class="m-4 m-auto" width="450" height="250" src="{{asset('images/Loading.svg')}}" alt="">
      <h5 id="courseEditWrong" class="d-none mb-5 text-center text-danger"> OPPS! Something went Wrong !</h5>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="CourseEditConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
      </div>
    </div>
  </div>
</div>





@endsection


@section('script')
    <script type="text/javascript">

getCoursesData();




// For course Table
function getCoursesData() {
	axios.get('/getCoursesData')

		.then(function(response) {
			if(response.status==200) {

				$('#mainDivCourse').removeClass('d-none');
				$('#loaderDivCourses').addClass('d-none');

				$('#courseDataTable').DataTable().destroy();// jquery DataTable empty korar jonno
				$('#coursesTable').empty(); //getCourseData fun ses a re-call korar somoy ai table first a empty hobe

				var jsonData =response.data;
				$.each(jsonData,function(i,item){
				  $('<tr>').html(
			  		"<td>"+ jsonData[i].course_name +"</td>"+
                    "<td>"+ jsonData[i].course_fee +"</td>"+
                    "<td>"+ jsonData[i].course_totalclass +"</td>"+
                    "<td>"  +jsonData[i].course_totalenroll + "</td>" +
                    
                    "<td> <a class='courseViewDetailsBtn' data-id="+jsonData[i].id+"   ><i class='fas fa-eye'></i></a>   </td>" +
			  		"<td> <a class='courseEditBtn' data-id="+jsonData[i].id+"   ><i class='fas fa-edit'></i></a>   </td>" +
			  		"<td> <a class='courseDeleteBtn' data-id="+jsonData[i].id+"  ><i class='fas fa-trash-alt'></i></a>  </td>"
					).appendTo('#coursesTable');
		});


//Course Table Delete Icon Click

$('.courseDeleteBtn').click(function(){
    var id = $(this).data('id');
        $('#courseDeleteId').html(id);
        $('#courseDeleteModal').modal('show'); //modal show korar jonno


})


	// Course table Edit icon Click

	$('.courseEditBtn').click(function(){
        var id = $(this).data('id');
        $('#courseEditId').html(id); //service page er serviceEditId Dhorse
        courseUpdateDetails(id);
        $('#courseEditModal').modal('show'); // Edit modal show korar jonno

	

	//======= jquery Data Table Part =========

	$('#courseDataTable').DataTable({"order":false});
	$('.dataTables_length').addClass('bs-select');





	}else{
		$('#loaderDivCourses').addClass('d-none');
		$('#wrongDivCourses').removeClass('d-none');
	}

	})

	.catch(function(error) {
		$('#loaderDivCourses').addClass('d-none');
		$('#wrongDivCourses').removeClass('d-none');
	});

}


$('.addNewCourseBntId').click(function(){
    $('#addCourseModal').modal('show');
});


// course add Modal Save Btn
$('#CourseAddConfirmBtn').click(function(){
	var courseName = $(courseNameId).val();
	var courseDes = $(courseDesId).val();
    var courseFee = $(courseFeeId).val();
	var totalEnroll = $(courseEnrollId).val();
    var totalClass = $(courseClassId).val();
    var courseLink = $(courseLinkId).val();
    var courseImg = $(courseImgId).val();

	courseAdd(courseName,courseDes,courseFee,totalEnroll,totalClass,courseLink,courseImg);
})


//course Add function

function courseAdd(courseName,courseDes,courseFee,totalEnroll,totalClass,courseLink,courseImg){
	
	if(courseName.length==0){
		toastr.error('OPPS! Course Name empty !');
	}
	else if(courseDes.length==0){
		toastr.error('OPPS! Course description empty !');
	}
	else if(courseFee.length==0){
		toastr.error('OPPS! Course fee empty !');
	}
    else if(totalEnroll.length==0){
		toastr.error('OPPS! Course enroll empty !');
	}
    else if(totalClass.length==0){
		toastr.error('OPPS! Course class empty !');
	}
    else if(courseLink.length==0){
		toastr.error('OPPS! Course link empty !');
	}
    else if(courseImg.length==0){
		toastr.error('OPPS! Course Image empty !');
	}


	else{

		$('#CourseAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/courseAdd',{
			course_name:courseName, //ai name gula uporer Algument
			course_des:courseDes,
			course_fee:courseFee,
            course_totalenroll:totalEnroll,
            course_totalclass:totalClass,
            course_link:courseLink,
            course_img:courseImg,

		})
			.then(function(response){
				$('#CourseAddConfirmBtn').html("save"); //CourseEditConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //courseDelete er motoy
						$('#addCourseModal').modal('hide');
						toastr.success('Add Success');
						getCoursesData(); // table ta reload korar jonno getCourseData ke call kora hoyese
						
					}else{
						$('#addCourseModal').modal('hide');
						toastr.error('OPPS! Add Faild');
						getCoursesData();
					}
				}else{
					$('#addCourseModal').modal('hide');
					toastr.error('Something went Wrong');

				}

		})
		
		.catch(function(error) {
			$('#addCourseModal').modal('hide');
			toastr.error('Something went Wrong ok');
		
		});
	}

}


// ============================= Course  DELETE =============================


//course Delete Yes Btn

$('#courseDeleteConfirmBtn').click(function(){
    var id = $(courseDeleteId).html();
    courseDelete(id);

})



//course delete
function courseDelete(deleteId){

	$('#courseDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation

axios.post('/courseDelete',{
		id:deleteId
})
	.then(function(response){
		$('#courseDeleteConfirmBtn').html("Yes");

		if(response.status==200) {
    
			if (response.data==1) {
				$('#courseDeleteModal').modal('hide');
				toastr.success('Delete Success');
				getCoursesData();
	
			}else{
				$('#courseDeleteModal').modal('hide');
				toastr.error('OPPS! Delete Faild');
				getCoursesData();
			}

		}else{
			$('#courseDeleteModal').modal('hide'); //delete jodi na hoy
			toastr.error('Something went Wrong');
		}

})

.catch(function(error) {
	$('#courseDeleteModal').modal('hide');
	toastr.error('Something went Wrong ok');
});



}


//================== Course each Details  ==============================

// each Update details

function courseUpdateDetails(detailsId){
	axios.post('/getCourseDetails',{
        id:detailsId
    })
		.then(function(response){
			if (response.status==200) {
				$('#courseEditForm').removeClass('d-none');
				$('#courseEditLoader').addClass('d-none');

				var jsonData =response.data;

				$('#courseEditNameId').val(jsonData[0].course_name); // ak joner details input show korar jonno
                $('#courseEditDesId').val(jsonData[0].course_des);
                $('#courseEditFeeId').val(jsonData[0].course_fee);
                $('#courseEditEnrollId').val(jsonData[0].course_totalenroll);
                $('#courseEditClassId').val(jsonData[0].course_totalclass);
                $('#courseEditLinkId').val(jsonData[0].course_link);
                $('#courseEditImgId').val(jsonData[0].course_img);


			}else{
				$('#courseEditLoader').addClass('d-none');
				$('#courseEditWrong').removeClass('d-none');
				
			}

	})
	
	.catch(function(error) {
		$('#courseEditLoader').addClass('d-none');
		$('#courseEditWrong').removeClass('d-none');
	
	});
	
	
	}



//================== Course UPDATE  ========================================= 

// course Edit Modal Save Btn
$('#CourseEditConfirmBtn').click(function(){

    var id = $(courseEditId).html();
	var courseName = $(courseEditNameId).val();
	var courseDes = $(courseEditDesId).val();
    var courseFee = $(courseEditFeeId).val();
	var totalEnroll = $(courseEditEnrollId).val();
    var totalClass = $(courseEditClassId).val();
    var courseLink = $(courseEditLinkId).val();
    var courseImg = $(courseEditImgId).val();

	courseUpdate(id,courseName,courseDes,courseFee,totalEnroll,totalClass,courseLink,courseImg);
})

//Course Update
function courseUpdate(courseId,courseEditName,courseEditDes,courseEditFee,courseEditEnroll,courseEditClass,courseEditLink,courseEditImg){
	
	if(courseEditName.length==0){
		toastr.error('OPPS! course name empty !');
	}
	else if(courseEditDes.length==0){
		toastr.error('OPPS! course description empty !');
	}
	else if(courseEditFee.length==0){
		toastr.error('OPPS! course fee empty !');
	}
    else if(courseEditEnroll.length==0){
		toastr.error('OPPS! course enroll empty !');
	}
    else if(courseEditClass.length==0){
		toastr.error('OPPS! course class empty !');
	}
    else if(courseEditLink.length==0){
		toastr.error('OPPS! course link empty !');
	}
    else if(courseEditImg.length==0){
		toastr.error('OPPS! course Image empty !');
	}
	else{

		$('#CourseEditConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/coursesUpdate',{
            id:courseId,
			course_name:courseEditName, //ai name gula uporer Algument
			course_des:courseEditDes,
			course_fee:courseEditFee,
            course_totalenroll:courseEditEnroll,
            course_totalclass:courseEditClass,
            course_link:courseEditLink,
            course_img:courseEditImg,

		})
			.then(function(response){
				$('#CourseEditConfirmBtn').html("save"); //CourseAddConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //serviceDelete er motoy
						$('#courseEditModal').modal('hide');
						toastr.success('Update Success');
						getCoursesData(); // table ta reload korar jonno getCoursesData ke call kora hoyese
			
					}else{
						$('#courseEditModal').modal('hide');
						toastr.error('OPPS! Update Faild');
						getCoursesData();// table ta reload korar jonno getCoursesData ke call kora hoyese
					}
				}else{
					$('#courseEditModal').modal('hide');
					toastr.error('Something went Wrong');

				}

	
		})
		
		.catch(function(error) {
			$('#courseEditModal').modal('hide');
			toastr.error('Something went Wrong');
		
		});

	}



}






    </script>
@endsection