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
                <form   method="POST" 
                        action="/logout"
                        class="m-auto d-flex"
                >
                    @csrf

                    <span href="/register" class="d-flex align-items-center mx-2">
                        <h6>  Welcome, {{ auth()->user()->first_name }} </h6>
                    </span>

                    <button type="submit" 
                            class="btn-link-1 border-radius-1"
                    >
                        Log out
                    </button>
                </form>
            @else
                <a href="/register" class="text-none text-gray-100 p-2 attr-link border-radius-1">
                    <h6>  REGISTER </h6>
                </a>

                <a href="/login" class="text-none text-gray-100 p-2 attr-link border-radius-1">
                    <h6>  LOG IN </h6>
                </a>    
            @endauth
        </div>

    </nav>
    
    <main class="home-container">
        <div id="home" class="main-container p-4">
            <div class="d-flex justify-content-center">
                <div class="row g-3 p-4 bg-white border-radius-1 border-shadow-1">
                    <div class="w-100 d-flex justify-content-center">
                        <img src="img/undraw_posting_photo.svg" style="width: 35rem" alt="news-img.svg">
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h2 class="text-hard-black">Latest <b class="text-light-blue"> DOST Caraga </b> News (title) </h2>
                        <h4 class="text-hard-black">By John Doe</h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="main-container p-4">
            <div class="row justify-content-center g-2">
                <div class="d-flex align-items-center flex-column bg-white border-radius-1 border-shadow-1 p-4">
                    <h4 class="text-light-blue mb-3"> <b> About </b> </h4>
                    <img src="img/flowchart-request.svg" style="width: 60rem" alt="request-flowchart.svg">
                </div>
            </div>
        </div>
        <div id="contact" class="main-container p-4">
            <div class="row justify-content-center g-2">
                <div class="d-flex align-items-center flex-column bg-white border-radius-1 border-shadow-1 p-4" style="width: 63rem;">
                    <h4 class="text-light-blue mb-3"> <b> Contact </b> </h4>
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

    <x-flash/>

<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
</x-index-layout>