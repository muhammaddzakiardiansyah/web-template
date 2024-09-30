<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SMK Syafi'i Akrom</title>
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
	<section class="h-auto bg-white">
		<div class="px-10 py-24 mx-auto max-w-7xl">
			<div class="w-full mx-auto text-left">
				<h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight"><span class="text-green-500">Vis</span>ion</h1>
				<p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24"> Say hello to the number one source for all your design needs. Drag and drop designs, edit designs, and modify the components to help tell your story. </p>
			</div>
		</div>
	</section>
	<section class="h-auto bg-white">
		<div class="px-10 py-24 mx-auto max-w-7xl">
			<div class="w-full mx-auto text-right">
				<h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight">Mis<span class="text-green-500">ion</span></h1>
				<p class="px-0 mb-6 text-lg text-right text-gray-600 md:text-xl lg:px-24"> Say hello to the number one source for all your design needs. Drag and drop designs, edit designs, and modify the components to help tell your story. </p>
			</div>
		</div>
	</section>
	<section class="py-20 bg-white">
		<div class="container max-w-6xl mx-auto">
			<h2 class="text-4xl font-bold tracking-tight text-center">Some of our majors</h2>
			<p class="mt-2 text-lg text-center text-gray-600">We have several departments that are filled by competent teachers so that children can get a quality learning experience.</p>
			<div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

				<div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
					<div class="p-3 text-white bg-blue-900 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
						<img src="<?= base_url("assets_frontend/motorcycle-so-svgrepo-com.svg") ?>" alt="motorcycle svg" width="35" height="35">
					</div>
					<h4 class="text-xl font-medium text-gray-700">TBSM</h4>
					<p class="text-base text-center text-gray-500">Each of our plan will provide you and your team with certifications.</p>
				</div>

				<div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
					<div class="p-3 text-white bg-green-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
						<img src="<?= base_url("assets_frontend/car-svgrepo-com.svg") ?>" alt="motorcycle svg" width="35" height="35">
					</div>
					<h4 class="text-xl font-medium text-gray-700">TKRO</h4>
					<p class="text-base text-center text-gray-500">Send out notifications to all your customers to keep them engaged.</p>
				</div>

				<div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
					<div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
						<img src="<?= base_url("assets_frontend/computer-svgrepo-com.svg") ?>" alt="motorcycle svg" width="35" height="35">
					</div>
					<h4 class="text-xl font-medium text-gray-700">TJKT</h4>
					<p class="text-base text-center text-gray-500">High-quality bundles of awesome tools to help you out.</p>
				</div>

				<div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
					<div class="p-3 text-white bg-pink-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
						<img src="<?= base_url("assets_frontend/fashion-dress-clothes-vogue-svgrepo-com.svg") ?>" alt="motorcycle svg" width="35" height="35">
					</div>
					<h4 class="text-xl font-medium text-gray-700">BB</h4>
					<p class="text-base text-center text-gray-500">Developer tools to help grow your application and keep it up-to-date.</p>
				</div>

				<div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
					<div class="p-3 text-white bg-red-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
						<img src="<?= base_url("assets_frontend/code-svgrepo-com.svg") ?>" alt="motorcycle svg" width="35" height="35">
					</div>
					<h4 class="text-xl font-medium text-gray-700">PPLG</h4>
					<p class="text-base text-center text-gray-500">The right kind of building blocks to take your company to the next level.</p>
				</div>

			</div>
		</div>
	</section>
	<section class="bg-white pt-7 pb-14">
		<div class="container px-8 mx-auto sm:px-12 lg:px-20">
			<h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">Industrial cooperation with smksa.</h1>
			<div class="flex grid items-center justify-center grid-cols-4 grid-cols-12 gap-y-8">
				<div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
					<img src="https://cdn.devdojo.com/tails/images/disney-plus.svg" alt="Disney Plus" class="block object-contain h-12" />
				</div>
				<div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
					<img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google" class="block object-contain h-9" />
				</div>
				<div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
					<img src="https://cdn.devdojo.com/tails/images/hubspot.svg" alt="Hubspot" class="block object-contain h-9" />
				</div>
				<div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
					<img src="https://cdn.devdojo.com/tails/images/youtube.svg" alt="Youtube" class="block object-contain h-7 lg:h-8" />
				</div>
				<div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
					<img src="https://cdn.devdojo.com/tails/images/slack.svg" alt="Slack" class="block object-contain h-9" />
				</div>
				<div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
					<img src="https://cdn.devdojo.com/tails/images/shopify.svg" alt="Shopify" class="block object-contain h-9" />
				</div>
			</div>
		</div>
	</section>
	<section class="h-auto bg-white">
		<div class="max-w-7xl mx-auto py-16 px-10 sm:py-24 sm:px-6 lg:px-8 sm:text-center">
			<h2 class="text-base font-semibold text-green-500 tracking-wide uppercase">smk syafi'i akrom</h2>
			<p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Build your next great idea</p>
			<p class="max-w-3xl mt-5 mx-auto text-xl text-gray-500">Are you ready to start building the next great idea. You can start off by using our design components to help tell you story and showcase your great idea.</p>
		</div>
	</section>

	<section class="bg-white">
		<div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

			<div class="flex flex-col items-center sm:px-5 md:flex-row">
				<div class="w-full md:w-1/2">
					<a href="#_" class="block">
						<img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96" src="https://cdn.devdojo.com/images/may2021/cupcakes.jpg">
					</a>
				</div>
				<div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
					<div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
						<div class="bg-pink-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
							<svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
							</svg>
							<span>Featured</span>
						</div>
						<h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="#_">Savory Templates. Sweet Designs.</a></h1>
						<p class="pt-2 text-sm font-medium">by <a href="#_" class="mr-1 underline">John Doe</a> · <span class="mx-1">April 23rd, 2021</span> · <span class="mx-1 text-gray-600">5 min. read</span></p>
					</div>
				</div>
			</div>

			<div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
				<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
					<a href="#_" class="block">
						<img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/fruit.jpg">
					</a>
					<div class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
						<span>Lifestyle</span>
					</div>
					<h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="#_">Creating a Future Worth Living</a></h2>
					<p class="text-sm text-gray-500">Learn the attributes you need to gain in order to build a future and create a life that you are truly happy with.</p>
					<p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mary Jane</a> · <span class="mx-1">April 17, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
				</div>

				<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
					<a href="#_" class="block">
						<img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/workout.jpg">
					</a>
					<div class="bg-pink-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
						<span>Health</span>
					</div>
					<h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Healther Version of Yourself</h2>
					<p class="text-sm text-gray-500">If you want to excel in life and become a better version of yourself, you'll need to upgrade your life.</p>
					<p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Fred Jones</a> · <span class="mx-1">April 10, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
				</div>

				<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
					<a href="#_" class="block">
						<img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/food.jpg">
					</a>
					<div class="bg-red-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
						<span>Food</span>
					</div>
					<h2 class="text-lg font-bold sm:text-xl md:text-2xl">Enjoy the Meals of the Kings</h2>
					<p class="text-sm text-gray-500">Take the time to enjoy the life that you've created. It's totally fine to live like kings and eat like royalty.</p>
					<p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mike Roberts</a> · <span class="mx-1">April 6, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
				</div>

				<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
					<a href="#_" class="block">
						<img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/books.jpg">
					</a>
					<div class="bg-blue-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
						<span>Motivation</span>
					</div>
					<h2 class="text-lg font-bold sm:text-xl md:text-2xl">Writing for Success</h2>
					<p class="text-sm text-gray-500">Writing about your plans for success is extremely helpful for yourself and it will allow you to share your story.</p>
					<p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Tom Johnson</a> · <span class="mx-1">May 25, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
				</div>

				<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
					<a href="#_" class="block">
						<img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/clock.jpg">
					</a>
					<div class="bg-gray-800 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
						<span>Business</span>
					</div>
					<h2 class="text-lg font-bold sm:text-xl md:text-2xl">Simple Time Management</h2>
					<p class="text-sm text-gray-500">Managing your time can make the difference between getting ahead in life or staying exactly where you are.</p>
					<p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Scott Reedman</a> · <span class="mx-1">May 18, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
				</div>

				<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
					<a href="#_" class="block">
						<img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/lemons.jpg">
					</a>
					<div class="bg-yellow-400 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
						<span>Nutrition</span>
					</div>
					<h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Fruits Life</h2>
					<p class="text-sm text-gray-500">Take a moment and enjoy to enjoy the many fruits of life. Relaxation and a healthy diet can go a long way.</p>
					<p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Jake Caldwell</a> · <span class="mx-1">May 15, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
				</div>

			</div>
		</div>
	</section>
	<section class="flex items-center justify-center py-20 bg-white min-w-screen">
		<div class="px-16 bg-white">
			<div class="container flex flex-col items-start mx-auto lg:items-center">
				<p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-green-500 uppercase lg:justify-center lg:items-center" data-primary="purple-500">Don't just take our word for it</p>


				<h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block"
						viewBox="0 0 975.036 975.036">
						<path
							d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
						</path>
					</svg>
					See what others are saying
				</h2>
				<div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full" data-primary="purple-600"></div>

				<div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
					<div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
						<div class="flex items-center justify-center">
							<div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
								<img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1700&q=80"
									class="object-cover w-full h-full">
							</div>
							<div class="flex flex-col items-start justify-center">
								<h4 class="font-bold text-gray-800">John Doe</h4>
								<p class="text-gray-600">CEO of Something</p>
							</div>
						</div>
						<blockquote class="mt-8 text-lg text-gray-500">"This is a no-brainer if you want to take your business to the next level. If you are looking for the ultimate toolset, this is it!"</blockquote>
					</div>
					<div
						class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
						<div class="flex items-center justify-center">
							<div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
								<img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2547&q=80"
									class="object-cover w-full h-full">
							</div>
							<div class="flex flex-col items-start justify-center">
								<h4 class="font-bold text-gray-800">Jane Doe</h4>
								<p class="text-gray-600">CTO of Business</p>
							</div>
						</div>
						<blockquote class="mt-8 text-lg text-gray-500">"Thanks for creating this service. My life is so much
							easier.
							Thanks for making such a great product."</blockquote>
					</div>
					<div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
						<div class="flex items-center justify-center">
							<div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
								<img src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1256&q=80"
									class="object-cover w-full h-full">
							</div>
							<div class="flex flex-col items-start justify-center">
								<h4 class="font-bold text-gray-800">John Smith</h4>
								<p class="text-gray-600">Creator of Stuff</p>
							</div>
						</div>
						<blockquote class="mt-8 text-lg text-gray-500">"Packed with awesome content and exactly what I was
							looking
							for. I would highly recommend this to anyone."</blockquote>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-slate-300">
		<div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
			<nav class="flex flex-wrap justify-center -mx-5 -my-2">
				<div class="px-5 py-2">
					<a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
						About
					</a>
				</div>
				<div class="px-5 py-2">
					<a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
						Blog
					</a>
				</div>
				<div class="px-5 py-2">
					<a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
						Team
					</a>
				</div>
				<div class="px-5 py-2">
					<a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
						Pricing
					</a>
				</div>
				<div class="px-5 py-2">
					<a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
						Contact
					</a>
				</div>
				<div class="px-5 py-2">
					<a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
						Terms
					</a>
				</div>
			</nav>
			<div class="flex justify-center mt-8 space-x-6">
				<a href="#" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">Facebook</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">Instagram</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">Twitter</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">GitHub</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-500">
					<span class="sr-only">Dribbble</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
						<path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
					</svg>
				</a>
			</div>
			<p class="mt-8 text-base leading-6 text-center text-gray-400">
				&copy; 2021 SomeCompany, Inc. All rights reserved.
			</p>
		</div>
	</section>
</body>

</html>
