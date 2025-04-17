<x-loginpage-layout>
    {{--section Home--}}
    <section>
        <div class="bg-black text-white py-4 rounded-b-xl">
            <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
                <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                    <h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose">Open Space</h1>
                    <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Where You Unleash Your Potential
                    </h2>
                    <p class="text-sm md:text-base text-gray-50 mb-4">Explore your favourite events and
                        Places Reserver maintenant</p>
                        @auth
                        <a href="/reservation"
                        class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                        Reserver</a>
                        @endauth
                        @guest
                            <a href="/login"
                        class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                        Reserver</a>
                        @endguest
                    
                </div>
                <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
                    <div class="h-48 flex flex-wrap content-center">
                        <div>

                            <div>
                                <img class="inline-block mt-24 md:mt-0 p-8 md:p-0 rounded-xl mx-w-12 "  src="{{ asset('build/assets/img1.jpeg') }}" alt="Logo_open-space.png"></div>
                            </div>
                        </div>
                    </div>
    </section>
    {{--section About--}}
    <section class="relative pt-16 bg-blueGray-50" id="about">
        <h1 class="text-4xl font-bold text-center mb-12 mt-4">ABOUT US</h1>
        <div class="container mx-auto">
          <div class="flex flex-wrap items-center">
            <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-2xl rounded-2xl bg-black">
                <img alt="..." src="{{ asset('build/assets/img1.jpeg') }}" class="rounded-t-2xl shadow-2xl">
                <blockquote class="relative p-8 mb-4">
                  <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block h-95-px -top-94-px">
                    <polygon points="-30,95 583,95 583,65" class="text-black fill-current"></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    Great for your awesome project
                  </h4>
                  <p class="text-md font-light mt-2 text-white">
                    Putting together a page has never been easier than matching
                    together pre-made components. From landing pages presentation
                    to login areas, you can easily customise and built your pages.
                  </p>
                </blockquote>
              </div>
            </div>
        
            <div class="w-full md:w-6/12 px-4">
              <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 px-4">
                  <div class="relative flex flex-col mt-4">
                    <div class="px-4 py-5 flex-auto">
                      <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                        <i class="fas fa-coffee"></i>
                      </div>
                      <h6 class="text-xl mb-1 font-semibold">Coffee Delights</h6>
                      <p class="mb-4 text-blueGray-500">
                        Experience the rich flavors and aromas of our specialty coffee blends. Our meticulously sourced beans and expert roasting techniques ensure a perfect cup every time.
                      </p>
                    </div>
                  </div>
                  <div class="relative flex flex-col min-w-0">
                    <div class="px-4 py-5 flex-auto">
                      <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                        <i class="fas fa-drafting-compass"></i>
                      </div>
                      <h6 class="text-xl mb-1 font-semibold">
                        JavaScript Components
                      </h6>
                      <p class="mb-4 text-blueGray-500">
                        We also feature many dynamic components for React, NextJS,
                        Vue and Angular.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 px-4">
                  <div class="relative flex flex-col min-w-0 mt-4">
                    <div class="px-4 py-5 flex-auto">
                      <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                        <i class="fas fa-print"></i>
                      </div>
                      <h6 class="text-xl mb-1 font-semibold">Pages</h6>
                      <p class="mb-4 text-blueGray-500">
                        This extension also comes with 3 sample pages. They are
                        fully coded so you can start working instantly.
                      </p>
                    </div>
                  </div>
                  <div class="relative flex flex-col min-w-0">
                    <div class="px-4 py-5 flex-auto">
                      <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                        <i class="fas fa-file-alt"></i>
                      </div>
                      <h6 class="text-xl mb-1 font-semibold">Documentation</h6>
                      <p class="mb-4 text-blueGray-500">
                        Built by developers for developers. You will love how easy
                        is to to work with Notus JS.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="relative bg-blueGray-50 pt-8 pb-6 mt-2">
          <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
              <div class="w-full md:w-6/12 px-4 mx-auto text-center">
              </div>
            </div>
          </div>
        </footer>
    </section>
    {{--Tables Reserver--}}
    <section class="py-8" id="tables">
        <h1 class="text-4xl font-bold text-center mb-8 mt-32">Table Booking</h1>
        <div class="container mx-auto"> 
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
              <!-- Table 1 -->
              <div class="bg-black p-4 text-white rounded-lg shadow-md transition-all duration-500 transform hover:scale-105">
                <img src="table1.jpg" alt="Table 1" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Table 1</h3>
                <p class="mb-2">Capacity: 4 people</p>
                <p class="mb-4">Location: Inside</p>
                <a href="/tables" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">Reserver</a>
              </div>
          
              <!-- Table 2 -->
              <div class="bg-black p-4 text-white rounded-lg shadow-md transition-all duration-500 transform hover:scale-105">
                <img src="table1.jpg" alt="Table 1" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Table 2</h3>
                <p class="mb-2">Capacity: 6 people</p>
                <p class="mb-4">Location: Outside</p>
                <a href="/tables" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">Reserver</a>
              </div>
          
              <!-- Table 3 -->
              <div class="bg-black p-4 text-white rounded-lg shadow-md transition-all duration-500 transform hover:scale-105">
                <img src="table1.jpg" alt="Table 1" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Table 3</h3>
                <p class="mb-2">Capacity: 3 people</p>
                <p class="mb-4">Location: Outside</p>
                <a href="/tables" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">Reserver</a>
              </div>
              <!-- Table 2 -->
              <div class="bg-black p-4 text-white rounded-lg shadow-md transition-all duration-500 transform hover:scale-105">
                <img src="table1.jpg" alt="Table 1" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Table 2</h3>
                <p class="mb-2">Capacity: 6 people</p>
                <p class="mb-4">Location: Outside</p>
                <a href="/tables" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">Reserver</a>
              </div>
            </div>
          </div> 
            <!-- Add more tables as needed -->
    </section>
{{--Contact--}}
      <section id="contact" > 
        <div class="flex items-center mt-32 justify-center min-h-screen bg-gray-200">
            <div class="w-full px-6 py-16 bg-white rounded-lg shadow-2xl lg:w-2/5">
                <h2 class="mb-4 text-xl antialiased font-semibold text-center text-gray-800">Send Us a Message</h2>
                <form class="mx-8 space-y-8">
                    <div>
                        <input type="text"
                            class="w-full p-2 text-sm border-b-2 border-gray-400 outline-none opacity-50 focus:border-blue-400"
                            placeholder="Full Name" />
                    </div>
                    <div>
                        <input type="text"
                            class="w-full p-2 text-sm border-b-2 border-gray-400 outline-none opacity-50 focus:border-blue-400"
                            placeholder="Your Email" />
                    </div>
                    <div>
                        <input type="text"
                            class="w-full p-2 text-sm border-b-2 border-gray-400 outline-none opacity-50 focus:border-blue-400"
                            placeholder="Subject" />
                    </div>
                    <div>
                        <textarea name="message"
                            class="w-full p-6 text-sm border-b-2 border-gray-400 rounded-lg outline-none opacity-50 focus:border-blue-400"
                            placeholder="Enter your message"></textarea>
                    </div>
        
                    <button class="block w-full px-2 py-4 mt-2 text-white bg-black rounded-full">Send
                        Message</button>
                </form>
            </div>
        </div>
    </section>
      
</x-loginpage-layout>