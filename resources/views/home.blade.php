@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="relative h-screen">
        <img src="https://www.akc.org/wp-content/uploads/2009/01/Cavalier-King-Charles-Spaniel-head-portrait-outdoors.jpg" alt="Vítejte" class="object-cover w-full h-3/4 z-10">
        <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-50"></div>
        <div class="flex items-start justify-center h-3/4 relative pt-14"> 
            <h1 class="text-white text-5xl font-Array text-center z-10">Vítejte na naší stránce!</h1>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="py-10 text-center bg-gray-100">
        <h2 class="text-3xl font-gambetta">Proč nakupovat u nás?</h2>
        <p class="mt-4 text-lg text-gray-700">Nabízíme nejlepší produkty za nejlepší ceny!</p>
        <div class="mt-6 flex flex-wrap justify-center gap-6">
            <div class="bg-white shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-heroicon-o-truck class="h-16 w-16" ></x-heroicon-o-truck>
                </div>
                <h3 class="text-lg font-bold">Rychlá Doprava</h3>
                <p class="mt-2">Zaručujeme rychlé dodání vašich objednávek.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-iconsax-bro-sidebar-right class="h-16 w-16" ></x-iconsax-bro-sidebar-right>
                </div>
                <h3 class="text-lg font-bold">Kvalitní Produkty</h3>
                <p class="mt-2">Naše produkty procházejí důkladným výběrem kvality.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-gmdi-support-agent-o class="h-16 w-16" ></x-gmdi-support-agent-o>
                </div>
                <h3 class="text-lg font-bold">Zákaznická Podpora</h3>
                <p class="mt-2">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
            </div>
        </div>
    </div>

    <!-- Products Horizontal Scroll Section -->
    @include('components.product-slider')

<!-- Reviews Section (Now under the slider) -->
@include('components.review-section')
 
<!-- Contact Form Section -->
   @include('components.contact-form')
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            loop: true,
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('.star-icon');
            
            stars.forEach(star => {
                star.addEventListener('mouseover', function () {
                    const reviewId = star.getAttribute('data-review');
                    const reviewContent = document.querySelector(`.review-content[data-review="${reviewId}"]`);
                    reviewContent.style.opacity = 1;
                    reviewContent.style.transform = 'translateX(0)';
                });

                star.addEventListener('mouseout', function () {
                    const reviewId = star.getAttribute('data-review');
                    const reviewContent = document.querySelector(`.review-content[data-review="${reviewId}"]`);
                    reviewContent.style.opacity = 0;
                    reviewContent.style.transform = 'translateX(100%)';
                });

                // Kliknutí pro zobrazení recenze
                star.addEventListener('click', function () {
                    const reviewId = star.getAttribute('data-review');
                    const reviewContent = document.querySelector(`.review-content[data-review="${reviewId}"]`);
                    reviewContent.style.opacity = 1;
                    reviewContent.style.transform = 'translateX(0)';
                });
            });
        });
    </script>
@endpush

<style>
    .star-icon {
        transition: transform 0.3s ease;
    }

    .star-icon:hover {
        transform: scale(1.3);
    }

    .review-content {
        opacity: 0;
        transform: translateX(100%);
    }

    .review-container:hover .review-content {
        opacity: 1;
        transform: translateX(0);
    }

    .hover\:scale-105:hover {
        transform: scale(1.05);
    }
</style>
