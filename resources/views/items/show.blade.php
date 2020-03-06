@extends('layouts.app')

@section('content')
<header class="bg-gray-300">
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 lg:py-8">
			<div class="flex justify-between items-center">
				<h1 class="ml-1">Item</h1>
			</div>
		</div>
	</header>
	<main>
		<div class="lg:px-8 max-w-7xl mx-auto px-4 py-6 mb-16">
			<div class="flex flex-wrap justify-between">
				{{-- IMAGE SIDE --}}
				<div class="w-full md:w-1/3 md:pr-6 mb-8 md:mb-0">
					<img class="w-full object-cover rounded-md" src="https://images.unsplash.com/photo-1495121553079-4c61bcce1894?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=629&q=80" alt="Sunset in the mountains">
				</div>
				<div class="w-full md:w-2/3">
					<div class="">
						{{-- wantd level --}}
						<div class="flex mb-1 items-center">
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
						</div>
						<h2 class="max-w-2xl leading-snug mb-2">Apple Watch w/ GPS, 40mm Space Gray Aluminum Case with Anchor Gray Sport Loop</h2>
						<div class="mb-4 mt-3 text-gray-400">
							<p class="inline-block mr-4">Apple • <a href="#" class="hover:text-gray-700">Bike Stuff</a></p>
							<div class="rounded-full inline-block bg-orange-200 text-orange-800 py-1 px-4">
								<svg class="-mt-1 h-4 inline-block w-4" fill="currentColor" viewBox="0 0 24 24">
									<path d="M7 10V7a5 5 0 1 1 10 0v3h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h2zm2 0h6V7a3 3 0 0 0-6 0v3zm-4 2v8h14v-8H5zm7 2a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1z"/>
								</svg>
								Reserved
							</div>
						</div>
					</div>
					<hr>
					<div class="mb-8 mt-4 max-w-lg">
						<div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-2">
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">Space Gray</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C2.89543 2 2 2.89543 2 4V15C2 16.6569 3.34315 18 5 18C6.65685 18 8 16.6569 8 15V4C8 2.89543 7.10457 2 6 2H4ZM5 16C5.55228 16 6 15.5523 6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15C4 15.5523 4.44772 16 5 16ZM10 14.2426L14.8995 9.34308C15.6805 8.56203 15.6805 7.2957 14.8995 6.51465L13.4853 5.10044C12.7042 4.31939 11.4379 4.31939 10.6568 5.10044L10 5.75728V14.2426ZM16 18H9.07104L15.071 12H16C17.1046 12 18 12.8954 18 14V16C18 17.1046 17.1046 18 16 18Z" fill="currentColor"/>
									</svg>
									Color
								</div>
							</div>
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">40mm</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C2.89543 2 2 2.89543 2 4V15C2 16.6569 3.34315 18 5 18C6.65685 18 8 16.6569 8 15V4C8 2.89543 7.10457 2 6 2H4ZM5 16C5.55228 16 6 15.5523 6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15C4 15.5523 4.44772 16 5 16ZM10 14.2426L14.8995 9.34308C15.6805 8.56203 15.6805 7.2957 14.8995 6.51465L13.4853 5.10044C12.7042 4.31939 11.4379 4.31939 10.6568 5.10044L10 5.75728V14.2426ZM16 18H9.07104L15.071 12H16C17.1046 12 18 12.8954 18 14V16C18 17.1046 17.1046 18 16 18Z" fill="currentColor"/>
									</svg>
									Size
								</div>
							</div>
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">One</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7 9C7 7.89543 7.89543 7 9 7H15C16.1046 7 17 7.89543 17 9V15C17 16.1046 16.1046 17 15 17H9C7.89543 17 7 16.1046 7 15V9Z" fill="currentColor"/><path d="M5 3C3.89543 3 3 3.89543 3 5V11C3 12.1046 3.89543 13 5 13L5 5H13C13 3.89543 12.1046 3 11 3H5Z" fill="currentColor"/>
									</svg>
									Quantity
								</div>
							</div>
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">$399.99</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L10.7071 17.7071C10.3166 18.0976 9.68342 18.0976 9.29289 17.7071L2.29289 10.7071C2.0976 10.5118 1.99997 10.2558 2 9.99988V5C2 3.34315 3.34315 2 5 2H10.0003C10.2561 2.00007 10.5119 2.0977 10.7071 2.29289L17.7071 9.29289ZM5 6C5.55228 6 6 5.55228 6 5C6 4.44772 5.55228 4 5 4C4.44772 4 4 4.44772 4 5C4 5.55228 4.44772 6 5 6Z" fill="currentColor"/>
									</svg>
									Price
								</div>
							</div>
						</div>
					</div>
					<div class="mt-6">
						<h4>Notes</h4>
						<hr class="mt-2 mb-4">
						<p class="max-w-2xl leading-6 text-gray-600">This is where you would see any notes left by you or the person who the item belongs to. If there are not any notes, this will not appear and the ‘purchase’ button will be closer to the top copy.</p>
					</div>
					<div class="">
						<a href="#">Buy Now</a>
						<button type="button">Reserve</button>
						<button type="button">Mark Purchased</button>
					</div>
				</div>
				<div class="w-full mt-6">
					<h4>Description</h4>
					<hr class="mt-2 mb-4">
					<p class="leading-6 text-gray-600">Built-in GPS, GLONASS, Galileo, and QZSS, S5 with 64-bit dual-core processor, W3 Apple wireless chip, Barometric altimeter, Capacity 32GB, Optical heart sensor, Electrical heart sensor, Improved accelerometer up to 32 g‑forces, Improved gyroscope, Ambient light sensor, LTPO OLED Always-On Retina display with Force Touch (1000 nits), Digital Crown with haptic feedback, Louder speaker, Ion-X strengthened glass, Sapphire crystal and ceramic back, Wi-Fi 802.11b/g/n 2.4GHz, Bluetooth 5.0, Built-in rechargeable lithium-ion battery, Up to 18 hours of battery life, Water resistant 50 meters, watchOS 5</p>
				</div>
			</div>
		</div>
	</main>
@endsection