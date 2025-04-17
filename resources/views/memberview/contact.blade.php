<x-loginpage-layout>
    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
    <div class="flex justify-center items-center w-100 h-auto bg-white">
        <!-- COMPONENT CODE -->
        <div class="container mx-auto my-4 px-4">

            <div class="w-full p-4 my-4 md:px-8 lg:w-9/12 lg:pl-16 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                <div class="flex">
                    <h1 class="font-bold uppercase text-5xl">Send us a <br /> message</h1>
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="First Name*" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Last Name*" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Email*" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" placeholder="Phone*" />
                </div>
                <div class="my-4">
                    <textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="my-2 w-1/2 lg:w-1/4">
                    <button type="submit" class="hidden lg:inline-block py-2 px-8 bg-yellow-300 text-black hover:bg-gray-600 hover:text-white text-sm font-bold rounded-xl transition duration-200">
                        Envoyer Message
                    </button>
                </div>
            </div>

            <div class="w-full lg:-mt-96 lg:w-2/6 px-4 py-12 ml-auto bg-black rounded-2xl">
                <div class="flex flex-col text-white">
                    <h1 class="font-bold uppercase text-4xl my-4">
                        PASSEZ À NOTRE BUREAU</h1>
                    <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt arcu diam, eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.</p>

                    <div class="flex my-4 w-2/3 lg:w-1/2">
                        <div class="flex flex-col">
                            <i class="fas fa-map-marker-alt pt-2 pr-2"></i>
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-2xl">Bureau principal</h2>
                            <p class="text-gray-400">
                                Open Space Setaprint
                                X9VH+78H, Settat</p>
                        </div>
                    </div>

                    <div class="flex my-4 w-2/3 lg:w-1/2">
                        <div class="flex flex-col">
                            <i class="fas fa-phone-alt pt-2 pr-2"></i>
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-2xl">Appelez-nous</h2>
                            <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
                            <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
                        </div>
                    </div>

                    <div class="flex my-4 w-2/3 lg:w-1/2">
                        <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                            <i class="fab fa-facebook-f text-blue-900"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                            <i class="fab fa-instagram text-blue-900"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <!-- COMPONENT CODE -->
    </div>
</x-loginpage-layout>
