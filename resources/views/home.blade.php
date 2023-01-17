@extends('layouts.index')

@section('content')
    <div class="mt-20">
        <div class="container h-100 px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">School website for you!</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Useful School Website with CRUD Features
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    We created this website to make it easier for you to manage students
                </p>
                <a href="/students" class="no-underline"><button
                        class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Look at student list!
                    </button></a>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 text-center">
                <img class="w-full md:w-4/5 z-50" src="hero.png" />
            </div>
        </div>
    </div>
    <div class="relative mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="#0099ff" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="" fill-rule="nonzero">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="white" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>
    </div>
    <div class="bg-white py-6 mt-10 mb-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="sm:text-center">
                <h2 class="text-lg font-semibold leading-8 text-sky-500">Managements</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A better way to manage school
                    students</p>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">By using our student management system,
                    you can easily manage and organize all of your student data in one integrated place</p>
            </div>

            <div class="mt-20 max-w-lg sm:mx-auto md:max-w-none">
                <div class="grid grid-cols-1 gap-y-16 md:grid-cols-2 md:gap-x-12 md:gap-y-16">
                    <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-500 text-white sm:shrink-0">
                            <!-- Heroicon name: outline/globe-alt -->
                            <svg fill="#ffffff" viewBox="-56.32 -56.32 368.64 368.64" id="Layer_1" version="1.1"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"
                                stroke-width="5.3759999999999994">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path
                                            d="M63.1,106.3H9.9c-2.7,0-4.9,2.2-4.9,4.9c0,2.7,2.2,4.9,4.9,4.9h53.2c2.7,0,4.9-2.2,4.9-4.9C68,108.5,65.8,106.3,63.1,106.3 z">
                                        </path>
                                        <path
                                            d="M63.1,135.2H38.6c-2.7,0-4.9,2.2-4.9,4.9c0,2.7,2.2,4.9,4.9,4.9h24.5c2.7,0,4.9-2.2,4.9-4.9 C68,137.4,65.8,135.2,63.1,135.2z">
                                        </path>
                                        <path
                                            d="M63.1,164.1H22.7c-2.7,0-4.9,2.2-4.9,4.9c0,2.7,2.2,4.9,4.9,4.9h40.4c2.7,0,4.9-2.2,4.9-4.9 C68,166.3,65.8,164.1,63.1,164.1z">
                                        </path>
                                        <path
                                            d="M242.9,103.9c-4-8.5-9.3-16.2-15.8-22.9c-3.1-3.3-6.6-6.3-10.2-9l6.4-8.5c1.6-2.2,1.2-5.3-1-6.9c-2.2-1.6-5.3-1.2-6.9,1 l-6.8,9c-4.5-2.7-9.3-4.9-14.2-6.7c-4.3-1.5-8.7-2.7-13.2-3.6c-2.9-0.5-5.9-0.9-8.8-1.1V40.3h9.9c2.7,0,4.9-2.2,4.9-4.9 c0-2.7-2.2-4.9-4.9-4.9h-29.7c-2.7,0-4.9,2.2-4.9,4.9c0,2.7,2.2,4.9,4.9,4.9h9.9v14.5c-11.4,0.4-22.7,3.1-33.1,7.9 c-8.5,4-16.2,9.2-23,15.7c-9.5,9-16.8,20.3-21.3,32.6c-1.6,4.3-2.8,8.9-3.7,13.5c-0.9,4.6-1.3,9.2-1.5,13.8 c-0.3,13.2,2.5,26.4,8.2,38.4c4,8.4,9.2,16,15.7,22.7c9.1,9.5,20.4,16.8,32.7,21.2c4.3,1.5,8.7,2.7,13.2,3.6 c4.5,0.8,9,1.3,13.6,1.4c0.7,0,1.5,0,2.2,0c12.4,0,24.8-2.7,36-8c8.4-3.9,16.1-9.1,22.8-15.5c9.6-9.1,17-20.4,21.5-32.8 c1.6-4.3,2.8-8.9,3.6-13.4c0.9-4.6,1.4-9.3,1.5-13.9C251.3,128.9,248.5,115.7,242.9,103.9z M239.8,154 C239.8,154,239.8,154,239.8,154c-0.8,4.1-1.8,8-3.2,11.9c-4,10.9-10.5,21-19,29c-5.9,5.6-12.7,10.3-20.2,13.7 c-10.5,4.9-22.3,7.4-33.7,7c-4-0.1-8-0.5-12-1.3c-4-0.7-7.9-1.8-11.7-3.1c-10.9-3.9-20.9-10.4-28.9-18.8 c-5.7-5.9-10.4-12.7-13.9-20.1c-5-10.5-7.5-22.3-7.2-33.9c0.1-4.1,0.5-8.2,1.3-12.2c0.8-4.1,1.9-8.1,3.2-11.9 c3.9-10.9,10.4-20.8,18.8-28.8c6-5.7,12.8-10.4,20.4-13.9c9.9-4.6,20.9-7,31.8-7c0.6,0,1.3,0,1.9,0c4,0.1,8,0.5,12,1.3 c4,0.7,7.9,1.8,11.7,3.2C202,73,212,79.4,220,87.8c5.7,6,10.4,12.8,14,20.3c4.9,10.5,7.4,22.1,7.1,33.7 C241,145.8,240.6,150,239.8,154z">
                                        </path>
                                        <path
                                            d="M196.1,105.9L175,125c-1.1-0.7-2.2-1.2-3.4-1.7c-0.9-0.3-1.8-0.6-2.7-0.7c-1-0.2-1.9-0.3-2.8-0.3c-2.7-0.1-5.5,0.5-8,1.7 c-1.8,0.8-3.4,1.9-4.8,3.3c-2,1.9-3.5,4.2-4.4,6.8c-0.3,0.9-0.6,1.8-0.8,2.8c-0.2,1-0.3,1.9-0.3,2.9c-0.1,2.8,0.5,5.5,1.7,8 c0.8,1.8,1.9,3.3,3.3,4.7c1.9,2,4.3,3.5,6.8,4.4c0.9,0.3,1.8,0.6,2.7,0.7c0.9,0.2,1.9,0.3,2.8,0.3c0.2,0,0.3,0,0.5,0 c2.6,0,5.2-0.6,7.5-1.7c1.7-0.8,3.4-1.9,4.8-3.2c2-1.9,3.5-4.3,4.5-6.8c0.3-0.9,0.6-1.8,0.8-2.8c0.2-1,0.3-1.9,0.3-2.9 c0.1-2.7-0.5-5.5-1.7-8c0-0.1-0.1-0.1-0.1-0.2l21.2-19.1c2-1.8,2.2-5,0.4-7C201.3,104.3,198.2,104.1,196.1,105.9z M173.4,141.6 C173.4,141.6,173.4,141.6,173.4,141.6c-0.1,0.4-0.2,0.9-0.3,1.3c-0.4,1.1-1.1,2.2-2,3c-0.6,0.6-1.3,1.1-2.1,1.4 c-1.1,0.5-2.3,0.7-3.5,0.7c-0.4,0-0.9-0.1-1.3-0.1c-0.4-0.1-0.8-0.2-1.2-0.3c-1.1-0.4-2.2-1.1-3-2c-0.6-0.6-1.1-1.3-1.5-2.1 c-0.5-1.1-0.8-2.3-0.8-3.5c0-0.4,0.1-0.9,0.1-1.3c0.1-0.4,0.2-0.9,0.3-1.3c0.4-1.1,1.1-2.2,2-3c0.6-0.6,1.3-1.1,2.1-1.5 c1.1-0.5,2.2-0.7,3.3-0.7c0.1,0,0.1,0,0.2,0c0.4,0,0.8,0.1,1.3,0.1c0.4,0.1,0.8,0.2,1.2,0.3c1.2,0.4,2.2,1.1,3,2 c0.6,0.6,1.1,1.4,1.5,2.1c0.5,1.1,0.8,2.3,0.7,3.5C173.5,140.7,173.4,141.2,173.4,141.6z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="sm:min-w-0 sm:flex-1">
                            <p class="text-lg font-semibold leading-8 text-gray-900">Easy and fast management of student
                                data</p>
                            <p class="mt-2 text-base leading-7 text-gray-600">Easy and fast student data management with our
                                system. Intuitive navigation, user-friendly interface, and quick search/update capabilities.
                                Streamline administration and focus on education.</p>
                        </div>
                    </div>

                    <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-500 text-white sm:shrink-0">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                            </svg>
                        </div>
                        <div class="sm:min-w-0 sm:flex-1">
                            <p class="text-lg font-semibold leading-8 text-gray-900">Efficient communication with students
                            </p>
                            <p class="mt-2 text-base leading-7 text-gray-600">Comprehensive student data analysis with our
                                system, allowing you to track student performance and make data-driven decisions for
                                planning and evaluating learning.</p>
                        </div>
                    </div>

                    <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-500 text-white sm:shrink-0">
                            <!-- Heroicon name: outline/bolt -->
                            <svg viewBox="-4.4 -4.4 28.80 28.80" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="layer1">
                                        <path
                                            d="M 10 0.029296875 L 9.4941406 0.048828125 L 8.9941406 0.11328125 L 8.4980469 0.21875 L 8.015625 0.36523438 L 7.5449219 0.55273438 L 7.0917969 0.78125 L 6.6601562 1.0429688 L 6.2519531 1.3417969 L 5.8710938 1.6738281 L 5.5175781 2.0371094 L 5.1992188 2.4296875 L 4.9140625 2.8457031 L 4.6621094 3.2832031 L 4.4511719 3.7421875 L 4.2792969 4.21875 L 4.1484375 4.7050781 L 4.0566406 5.203125 L 4.0078125 5.7070312 L 4.0039062 6.2109375 L 4.0410156 6.7148438 L 4.1191406 7.2128906 L 4.2441406 7.7050781 L 4.40625 8.1835938 L 4.6074219 8.6445312 L 4.8476562 9.0917969 L 5.125 9.5136719 L 5.4726562 10.029297 L 5.7871094 10.564453 L 6.0664062 11.121094 L 6.3105469 11.691406 L 6.5195312 12.275391 L 6.6933594 12.875 L 6.8261719 13.480469 L 6.921875 14.09375 L 6.9804688 14.712891 L 7 15.333984 L 7 18.003906 L 7.0195312 18.287109 L 7.0800781 18.564453 L 7.1796875 18.832031 L 7.3183594 19.082031 L 7.4882812 19.310547 L 7.6914062 19.513672 L 7.9179688 19.683594 L 8.1699219 19.820312 L 8.4375 19.919922 L 8.7148438 19.980469 L 9 20 L 11 20 L 11.285156 19.980469 L 11.5625 19.919922 L 11.830078 19.820312 L 12.082031 19.683594 L 12.310547 19.513672 L 12.511719 19.310547 L 12.681641 19.082031 L 12.820312 18.832031 L 12.919922 18.564453 L 12.980469 18.287109 L 13 18.003906 L 13 15.333984 L 13.019531 14.712891 L 13.078125 14.09375 L 13.173828 13.480469 L 13.306641 12.875 L 13.480469 12.275391 L 13.689453 11.691406 L 13.933594 11.121094 L 14.212891 10.564453 L 14.527344 10.029297 L 14.875 9.5136719 L 15.152344 9.0917969 L 15.392578 8.6445312 L 15.59375 8.1835938 L 15.757812 7.7050781 L 15.880859 7.2128906 L 15.958984 6.7148438 L 15.996094 6.2109375 L 15.992188 5.7070312 L 15.943359 5.203125 L 15.853516 4.7050781 L 15.722656 4.21875 L 15.548828 3.7421875 L 15.337891 3.2832031 L 15.087891 2.8457031 L 14.800781 2.4296875 L 14.482422 2.0371094 L 14.128906 1.6738281 L 13.748047 1.3417969 L 13.339844 1.0429688 L 12.908203 0.78125 L 12.455078 0.55273438 L 11.986328 0.36523438 L 11.501953 0.21875 L 11.005859 0.11328125 L 10.505859 0.048828125 L 10 0.029296875 z M 10 1.0273438 L 10.457031 1.0488281 L 10.908203 1.1113281 L 11.353516 1.2148438 L 11.787109 1.3574219 L 12.205078 1.5390625 L 12.607422 1.7597656 L 12.984375 2.0136719 L 13.337891 2.3027344 L 13.664062 2.6230469 L 13.958984 2.9707031 L 14.222656 3.34375 L 14.449219 3.7402344 L 14.638672 4.15625 L 14.789062 4.5859375 L 14.898438 5.0273438 L 14.970703 5.4785156 L 15 5.9335938 L 14.986328 6.390625 L 14.931641 6.8417969 L 14.835938 7.2871094 L 14.699219 7.7246094 L 14.525391 8.1445312 L 14.3125 8.5488281 L 14.0625 8.9296875 L 13.699219 9.4707031 L 13.365234 10.03125 L 13.068359 10.609375 L 12.806641 11.205078 L 12.578125 11.814453 L 12.388672 12.439453 L 12.236328 13.070312 L 12.121094 13.710938 L 12.044922 14.357422 L 12.005859 15.007812 L 7.9941406 15.007812 L 7.9550781 14.357422 L 7.8789062 13.710938 L 7.7636719 13.070312 L 7.6113281 12.439453 L 7.421875 11.814453 L 7.1933594 11.205078 L 6.9316406 10.609375 L 6.6347656 10.03125 L 6.3007812 9.4707031 L 5.9375 8.9296875 L 5.6894531 8.5488281 L 5.4746094 8.1445312 L 5.3007812 7.7246094 L 5.1640625 7.2871094 L 5.0703125 6.8417969 L 5.015625 6.390625 L 5.0019531 5.9335938 L 5.03125 5.4785156 L 5.1015625 5.0273438 L 5.2109375 4.5859375 L 5.3613281 4.15625 L 5.5507812 3.7402344 L 5.7792969 3.34375 L 6.0410156 2.9707031 L 6.3359375 2.6230469 L 6.6621094 2.3027344 L 7.015625 2.0136719 L 7.3945312 1.7597656 L 7.7949219 1.5390625 L 8.2128906 1.3574219 L 8.6464844 1.2148438 L 9.0917969 1.1113281 L 9.5449219 1.0488281 L 10 1.0273438 z M 8 16.005859 L 12 16.005859 L 12 18.003906 L 11.982422 18.197266 L 11.921875 18.384766 L 11.830078 18.556641 L 11.707031 18.708984 L 11.554688 18.832031 L 11.382812 18.923828 L 11.193359 18.980469 L 11 19 L 9 19 L 8.8066406 18.980469 L 8.6171875 18.923828 L 8.4453125 18.832031 L 8.2929688 18.708984 L 8.1699219 18.556641 L 8.078125 18.384766 L 8.0175781 18.197266 L 8 18.003906 L 8 16.005859 z "
                                            style="fill:#ffffff; fill-opacity:1; stroke:none; stroke-width:0px;"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="sm:min-w-0 sm:flex-1">
                            <p class="text-lg font-semibold leading-8 text-gray-900">Comprehensive student data analysis</p>
                            <p class="mt-2 text-base leading-7 text-gray-600">Our student management system offers
                                comprehensive student data analysis, giving you the ability to track student performance and
                                make data-driven decisions for planning and evaluating learning.</p>
                        </div>
                    </div>

                    <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-500 text-white sm:shrink-0">
                            <!-- Heroicon name: outline/device-phone-mobile -->
                            <svg viewBox="-5.04 -5.04 34.08 34.08" id="_24x24_On_Light_Support"
                                data-name="24x24/On Light/Support" xmlns="http://www.w3.org/2000/svg" fill="#fffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect id="view-box" width="24" height="24" fill="none"></rect>
                                    <path id="Shape"
                                        d="M8,17.751a2.749,2.749,0,0,1,5.127-1.382C15.217,15.447,16,14,16,11.25v-3c0-3.992-2.251-6.75-5.75-6.75S4.5,4.259,4.5,8.25v3.5a.751.751,0,0,1-.75.75h-1A2.753,2.753,0,0,1,0,9.751v-1A2.754,2.754,0,0,1,2.75,6h.478c.757-3.571,3.348-6,7.022-6s6.264,2.429,7.021,6h.478a2.754,2.754,0,0,1,2.75,2.75v1a2.753,2.753,0,0,1-2.75,2.75H17.44A5.85,5.85,0,0,1,13.5,17.84,2.75,2.75,0,0,1,8,17.751Zm1.5,0a1.25,1.25,0,1,0,1.25-1.25A1.251,1.251,0,0,0,9.5,17.751Zm8-6.75h.249A1.251,1.251,0,0,0,19,9.751v-1A1.251,1.251,0,0,0,17.75,7.5H17.5Zm-16-2.25v1A1.251,1.251,0,0,0,2.75,11H3V7.5H2.75A1.251,1.251,0,0,0,1.5,8.751Z"
                                        transform="translate(1.75 2.25)" fill="white"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="sm:min-w-0 sm:flex-1">
                            <p class="text-lg font-semibold leading-8 text-gray-900">24/7 support from our team</p>
                            <p class="mt-2 text-base leading-7 text-gray-600">Our system offers 24/7 support from our
                                dedicated and experienced team, ensuring that you have access to assistance with any issues
                                or questions you may have at any time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 text-black">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-medium text-center text-gray-700  sm:text-xl">Got a technical issue? Want to send
                feedback about our feature? Need details about our feature? Let us know.</p>
            <form action="https://formsubmit.co/riegerlukas1945@gmail.com" method="POST" class="space-y-8">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                        email</label>
                    <input type="email" id="email" name="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 border-gray-600 placeholder-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                        placeholder="name@email.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 border-gray-600 placeholder-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your
                        message</label>
                    <textarea id="message" rows="6" name="message"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 border-gray-600 placeholder-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 bg-blue-500 hover:bg-primary-700 focus:ring-primary-800">Send
                    message</button>
            </form>
        </div>
    </section>
@endsection
