@extends('layout.app')
@section('title','Photo Gallery')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 p-3">
            <button id="addNewPhotoBtnId" class="btn btn-success btn-sm"> Add New </button>
        </div>
    </div>

</div>



<div class="container">
    <div class="row photoRow">

    </div>

    <button class="btn btn-primary btn-sm" id="loadMoreBtn"> LOAD MORE </button>





</div>


<!-- Add Modals -->

<div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        
    	<div class="modal-content pb-5 p-5">
            <h5 class="modal-title"> Add New Photo</h5>
			      
                <input id="imgInput" class="form-control" type="file" style="padding-top:3px;"> <br>
                <img id="imgPreview" src="{{ asset('images/dami-photo.jpg') }}" alt="">
		

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
				<button id="savePhoto" type="button" class="btn btn-danger btn-sm">save</button>
			</div>
    	</div>
  	</div>
</div>






@endsection




@section('script')
    <script type="text/javascript">

$('#addNewPhotoBtnId').click(function(){
    
        $('#photoModal').modal('show'); //modal show korar jonno
        
});

//image preview

$('#imgInput').change(function(){

    var reader= new FileReader();
    reader.readAsDataURL(this.files[0]);
    reader.onload=function(event){
        var imgSourch= event.target.result;

        $('#imgPreview').attr('src',imgSourch)

    }
})


//image upload

$('#savePhoto').on('click',function() {
    $('#savePhoto').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    var photoFile = $('#imgInput').prop('files')[0];
    var formData = new FormData();
    formData.append('photo',photoFile);

    axios.post("/photoUpload",formData)

    .then(function(response){

        if (response.status==200 && response.data==1) {
            $('#savePhoto').html('save');
            toastr.success('Photo Upload Success');
            $('#photoModal').modal('hide');
            photoLoad();
            $('.photoRow').empty();
    }
    else{
        toastr.error('OPPS! Upload Faild');
        $('#photoModal').modal('hide');
    }
 
    }).catch(function(error){
        $('#savePhoto').html('save');
        toastr.error('OPPS! Upload Faild');
        $('#photoModal').modal('hide');
    })



})

photoLoad();

    function photoLoad() {

        let URL ="/photoJson";

        axios.get(URL).then(function (response) {

            $.each(response.data, function(i,item){
				  $("<div class='col-md-4 p-1'>").html(
                    "<img data-id="+item['id']+" class='imgOnRow' src="+item['photo_name']+">"+

                    "<button data-id="+item['id']+" data-photo="+item['photo_name']+" class='deletePhoto btn btn-sm'> Delete </button>"

					).appendTo('.photoRow');
		});


        $('.deletePhoto').on('click',function (event) {

            let id = $(this).data('id');
            let photo = $(this).data('photo');

            photoDelete(photo,id);

            event.preventDefault(); 
        })




        }).catch (function (error) {
            
        })

    }



    let imgId=0;

    function loadById(firstImgId,loadmoreBtn) {

        imgId=imgId+3;
        let photoID=imgId+firstImgId;
        $('.imgOnRow').empty();
        let URL ="/photoJsonById/"+photoID;

        loadmoreBtn.html("<div class='spinner-border spinner-border-sm' role='status'></div>");

        axios.get(URL).then(function (response) {
            loadmoreBtn.html("LOAD MORE");

            $.each(response.data, function(i,item){
                $("<div class='col-md-4 p-1'>").html(
                    "<img data-id="+item['id']+" class='imgOnRow' src="+item['photo_name']+">"+
                    "<button data-id="+item['id']+" data-photo="+item['photo_name']+" class='btn btn-sm'> Delete </button>"
        ).appendTo('.photoRow');
});



}).catch (function (error) {

})



    }



    $('#loadMoreBtn').on('click',function () {

        let loadmoreBtn =$(this);
        let firstImgId = $(this).closest('div').find('img').data('id');

        loadById(firstImgId,loadmoreBtn); //uporer function ke call kora holo
    })


function photoDelete(oldPhotoURL,id) {
    let URL="/photoDelete";

    let myFormData = new FormData();

    myFormData.append('oldPhotoURL',oldPhotoURL);
    myFormData.append('id',id);

    axios.post(URL,myFormData).then(function (response) {
        if (response.status==200 && response.data==1) {
            toastr.success('photo Delete Success');
            $('.photoRow').empty();

            photoLoad();

        }else{
            toastr.error('OPPS! Delete Faild !');
        }


    }).catch(function (error) {
        toastr.error('OPPS! Delete Faild !');
    })

     


}







    </script>
@endsection