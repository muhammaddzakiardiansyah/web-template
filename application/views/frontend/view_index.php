<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= base_url("src/output.css") ?>" rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url("assets_backend/img/cropped-sa.png") ?>" type="image/x-icon">
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
	<section class="w-full px-6 pb-12 antialiased bg-white" id="header">
		<div class="mx-auto max-w-7xl">

			<nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
				<div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
					<div class="flex items-center justify-start w-1/4 h-full pr-4">
						<a href="#_" class="flex items-center py-4 space-x-2 font-extrabold text-gray-900 md:py-0">
							<img src="<?= base_url("assets_backend/img/logo-sa.svg") ?>" alt="logo smk syafii akrom" width="40" height="40" class="mb-2">
							<span>SMKSA</span>
						</a>
					</div>
					<div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
						<div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
							<div class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center mt-10">
								<a href="#_" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-green-300 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
								<a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-300 lg:mx-3 md:text-center">About</a>
								<a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-300 lg:mx-3 md:text-center">Blog</a>
								<a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-300 lg:mx-3 md:text-center">Contact</a>
							</div>
							<div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
								<a href="#" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-3 md:mr-2 lg:mr-3 md:w-auto">Sign In</a>
								<a href="#_" class="inline-flex items-center w-full px-5 px-6 py-3 text-sm font-medium leading-4 text-white bg-green-500 md:w-auto md:rounded-full hover:bg-green-300 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-800">Sign Up</a>
							</div>
						</div>
					</div>
					<div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
						<svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
						<svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
						</svg>
					</div>
				</div>
			</nav>

			<!-- Main Hero Content -->
			<div class="container max-w-sm py-32 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
				<h1 class="text-3xl font-bold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:text-4xl md:text-7xl lg:text-8xl">Start your creativity <br class="hidden sm:block"> with <span class="text-green-500">SMK Syafii Akrom</span></h1>
				<div class="mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl">Start studying at a center of excellence and child-friendly school!</div>
				<div class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
					<span class="relative inline-flex w-full md:w-auto">
						<a href="#_" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-green-500 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
							Get Started
						</a>
					</span>
					<span class="relative inline-flex w-full md:w-auto">
						<a href="#_" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-gray-900 bg-gray-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">Learn More</a>
					</span>
				</div>
			</div>
			<!-- End Main Hero Content -->

		</div>
	</section>
	<section class="px-2 py-32 bg-white md:px-0" id="about">
		<div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
			<div class="flex flex-wrap items-center sm:-mx-3">
				<div class="w-full md:w-1/2 md:px-3">
					<div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
						<h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
							<span class="block xl:inline">SMKSA School of</span>
							<span class="block text-green-500 xl:inline" data-primary="indigo-600">excellence in Pekalongan!</span>
						</h1>
						<p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Syafi'i Akrom is one of the central schools of excellence in the city of Pekalongan. Here we have several departments including <span class="text-white px-2 rounded-full bg-green-600">TKRO</span>, <span class="text-white px-2 rounded-full bg-blue-900">TBSM</span>, <span class="text-white px-2 rounded-full bg-blue-500">TJKT</span>, <span class="text-white px-2 rounded-full bg-pink-500">BB</span> and <span class="text-white px-2 rounded-full bg-red-500">PPLG</span>.</p>
					</div>
				</div>
				<div class="w-full md:w-1/2">
					<div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
						<img src="<?= base_url("assets_backend/img/pusat-keunggulan.webp") ?>">
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>
