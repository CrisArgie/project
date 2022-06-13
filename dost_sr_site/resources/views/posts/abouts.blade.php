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

        @if (Auth::user()->user_type == 'admin' || Auth::user()->user_type == 'technician')
            <div class="mx-2 mb-3">
                <button type="button" class="btn btn-primary font-weight-bold text-uppercase"
                    data-modal-target="#faqModal">
                    Add FAQ
                </button>
                <button type="button" class="btn btn-danger font-weight-bold text-uppercase"
                    data-modal-target="#faqDltModal">
                    Delete FAQ
                </button>
            </div>
        @endif

    </div>
    <section class="h-auto">
        <div x-data="{ comments: JSON.parse(localStorage.getItem('faqsComments')) }">
            <template x-for="comment1 in comments">
                <div class="card rounded-0 shadow-none border-bottom-dark mb-2 animated--grow-in">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-gray-600" x-text="comment1.question"></h6>
                    </div>
                    <div class="card-body  animated--grow-in" x-text="comment1.answer"> </div>
                </div>
            </template>
        </div>
    </section>
</x-main>
