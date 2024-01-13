<nav class="bg-purple-900 p-4">
       <div class="container mx-auto flex justify-between items-center">
           <a href="index.php" class="text-white text-lg font-bold">NSC</a>
           <button class="lg:hidden text-white focus:outline-none">
               <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M4 6h16M4 12h16m-7 6h7"></path>
               </svg>
           </button>
           <div class="hidden lg:flex space-x-4">
               <a href="index.php" class="text-white">HOME</a>
               <a href="productread.php" class="text-white">PRODUCT</a>
               <div class="relative">
                   <div class="dropdown">
                       <button class="dropbtn hover:bg-blue-600 text-white">Categories
                           <i class="fa fa-caret-down"></i>
                       </button>
                       <div class="dropdown-content hidden bg-white border shadow-lg min-w-40 absolute z-50">
                           <a href="glass.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Glasswares</a>
                           <a href="scale.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Balance/Scale</a>
                           <a href="chemical.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Chemical</a>
                       </div>
                   </div>
               </div>
               <a href="#" class="text-white">ABOUT US</a>
               <a href="adminlogin.php" class="text-white">Admin</a>
               <a href="#" class="text-white">Signup/Login</a>
           </div>

           <!-- Add mobile menu with Tailwind CSS classes -->
           <div class="lg:hidden">
               <div class="flex space-x-4">
                   <a href="index.php" class="text-white">HOME</a>
                   <a href="productread.php" class="text-white">PRODUCT</a>
                   <div class="relative">
                       <div class="dropdown">
                           <button class="dropbtn hover:bg-blue-600 text-white">Categories
                               <i class="fa fa-caret-down"></i>
                           </button>
                           <div class="dropdown-content hidden bg-white border shadow-lg min-w-40 absolute z-50">
                               <a href="glass.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Glasswares</a>
                               <a href="scale.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Balance/Scale</a>
                               <a href="chemical.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Chemical</a>
                           </div>
                       </div>
                   </div>
                   <a href="#" class="text-white">ABOUT US</a>
                   <a href="adminlogin.php" class="text-white">Admin</a>
                   <a href="#" class="text-white">Signup/Login</a>
               </div>
           </div>
       </div>
   </nav>

   <marquee scrollamount="5" onMouseOver="this.stop()" onMouseOut="this.start()">
       "We provide all kinds of Scientific & Surgical Instruments, Laboratory Chemicals, Glasswares,Pharmaceutical Raw Materials, etc.
       For any kind of query Contact us.
       Our contact number is 01766426553 & 01815491313, and the email is newtonscientific@yahoo.com"
   </marquee>

   <script>
       // JavaScript to toggle visibility of the dropdown content
       document.addEventListener('DOMContentLoaded', function () {
           var dropdownBtn = document.querySelector('.dropbtn');
           var dropdownContent = document.querySelector('.dropdown-content');

           dropdownBtn.addEventListener('mouseover', function () {
               dropdownContent.classList.remove('hidden');
           });

           dropdownBtn.addEventListener('mouseout', function () {
               dropdownContent.classList.add('hidden');
           });

           dropdownContent.addEventListener('mouseover', function () {
               dropdownContent.classList.remove('hidden');
           });

           dropdownContent.addEventListener('mouseout', function () {
               dropdownContent.classList.add('hidden');
           });
       });
   </script>
