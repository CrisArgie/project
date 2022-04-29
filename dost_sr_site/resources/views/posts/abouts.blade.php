<x-main>
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <h1 class="h3 mb-0 text-dark font-weight-bolder text-uppercase">Information</h1>
    </div>
    <section class="d-flex flex-column align-items-center mb-3">
        <h5 class="mb-3">Process of Requesting Service</h5>
        <img src="../img/flowchart-request.svg" alt="" height="470">
    </section>

    <hr class="hr-linebreak my-5 w-100">

    <div class="d-flex justify-content-between mb-3">
        <h1 class="h3 mb-4 text-dark font-weight-bolder">FAQ (Frequent Asked Questions)</h1>

        @if (Auth::user()->user_type == 'admin')
            <div class="mx-2 mb-3">
                <button class="btn btn-primary font-weight-bold text-uppercase">Add FAQ</button>
                <button class="btn btn-danger font-weight-bold text-uppercase">Delete FAQ</button>
            </div>            
        @endif

    </div>
    <section style="height: 70vh">
        <div class="card rounded-0 shadow-none border-bottom-dark mb-4 animated--grow-in">
            <!-- Card Header - Accordion -->
            <a href="#collapseCard1" class="d-block card-header py-3 collapsed bg-gray-200" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCard1">
                <h6 class="m-0 font-weight-bold text-gray-600">Collapsable Card Example</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="collapseCard1" style="">
                <div class="card-body  animated--grow-in">
                    This is a collapsable card example using Bootstrap's built in collapse
                    functionality. <strong>Click on the card header</strong> to see the card body
                    collapse and expand!
                </div>
            </div>
        </div>
        <div class="card rounded-0 shadow-none border-bottom-dark mb-4 animated--grow-in">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3 collapsed bg-gray-200" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-gray-600">Collapsable Card Example</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="collapseCardExample" style="">
                <div class="card-body  animated--grow-in">
                    This is a collapsable card example using Bootstrap's built in collapse
                    functionality. <strong>Click on the card header</strong> to see the card body
                    collapse and expand!
                </div>
            </div>
        </div>
    </section>
</x-main>