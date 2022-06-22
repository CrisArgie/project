<x-index-layout>

    <nav class="index-header-menu px-4">
        <div class="d-flex" style="left: 0;">
            <a href="#home" class="text-none text-gray-100 p-2 attr-link border-radius-1">
                <h6> HOME </h6>
            </a>
            <a href="#about" class="text-none text-gray-100 p-2 attr-link border-radius-1">
                <h6> ABOUT </h6>
            </a>
            <a href="#contact" class="text-none text-gray-100 p-2 attr-link border-radius-1">
                <h6> CONTACT </h6>
            </a>
        </div>
        <div class="d-flex align-items-center" style="right: 0;">
            @auth
                <form method="POST" action="/logout" class="m-auto d-flex">
                    @csrf

                    @if (auth()->user()->user_type == 'customer')
                        <a href="/home" class="d-flex align-items-center mx-2 text-white">
                            <h6> Welcome, {{ auth()->user()->first_name }} </h6>
                        </a>
                    @else
                        <a href="/dashboard" class="d-flex align-items-center mx-2 text-white">
                            <h6> Welcome, {{ auth()->user()->first_name }} </h6>
                        </a>
                    @endif

                    <button type="submit" class="btn-link-1 border-radius-1">
                        Log out
                    </button>
                </form>
            @else
                <a href="/register" class="text-none text-gray-100 p-2 attr-link border-radius-1">
                    <h6> REGISTER </h6>
                </a>

                <a href="/login" class="text-none text-gray-100 p-2 attr-link border-radius-1">
                    <h6> LOG IN </h6>
                </a>
            @endauth
        </div>

    </nav>

    <main class="home-container">
        <div id="home" class="main-container p-4">
            <div class="d-flex justify-content-center">
                <div class="row g-3 p-4 bg-white border-radius-1 border-shadow-1" style="width: 1100px;">
                    <div class="w-100 d-flex justify-content-center">
                        <img src="img/undraw_posting_photo.svg" style="width: 35rem" alt="news-img.svg">
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h2 class="text-hard-black">Latest <b class="text-light-blue"> DOST Caraga </b> News (title)
                        </h2>
                        <h4 class="text-hard-black">By John Doe</h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="main-container p-4">
            <div class="row justify-content-center g-2">
                <div class="d-flex align-items-center flex-column bg-white border-radius-1 border-shadow-1 p-4"
                    style="width: 1100px;">
                    <h4 class="text-light-blue mb-3"> <b> About </b> </h4>
                    <img src="img/flowchart-request.svg" style="width: 60rem" alt="request-flowchart.svg">

                    <p class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptates accusantium at
                        tenetur nam omnis nesciunt quae quia neque, natus rerum cum accusamus? Veritatis ipsum voluptate
                        excepturi porro amet aliquam fuga facilis itaque ipsam omnis natus inventore fugiat voluptatum
                        doloremque cumque, harum eum quasi eius ducimus dolorum, sit minus? Recusandae magnam magni
                        inventore, accusantium impedit exercitationem aperiam, accusamus tempore beatae amet pariatur
                        quam a! Accusantium maiores debitis omnis quos iure mollitia esse impedit maxime quo ea, eos
                        blanditiis iusto repudiandae numquam iste corrupti aliquid vel illo voluptatem porro,
                        dignissimos cupiditate soluta modi corporis! Obcaecati aut deserunt rerum perferendis, molestiae
                        at.
                    </p>
                </div>

            </div>
        </div>
        <div id="contact" class="main-container p-4">
            <div class="row justify-content-center g-2">
                <div class="d-flex align-items-center flex-column bg-white border-radius-1 border-shadow-1 p-4"
                    style="width: 1100px;">
                    <h4 class="text-light-blue mb-3"> <b> Contact </b> </h4>

                    <div class="">
                        <div class="h5 text-gray-800">
                            DOST CARAGA REGION
                        </div>
                        <div class="h6 text-gray-600">
                            Address: CSU Campus Ampayon, 8600 Butuan City
                        </div>

                        <div class="">
                            <div class="d-flex flex-column">
                                <div class="">
                                    Tel. No. : (+63) (85) 342-9053
                                </div>

                                <div class="">
                                    Fax No. : (+63) (85) 342-5684
                                </div>

                                <div class="">
                                    Website: caraga.dost.gov.ph
                                </div>
                                <div class="row mx-0 my-2">
                                    <div class="p-0 col-xl-2">
                                        Email:
                                    </div>

                                    <div class="col-xl-10">
                                        <div class="d-flex flex-column">
                                            <div class="">
                                                dostcaraga@yahoo.com
                                            </div>
                                            <div class="">
                                                dost13@caraga.dost.gov.ph
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    facebook.com/DOST.Caraga
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-3 p-5 bg-gray-500">
        <div class="row m-0 g-2">
            <div class="col-xl-12 mb-4">
                <div class="d-flex justify-content-center mb-2">
                    <img src="img/DOST_log.png" style="width: 10rem;" alt="DOST-XIII.svg">
                </div>
                <div class="d-flex justify-content-center mb-3">

                    <h3 class="text-hard-black"> Stay in touch with the service that you requested! </h4>
                </div>
                <div class="d-flex justify-content-center">
                    <h6 class="text-dark"> Looking at your request that never been easy </h6>
                </div>
            </div>
            {{-- <div class="col-xl-12 p-0">
                <div class="d-flex justify-content-center">
                    <input placeholder="Email">
                    <button> SUBSCRIBE </button>
                </div> --}}
        </div>
        </div>
    </footer>

    <x-flash />

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</x-index-layout>
