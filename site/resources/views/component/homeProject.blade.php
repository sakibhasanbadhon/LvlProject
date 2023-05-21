<div class="container section-marginTop text-center">
    <h1 class="section-title">প্রজেক্ট</h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">

        <div id="one"  class="owl-carousel mb-4 owl-theme">
 

            @foreach ($projectData as $projectData)    
                <div class="item m-1 card">
                    <div class="text-center">
                        <img class="" src="{{ $projectData->project_img }}" alt="Card image cap">
                        <h5 class="service-card-title mt-4"> {{ $projectData->project_name }} </h5>
                        <h6 class="service-card-subTitle p-0 m-0">  {{ $projectData->project_des }}  </h6>
                        <a target="_blank" href="{{ $projectData->project_link }}" class="normal-btn-outline mt-2 mb-4 btn"> বিস্তারিত </a>

                    </div>
                </div>
            @endforeach




        </div>

    </div>
    <div class="d-inline ml-2">
        <i id="customPrevBtn" class="btn normal-btn"><</i>
        <i id="customNextBtn" class="btn normal-btn">></i>
        <button class="normal-btn  btn">সব গুলো </button>
    </div>
</div>
