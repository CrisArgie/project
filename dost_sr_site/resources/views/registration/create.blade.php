<x-index-layout>
    <main class="min-vh-100" style="background-color: var(--color1);">
        <div class="min-vh-100 d-flex justify-content-center">
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="p-4 bg-gray-100 border-radius-1 my-shadow" style="width: 490px; height: auto;">
                    <div class="row g-2 mb-2">
                        <div class="col-xl-12">
                            <a href="/" class="d-flex justify-content-center">
                                <img src="img/DOST_log.png" alt="" style="height: 24px; width: 24px;">
                            </a>
                        </div>
                        <div class="col-xl-12">
                            <h3 class="text-hard-black mt-3 p-0"> Create your Account </h3>
                        </div>
                    </div>
                    <form class="row" 
                        method="POST" 
                        action="/register" 
                        >

                        @csrf

                        <ul class="row g-3 m-0 p-0">
                            <li class="list-unstyled col-xl-12">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex flex-column w-100">
                                        <label class="text-hard-black"> Name: </label>
                                        <div class="d-flex g-1">
                                            <label for="first_name" hidden></label>
                                            <input class="border-radius-1 w-100 p-2" 
                                                type="text" 
                                                name="first_name" 
                                                id="first_name"  
                                                placeholder="First Name"
                                                value="{{ old('first_name') }}"
                                                required>
                                            <label for="last_name" hidden></label>
                                            <input class="border-radius-1 w-100 p-2"
                                                type="text" 
                                                name="last_name" 
                                                id="last_name" 
                                                placeholder="Last Name" 
                                                value="{{ old('last_name') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                @error('first_name')
                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                @enderror
                                @error('last_name')
                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                @enderror
                            </li>
                            <li class="list-unstyled col-xl-12">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex flex-column w-100">
                                        <label class="text-hard-black" 
                                            for="email"> Email: </label>
                                        <input class="border-radius-1 w-100 p-2"
                                            type="email" 
                                            name="email" 
                                            id="email"
                                            placeholder="Email"
                                            value="{{ old('email') }}"
                                            required>
                                    </div>
                                </div>
                                @error('email')
                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                @enderror
                            </li>
                            <li class="list-unstyled col-xl-12">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex flex-column g-1 w-100">
                                        <label class="text-hard-black" 
                                            for="password"> Password: </label>
                                        {{-- <div class="d-flex align-items-center g-2">
                                            <input class="border-radius-1 w-100 p-2"
                                                type="password" 
                                                id="password"
                                                required>
                                            <input 
                                                type="checkbox" 
                                                id="chkBoxp1">
                                        </div>
                                        <label class="text-hard-black" 
                                            for="password"> Re-enter Password: </label> --}}
                                        <div class="d-flex align-items-center g-2">
                                            <input  class="border-radius-1 w-100 p-2"
                                                    type="password" 
                                                    name="password" 
                                                    id="password" 
                                                    placeholder="Password"
                                                    required
                                            >
                                            <input  id="chkpassword"
                                                    type="checkbox" 
                                            >
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                @enderror
                            </li>
                            <li class="list-unstyled col-xl-12">
                                <div class="d-flex justify-content-center mt-2 mb-2">
                                    <span style="font-size: 10px;">By clicking Sign up. You agree to our <a href=""> Terms and Conditions </a> that you have read our policy. </span>
                                </div>
                            </li>
                            <li class="list-unstyled col-xl-12">
                                <div class="d-flex justify-content-center mt-2 mb-2">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button class="button-style-1 p-2"
                                                type="submit">
                                                <div class="text-1"> Sign up </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="list-unstyled col-xl-12">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger text-xs">{{ $error }}</li>        
                                    @endforeach
                                </ul>
                            </li> --}}
                        </ul>

                    </form>
                </div>
            </div>    
        </div>
    </main>

<script>
    chkboxPasswordElement = document.getElementById('chkpassword');
    textPasswordElement = document.getElementById('password');

    chkboxPasswordElement.onclick = function() {
        if(chkboxPasswordElement.checked){
            textPasswordElement.setAttribute('type', 'text')
        } else {
            textPasswordElement.setAttribute('type', 'password')
        }
    }
</script>

</x-index-layout>