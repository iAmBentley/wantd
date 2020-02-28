@extends('layouts.app')

@section('content')
    <header class="bg-gray-300">
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 lg:py-16">
			<div class="">
				<label for="item" class="sr-only">Add New Item</label>
				<div class="max-w-sm mx-auto flex rounded-md shadow-sm">
					<div class="relative flex-grow focus-within:z-10">
						<input id="item"
							class="form-input block w-full rounded-none rounded-l-md pl-4 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
							placeholder="Enter a URL or type 'Create' to add items" />
					</div>
					<button
						class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-r-md text-gray-700 bg-gray-50 hover:text-gray-500 hover:bg-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
						<svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
							<path
								d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
			<div class="px-2">
				<div class="flex flex-wrap -mx-2">
					<div class="lg:w-3/4 lg:pr-3">
						<h3 class="text-gray-800 text-2xl pb-4">Your Recent Items</h3>
						<div class="flex flex-col">
							<div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
								<div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
									<table class="min-w-full">
										<thead>
											<tr>
												<th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> Want'd Level </th>
												<th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> Item </th>
												<th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider whitespace-no-wrap"> Price (ea) </th>
												<th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> Visibility </th>
												<th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
											</tr>
										</thead>
										<tbody class="bg-white">
											<tr>
												<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
													<span class="inline-block text-gray-300">
														<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
														</svg>
													</span>
													<span class="inline-block text-gray-300">
														<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
														</svg>
													</span>
													<span class="inline-block text-gray-300">
														<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
														</svg>
													</span>
													<span class="inline-block text-gray-300">
														<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
														</svg>
													</span>
													<span class="inline-block text-gray-300">
														<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
														</svg>
													</span>
												</td>
												<td class="px-6 py-4 border-b border-gray-200">
													<div class="flex items-center">
														<div class="flex-shrink-0 h-10 w-10">
															<img class="h-10 w-10 rounded-full"
																src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
																alt="" />
														</div>
														<div class="ml-4">
															<div class="text-sm leading-5 font-medium text-gray-900">Acratech Arca-Type Quick-Release Plate for Nikon D5200</div>
														</div>
													</div>
												</td>
												<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
													$19.99
												</td>
												<td class="px-6 py-4 border-b border-gray-200">
													<a href="#" class="text-green-500 hover:text-gray-400 focus:outline-none focus:underline">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.9998 12C14.9998 13.6569 13.6566 15 11.9998 15C10.3429 15 8.99976 13.6569 8.99976 12C8.99976 10.3431 10.3429 9 11.9998 9C13.6566 9 14.9998 10.3431 14.9998 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M2.45801 12C3.73228 7.94288 7.52257 5 12.0002 5C16.4778 5 20.2681 7.94291 21.5424 12C20.2681 16.0571 16.4778 19 12.0002 19C7.52256 19 3.73226 16.0571 2.45801 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</a>
												</td>
												<td class="border-b border-gray-200 px-6 py-4">
													<a href="#" class="text-gray-800 hover:text-gray-900 focus:outline-none focus:underline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 5V5.01V5ZM12 12V12.01V12ZM12 19V19.01V19ZM12 6C11.4477 6 11 5.55228 11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5C13 5.55228 12.5523 6 12 6ZM12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13ZM12 20C11.4477 20 11 19.5523 11 19C11 18.4477 11.4477 18 12 18C12.5523 18 13 18.4477 13 19C13 19.5523 12.5523 20 12 20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="lg:w-1/4 px-2">
						<div>
							<h3 class="text-gray-800 text-2xl pb-4">Upcoming Events</h3>
							<div class="flex flex-col">
								<div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
									<div class="align-middle inline-block min-w-full shadow bg-white overflow-hidden sm:rounded-lg border-b border-gray-200">
										<table class="min-w-full bg-white">
											<thead>
												<tr>
													<th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> Event </th>
													<th class="pr-3 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
												</tr>
											</thead>
											<tbody class="bg-white">
												<tr>
													<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
														<div class="font-bold text-sm leading-5 text-gray-900">Donnie's Birthday</div>
														<div class="text-sm leading-5 text-gray-500">In 4 Days • Stone Family</div>
													</td>
													<td class="pr-3 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 5V5.01V5ZM12 12V12.01V12ZM12 19V19.01V19ZM12 6C11.4477 6 11 5.55228 11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5C13 5.55228 12.5523 6 12 6ZM12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13ZM12 20C11.4477 20 11 19.5523 11 19C11 18.4477 11.4477 18 12 18C12.5523 18 13 18.4477 13 19C13 19.5523 12.5523 20 12 20Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
													</td>
												</tr>
												<tr>
													<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
														<div class="font-bold text-sm leading-5 text-gray-900">Stephanie's Shower</div>
														<div class="text-sm leading-5 text-gray-500">03/08/20 • Book Club Girls</div>
													</td>
													<td class="pr-3 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 5V5.01V5ZM12 12V12.01V12ZM12 19V19.01V19ZM12 6C11.4477 6 11 5.55228 11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5C13 5.55228 12.5523 6 12 6ZM12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13ZM12 20C11.4477 20 11 19.5523 11 19C11 18.4477 11.4477 18 12 18C12.5523 18 13 18.4477 13 19C13 19.5523 12.5523 20 12 20Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-4">
							<h3 class="text-gray-800 text-2xl pb-4">Recent Groups</h3>
							<div class="flex flex-col">
								<div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
									<div class="align-middle inline-block min-w-full shadow bg-white overflow-hidden sm:rounded-lg border-b border-gray-200">
										<table class="min-w-full bg-white">
											<thead>
												<tr>
													<th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> Name </th>
													<th class="pr-3 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">  </th>
												</tr>
											</thead>
											<tbody class="bg-white">
												<tr>
													<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
														<div class="font-bold text-sm leading-5 text-gray-900">Book Club Girls</div>
														<div class="text-sm leading-5 text-gray-500">4 of 4 members have joined</div>
													</td>
													<td class="pr-3 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 5V5.01V5ZM12 12V12.01V12ZM12 19V19.01V19ZM12 6C11.4477 6 11 5.55228 11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5C13 5.55228 12.5523 6 12 6ZM12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13ZM12 20C11.4477 20 11 19.5523 11 19C11 18.4477 11.4477 18 12 18C12.5523 18 13 18.4477 13 19C13 19.5523 12.5523 20 12 20Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
													</td>
												</tr>
												<tr>
													<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
														<div class="font-bold text-sm leading-5 text-gray-900">Stone Family</div>
														<div class="text-sm leading-5 text-gray-500">5 of 6 members have joined</div>
													</td>
													<td class="pr-3 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 5V5.01V5ZM12 12V12.01V12ZM12 19V19.01V19ZM12 6C11.4477 6 11 5.55228 11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5C13 5.55228 12.5523 6 12 6ZM12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13ZM12 20C11.4477 20 11 19.5523 11 19C11 18.4477 11.4477 18 12 18C12.5523 18 13 18.4477 13 19C13 19.5523 12.5523 20 12 20Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection