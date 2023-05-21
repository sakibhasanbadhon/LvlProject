@extends('layout.app')

@section('title','contact')

@section('content')


<div class="container-fluid jumbotron mt-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
            <h1 class="page-top-title mt-3">- যোগাযোগ -</h1>
        </div>
    </div>
</div>


<div class="container-fluid bg-white jumbotron mt-5 ">
    <div class="row">

        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.1343766600485!2d89.34395191447962!3d24.96154234734729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcfee6067b1e7f%3A0x549459f98fc4c276!2sMohasthan%20Garh!5e0!3m2!1sen!2sbd!4v1665229086079!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>

        <div class="col-md-6"> 

            <h3 class="service-card-title">ঠিকানা এবং যোগাযোগ</h3>
            <hr>
            <p class="footer-text"><i class="fas fa-map-marker-alt"></i>  নুনগোলা, বগুড়া সদর <i class="ml-2 fas fa-phone"></i>   ০১৮৩২২২৪৫৭২ <i class="ml-2 fas fa-envelope"></i>   sakibhasan@gmail.com</p>
            <p class="footer-text"> </p>
            <p class="footer-text"></p>

            <div class="form-group ">
                <input id="contactNameId" type="text" class="form-control w-100" placeholder="আপনার নাম">
            </div>
            <div class="form-group">
                <input id="contactMobileId" type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
            </div>
            <div class="form-group">
                <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="ইমেইল ">
            </div>
            <div class="form-group">
                <input id="contactMsgId" type="text" class="form-control  w-100" placeholder="মেসেজ ">
            </div>
            <button id="contactSendBtnId" class="btn btn-block normal-btn w-100"> পাঠিয়ে দিন </button>

        </div>
      

    </div>
</div>


    

@endsection


