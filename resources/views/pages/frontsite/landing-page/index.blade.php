@extends('layouts.default')
@section('title', 'Home')


@section('content')
<!-- content  -->

   <main class="min max-h-screen">



            <!-- Hero -->
        <section class="relative mt-12">
            <!-- Hero Image -->
            <div class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0"
            aria-hidden="true">
                <img src="{{ asset('/assets/frontsite/images/hero-image.png') }}" class="bg-cover bg-center object-cover object-center max-h-[580px]" alt="Hero Image"/>
                <div class="text-center absolute bottom-0 -left-20 -translate-y-14 bg-white px-7 py-5 rounded-xl shadow-2xl">
                    <h5 class="font-medium text-[#1E2B4F]">Dr. Kartika Me</h5>
                    <p class="text-xs text-[#AFAEC3] mt-1">Nutrionist</h1>
                    <span class="block text-xs text-[#1E2B4F] font-medium bg-[#F2F6FE] px-4 py-2 rounded-full text-center mt-7">Book Now</span>
                </div>
            </div>

            <!-- Hero Description -->
            <div class="relative mx-auto max-w-7xl px-4 lg:px-14 lg:py-16">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-6">

                        <!-- Label New -->
                        <h1>
                            <div class="flex items-center">
                                <span class="text-white text-xs sm:text-sm font-medium bg-[#2AB49B] rounded-full px-8 py-2">New</span>
                                <span class="text-[#1E2B4F] text-[11px] sm:text-sm bg-[#F2F6FE] rounded-r-full px-8 py-2 relative -z-10 -ml-4">Emergency call feature updated</span>
                            </div>

                            <span class="mt-6 block text-4xl font-semibold sm:text-5xl">
                                <span class="block text-[#1E2B4F] leading-normal">Meet Your Doctor. <br />Trusted & Professional.</span>
                            </span>
                        </h1>
                        <!-- End Label New -->

                        <!-- Text -->
                        <div class="flex flex-wrap gap-16 mt-8">
                            <div class="flex items-center gap-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon"/>
                                </div>
                                <div>
                                    <h5 class="text-[#1E2B4F] text-lg font-medium">Best Recipe</h5>
                                    <p class="text-[#AFAEC3]">for your medicine</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon"/>
                                </div>
                                <div>
                                    <h5 class="text-[#1E2B4F] text-lg font-medium">Free Consultation</h5>
                                    <p class="text-[#AFAEC3]">as we promised</p>
                                </div>
                            </div>
                        </div>
                        <!-- Text -->

                        <!-- CTA Button -->
                        <div class="grid lg:flex flex-wrap mt-20 gap-5">
                            <a href="{{ route('register') }}" class="text-white text-lg font-medium text-center bg-[#0D63F3] rounded-full px-12 py-3">Sign Up</a>
                            <a href="#" class="text-[#1E2B4F] text-lg font-medium text-center bg-[#F2F6FE] rounded-full px-16 py-3">Story</a>
                        </div>
                        <!-- CTA Button -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <!-- services -->
          <!-- Popular Categories -->
        <section class="mt-32 bg-[#F9FBFC]">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
                <h3 class="text-2xl font-semibold">Popular Categories</h3>
                <p class="text-[#A7B0B5] mt-2">Quick way to get your first experience</p>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">

                </div>

            </div>
        </section>
        <!-- End Popular Categories -->

              <!-- Best Doctors -->
        <section class="mt-4 lg:mt-16">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
                <h3 class="text-[#1E2B4F] text-2xl font-semibold">Best Doctors</h3>
                <p class="text-[#A7B0B5] mt-2">Help your life much better</p>

                <!-- Card -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">



                </div>
                <!-- End Card -->
            </div>
        </section>
        <!-- End Best Doctors -->


   </main>
@endsection
