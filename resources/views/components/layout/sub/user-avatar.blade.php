<div>
    <button type="button" class="flex items-center mx-3 text-sm rounded-full md:mr-0 " id="user-menu-button"
        aria-expanded="false" data-dropdown-toggle="dropdown">

        <span class="sr-only">Open user menu</span>

        <div class="relative w-9 h-9 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 ring-2 ring-gray-300">
            <svg class="absolute w-11 h-11 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                </path>
            </svg>
        </div>

        <i class="fa-solid fa-chevron-down fa-md ml-2 text-gray-400 dark:text-white"></i>
    </button>

    <!-- Dropdown menu -->
    <div class="hidden z-50 my-4 w-64 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
        id="dropdown">
        <div class="py-3 px-4 text-center">
            <span class="block text-md font-semibold text-gray-900 dark:text-white">Bantayehu Fikadu</span>
            <span class="block text-sm text-gray-900 truncate dark:text-white">bantayehu@gmail.com</span>
        </div>
        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <li>
                <a href="#"
                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <span class="flex items-center">
                        <i class="fa-regular fa-user fa-lg mr-2 text-primary-600 dark:text-primary-500"></i>
                        My Profile
                    </span>
                    <i class="fa-solid fa-chevron-right fa-sm mx-2 text-gray-400"></i>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <span class="flex items-center">
                        <i class="fa-solid fa-gear  fa-lg mr-2 text-primary-600 dark:text-primary-500"></i>
                        Settings
                    </span>
                    <i class="fa-solid fa-chevron-right fa-sm mx-2 text-gray-400"></i>
                </a>
            </li>
        </ul>
        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <li>
                <a href="#"
                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <span class="flex items-center">
                        <i
                            class="fa-solid fa-arrow-right-from-bracket fa-lg mr-2 text-primary-600 dark:text-primary-500"></i>
                        Log out
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>