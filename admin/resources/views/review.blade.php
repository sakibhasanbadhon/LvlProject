@extends('layout.app')
@section('title','Review')

@section('content')


<div id="reviewMainDiv" class="container">
    <div class="row">
        <div class="col-md-12 p-5">
          <button id="reviewAddBtn" class="btn btn-info btn-sm"> Add New </button>

            <table id="reviewTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th class="th-sm">Image</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Description</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                    </tr>
                </thead>

                <tbody id="review_Table">


                </tbody>

            </table>
        </div>
    </div>
</div>




 {{-- service loading Animation imgae --}}
 <div id="reviewLoaderDiv" class="container ">
	<div class="row">
		<div class="col-md-12 text-center">
			<img class="m-5" width="420" height="230" src="{{asset('images/Loading.svg')}}" alt="">
	  </div>
	</div>
</div>



{{-- something went Wrong --}}
<div id="reviewWrongDiv" class="container d-none">
	<div class="row">
		<div class="col-md-12 text-center p-5">
		    <h3> <i class='fas fa-not'></i> Something went Wrong !</h3>
	  </div>
	</div>
</div>



<!-- Service Delete Modals -->

<div class="modal fade" id="reviewDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <div class="modal-body"> are you sure to delete this item</div>
  
        <h6 id="reviewDeleteId" class="text-center d-none"> </h6>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">NO</button>
          <button id="reviewDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">YES</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Edit Modals -->

  <div class="modal fade" id="reviewEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content pb-5 p-5">
			<div class="modal-header border-bottom mb-3">
				<h5 class="modal-title">Update New Service</h5>
			</div>
		
		<h6 id="reviewEditId" class="text-center"> </h6> 
			      
		<div id="reviewEditForm" class="d-none w-100">
			<input type="text" id="reviewNameId" class="form-control mb-4" placeholder="review Name">
			<input type="text" id="reviewDesId" class="form-control mb-4" placeholder="review Description">
            <input type="text" id="reviewImgId" class="form-control mb-4" placeholder="review image">
		</div>
		
		<img id="reviewEditLoader" class="m-4" width="350" height="150" src="{{asset('images/Loading.svg')}}" alt="">
		<h5 id="reviewEditWrong" class="d-none"> Something went Wrong !</h5>
		 

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
				<button id="reviewEditConfirmBtn" type="button" class="btn btn-danger btn-sm">Save</button>
			</div>
    	</div>
  	</div>
</div>



<!-- Add Modals -->

<div class="modal fade" id="reviewAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content pb-5 p-5">
			      
		<div id="reviewAddForm" class="w-100">
			<h6 class="text-center font-weight-bold mb-4">Add New Services</h6>
			<span>নামঃ</span> <br>
			    <input type="text" id="reviewAddNameId" class="form-control mb-4" placeholder="সার্ভিস নাম ">
			
                <span>বর্ণনাঃ </span> <br>
			    <input type="text" id="reviewAddDesId" class="form-control mb-4" placeholder="সার্ভিস বর্ণনা">
			
                <span>ছবি লিংকঃ </span> <br>
			    <input type="text" id="reviewAddImgId" class="form-control mb-4" placeholder=" সার্ভিস ছবি লিংক ">	
		</div>
		

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
				<button id="reviewAddConfirmBtn" type="button" class="btn btn-danger btn-sm">Add New</button>
			</div>
    	</div>
  	</div>
</div>






@endsection







@section('script')

	<script type="text/javascript">
   
        getReviewData();




    </script>

@endsection