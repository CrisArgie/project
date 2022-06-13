<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                @include('posts.left-sidebar') {{-- Admin LEFT SIDEBAR --}}
            @else
                @include('customer.page-style.left-sidebar') {{-- Customer LEFT SIDEBAR --}}
            @endif


            @include('posts.abouts') {{-- RIGHT CONTENT WRAPPER --}}
        </section>

        <div class="modal" id="faqModal">
            <div class="modal-header">
                <div class="title">Frequent Asked Question Information Setting</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <ul class="row mb-0 ml-5 mr-5 pt-4 pb-4 pl-0 pr-0">
                    <li class="col-xl-12 p-2 g-1 d-flex flex-column">
                        <label for="question">Question: </label>
                        <input type="text" class="input-design-1" id="question" name="question">
                    </li>
                    <li class="col-xl-12 p-2 g-1 d-flex flex-column mb-3">
                        <label for="answer" class="w-100">Answer: </label>
                        <textarea id="answer" class="input-design-1" name="answer" style="width:358px; height:235px; resize:none;"></textarea>
                    </li>
                    <li class="col-xl-12 p-2 g-2 d-flex justify-content-end">
                        <button type="button" id="faqCreateBtn" class="btn btn-success p-2">
                            <div class="text-1"> Submit </div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="modal" id="faqDltModal">
            <div class="modal-header bg-danger">
                <div class="title">Frequent Asked Question Delete Setting</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" enctype="multipart/form-data">
                    <ul class="row mb-0 ml-5 mr-5 pt-4 pb-4 pl-0 pr-0">
                        <li class="col-xl-12 p-2 g-2 d-flex flex-column">
                            <label for="faqData">Select what to remove:</label>
                            <select name="faqData" id="faqData" class="input-design-1"></select>
                        </li>
                        <li class="col-xl-12 p-2 g-2 d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary p-2">
                                <div class="text-1"> Reset </div>
                            </button>
                            <button type="button" id="faqDeleteBtn" class="btn btn-danger p-2">
                                <div class="text-1"> Delete </div>
                            </button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div id="overlay"></div>

    </main>

    <x-flash />

    {{-- FAQS --}}
    <script type="text/javascript" src="/script.js" defer onload="modalFunc()"></script>
    <script type="text/javascript" src="/script.js" defer onload="accordionFunc(1, 1)"></script>

</x-right-content-layout>
