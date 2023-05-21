
// For review Table
function getReviewData() {
    axios.get('/getReviewData')

        .then(function(response) {
            if(response.status==200) {

                $('#reviewMainDiv').removeClass('d-none');
                $('#reviewLoaderDiv').addClass('d-none');

                $('#reviewTable').DataTable().destroy(); // jquery DataTable empty korar jonno
                $('#review_Table').empty(); //getServiceData fun ses a re-call korar somoy ai table first a empty hobe

                var jsonData =response.data;
                $.each(jsonData,function(i,item){
                    $('<tr>').html(
                        "<td> <img class='table-img' src="+jsonData[i].img +"></td>"+
                        "<td>"  +jsonData[i].name + "</td>" +
                        "<td> "  +jsonData[i].des + "  </td>" +

                        "<td> <a class='reviewEditBtn' data-id="+jsonData[i].id+"   ><i class='fas fa-edit'></i></a>   </td>" +
                        "<td> <a class='reviewDeleteBtn' data-id="+jsonData[i].id+"  ><i class='fas fa-trash-alt'></i></a>  </td>"
                    ).appendTo('#review_Table');
        });



// project table Delete Icon Click

$('.reviewDeleteBtn').click(function(){
    var id = $(this).data('id');
        $('#reviewDeleteModal').modal('show'); //modal show korar jonno
        $('#reviewDeleteId').html(id);
})




    // Service table Edit Icon Click

    $('.reviewEditBtn').click(function(){
            var id = $(this).data('id');
            $('#reviewEditId').html(id); //review page er reviewEditId Dhorse
            reviewUpdateDetails(id);
            $('#reviewEditModal').modal('show'); // Edit modal show korar jonno

    })


    
    //======= jquery Data Table Part =========

        $('#reviewTable').DataTable({"order":false});
        $('.dataTables_length').addClass('bs-select');

    



    }else{
        $('#reviewLoaderDiv').addClass('d-none');
        $('#reviewWrongDiv').removeClass('d-none');
    }

    })

    .catch(function(error) {
        $('#reviewLoaderDiv').addClass('d-none');
        $('#reviewWrongDiv').removeClass('d-none');
    });

}




//=======================   DELETE ===============================



// review Delete Modal Yes/delete Btn

$('#reviewDeleteConfirmBtn').click(function(){
	var id = $(reviewDeleteId).html();
	reviewDelete(id); //reviewDelete function Er Id Ata
})

//review delete
function reviewDelete(deleteId){

	$('#reviewDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation

axios.post('/reviewDelete',{
		id:deleteId
})
	.then(function(response){
		$('#reviewDeleteConfirmBtn').html("Yes");
		if(response.status==200) {

			if (response.data==1) {
				$('#reviewDeleteModal').modal('hide');
				toastr.success('Delete Success');
				getReviewData();
	
			}else{
				$('#reviewDeleteModal').modal('hide');
				toastr.error('OPPS! Delete Faild');
				getReviewData();
			}

		}else{
			$('#reviewDeleteModal').modal('hide'); //delete jodi na hoy
			toastr.error('Something went Wrong');
		}

})

.catch(function(error) {
	$('#reviewDeleteModal').modal('hide');
	toastr.error('Something went Wrong');

});


}



//================== Project each Details  ==============================

//each Update details
function reviewUpdateDetails(detailsId){
	axios.post('/getReviewDetails',
        {id:detailsId
    })
		.then(function(response){
			if (response.status==200) {
				$('#reviewEditForm').removeClass('d-none');
				$('#reviewEditLoader').addClass('d-none');

				var jsonData =response.data;

				$('#reviewNameId').val(jsonData[0].name); // ak joner details input show korar jonno
				$('#reviewDesId').val(jsonData[0].des);
                $('#reviewImgId').val(jsonData[0].img);


			}else{
				$('#reviewEditLoader').addClass('d-none');
				$('#reviewEditWrong').removeClass('d-none');
				
			}

	})
	
	.catch(function(error) {
		$('#reviewEditLoader').addClass('d-none');
		$('#reviewEditWrong').removeClass('d-none');
	
	});
	
	
	}


   //================== review UPDATE  ========================================= 

// Project Edit Modal Save Btn
$('#reviewEditConfirmBtn').click(function(){
	var id = $(reviewEditId).html(); //upore je responds ase sey value ta dhorse

	var name = $(reviewNameId).val();
	var des = $(reviewDesId).val();
	var img = $(reviewImgId).val();

		reviewUpdate(id,name,des,img);
})


//Service Update
function reviewUpdate(reviewEditId,reviewName,reviewDes,reviewImg){
	
	if(reviewName.length==0){
		toastr.error('OPPS! Name empty !');
	}
	else if(reviewDes.length==0){
		toastr.error('OPPS! description empty !');
	}
	else if(reviewImg.length==0){
		toastr.error('OPPS! Image empty !');
	}
	else{

		$('#reviewEditConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/reviewUpdate',{
			id:reviewEditId,
			name:reviewName, //ai name gula uporer Algument
			des:reviewDes,
            img:reviewImg
		})
			.then(function(response){
				$('#reviewEditConfirmBtn').html("save"); //serviceEditConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //serviceDelete er motoy
						$('#reviewEditModal').modal('hide');
						toastr.success('Update Success');
						getReviewData(); // table ta reload korar jonno getReviewData ke call kora hoyese
			
					}else{
						$('#reviewEditModal').modal('hide');
						toastr.error('OPPS! Update Faild');
						getReviewData();// table ta reload korar jonno getReviewData ke call kora hoyese
					}
				}else{
					$('#reviewEditModal').modal('hide');
					toastr.error('Something went Wrong');

				}

	
		})
		
		.catch(function(error) {
			$('#reviewEditModal').modal('hide');
			toastr.error('Something went Wrong');
		
		});

	}

	}



    

	//================== Review ADD  ========================================= 

	
// review add new btn Click
$('#reviewAddBtn').click(function(){
	$('#reviewAddModal').modal('show'); // Edit modal show korar jonno
})


// review add Modal Save Btn
$('#reviewAddConfirmBtn').click(function(){
	var name = $(reviewAddNameId).val();
	var des = $(reviewAddDesId).val();
	var img = $(reviewAddImgId).val();
	reviewAdd(name,des,img);
})


//review Add function

function reviewAdd(reviewAddName,reviewAddDes,reviewAddImg){
	
	if(reviewAddName.length==0){
		toastr.error('OPPS! Name empty !');
	}
	else if(reviewAddDes.length==0){
		toastr.error('OPPS! description empty !');
	}
    else if(reviewAddImg.length==0){
		toastr.error('OPPS! Image empty !');
	}

	else{

		$('#reviewAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //spiner animation
		axios.post('/reviewAdd',{
			name:reviewAddName, //ai name gula uporer Algument
			des:reviewAddDes,
			img:reviewAddImg
		})
			.then(function(response){
				$('#reviewAddConfirmBtn').html("save"); //reviewAddConfirmBtn a abaro save value show korar jonno 

				if (response.status==200) {
					
					if (response.data==1) {  //serviceDelete er motoy
						$('#reviewAddModal').modal('hide');
						toastr.success('Add Success');
						getReviewData(); // table ta reload korar jonno getreviewData ke call kora hoyese
						
			
					}else{
						$('#reviewAddModal').modal('hide');
						toastr.error('OPPS! Add Faild');
						getReviewData();
					}
				}else{
					$('#reviewAddModal').modal('hide');
					toastr.error('Something went Wrong');

				}

		})
		
		.catch(function(error) {
			$('#reviewAddModal').modal('hide');
			toastr.error('Something went Wrong ok');
		
		});
	}

	}