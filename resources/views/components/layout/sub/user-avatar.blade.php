<div>
    <button type="button" class="flex items-center mx-3 text-sm rounded-full md:mr-0 " id="user-menu-button"
        aria-expanded="false" data-dropdown-toggle="dropdown">

        <span class="sr-only">Open user menu</span>

        <div class="relative overflow-hidden bg-gray-100 rounded-full ring-2 ring-gray-300 dark:bg-gray-600">
            <img class="w-9 h-9 p-0.5 rounded-full" src="/static/images/avatar.png" alt="Bordered avatar">
        </div>

        <i class="fa-solid fa-chevron-down fa-md ml-2 text-gray-400 dark:text-white"></i>
    </button>

    <!-- Dropdown menu -->
    <div class="hidden z-50 my-4 w-64 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
        id="dropdown">
        <div class="py-3 px-4 text-center">
            <span class="block text-md font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
            <span class="block text-sm text-gray-900 truncate dark:text-white">{{ Auth::user()->email }}</span>
        </div>
        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <li>
                <a href="{{ route('profile.show') }}"
                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <span class="flex items-center">
                        <i class="fa fa-user fa-lg mr-2 text-primary-600 dark:text-primary-500"></i>
                        {{ __('My Profile') }}
                    </span>
                    <i class="fa-solid fa-chevron-right fa-sm mx-2 text-gray-400"></i>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <span class="flex items-center">
                        <i class="fa-solid fa-gear  fa-lg mr-2 text-primary-600 dark:text-primary-500"></i>
                        {{ __('Settings') }}
                    </span>
                    <i class="fa-solid fa-chevron-right fa-sm mx-2 text-gray-400"></i>
                </a>
            </li>
        </ul>
        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <li>
                <form method="POST" action="{{ route('logout') }}" x-data
                    class="flex justify-between items-center text-sm dark:hover:text-white">
                    @csrf

                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                        class="flex items-center w-full py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <i
                            class="fa-solid fa-arrow-right-from-bracket fa-lg mr-2 text-primary-600 dark:text-primary-500"></i>

                        {{ __('Logout') }}
                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>
