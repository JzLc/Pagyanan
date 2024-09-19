<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/animate-y-scroll.css') }}">

</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-900">My Portfolio</a>
            <div class="space-x-6">
                <a href="#hero" class="text-gray-700 hover:text-indigo-600">Home</a>
                <a href="#tech" class="text-gray-700 hover:text-indigo-600">Tech Stack</a>
                <a href="#contact" class="text-gray-700 hover:text-indigo-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="bg-indigo-600 text-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to My Portfolio</h1>
            <p class="text-lg mb-8">I'm a Web Developer passionate about building beautiful websites and web
                applications.</p>
            <a href="#contact"
                class="bg-white text-indigo-600 px-6 py-2 rounded-md font-semibold hover:bg-gray-100">Contact Me</a>
        </div>
    </section>

    <!-- Main Section -->
    <main class="container mx-auto px-6 py-12">

        <!-- Showcase of Tech Stack and Skills -->
        <section id="tech" class="py-12">
            <h2 class="text-3xl font-bold text-center mb-8">Tech Stack & Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="bg-white p-6 shadow-md rounded-md">
                    <h3 class="text-xl font-semibold mb-2">HTML & CSS</h3>
                    <p>Building responsive and accessible web layouts.</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-md">
                    <h3 class="text-xl font-semibold mb-2">JavaScript</h3>
                    <p>Creating dynamic and interactive user interfaces.</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-md">
                    <h3 class="text-xl font-semibold mb-2">React</h3>
                    <p>Developing single-page applications with modern frameworks.</p>
                </div>
            </div>
        </section>

        <div class="relative mt-0 flex size-full flex-col items-center justify-center overflow-hidden rounded-lg pb-5">
            <div class="mx-auto flex max-w-full flex-col items-center space-y-4 pt-0 text-center">
                <h2
                    class="font-heading text-3xl leading-[1.1] sm:text-3xl md:text-3xl font-bold sm:max-w-[85%] max-w-[85%] lg:max-w-[100%] md:max-w-[100%]">
                    Don't take our word for it
                </h2>
                <p
                    class="text-muted-foreground sm:max-w-[85%] max-w-[85%] lg:max-w-[100%] md:max-w-[100%] pb-10 leading-normal sm:text-lg sm:leading-7">
                    Hear what <span class="font-bold">real people</span> have to say about us.
                </p>
            </div>

            <div id="animated-container" class="relative mt-0 flex size-full flex-col items-center justify-center overflow-hidden rounded-lg pb-5">
                <div class="group flex overflow-hidden p-2 gap-4 flex-row">
                    <div class="y-scroll-wrapper flex shrink-0 justify-around gap-4">
                        <div class="y-scroll-content flex">
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:ugcPost:7211502593452216320?commentUrn=urn%3Ali%3Acomment%3A%28ugcPost%3A7211502593452216320%2C7211504229494984705%29&amp;dashCommentUrn=urn%3Ali%3Afsd_comment%3A%287211504229494984705%2Curn%3Ali%3AugcPost%3A7211502593452216320%29"
                        target="_blank" rel="noopener noreferrer">
                        <figure
                            class="relative w-64 cursor-pointer overflow-hidden rounded-xl border p-4 border-gray-950/[.1] bg-gray-950/[.01] hover:bg-gray-950/[.05] dark:border-gray-50/[.1] dark:bg-gray-50/[.10] dark:hover:bg-gray-50/[.15]">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
        </div>


    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 My Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll('#animated-container img');
            const totalImages = images.length;
            let loadedImages = 0;

            if (totalImages === 0) {
                // No images to load, start the animation immediately
                startAnimation();
                return;
            }

            images.forEach((img) => {
                img.addEventListener('load', () => {
                    loadedImages++;
                    if (loadedImages === totalImages) {
                        startAnimation();
                    }
                });

                // Handle image loading error if necessary
                img.addEventListener('error', () => {
                    loadedImages++;
                    if (loadedImages === totalImages) {
                        startAnimation();
                    }
                });

                // Preload images
                if (img.complete) {
                    img.dispatchEvent(new Event('load'));
                }
            });

            function startAnimation() {
                const yScrollContent = document.querySelector('.y-scoll-content');
                yScrollContent.style.animationPlayState = 'running'; // Start animation
            }
        });
    </script>
</body>

</html>
