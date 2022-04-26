<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}
    
            @include('posts.right-content-body') {{-- RIGHT CONTENT WRAPPER --}}
        </section>
    </main>

    <x-flash/>

</x-right-content-layout>