<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            {{-- <div class="flex items-center">
                <!-- Other nav links -->
                
                <!-- ADD Logout Button here -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="ml-4 text-sm text-gray-700 dark:text-gray-300 hover:underline">
                        Logout
                    </button>
                </form>
        </div> --}}

        <nav class="bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between">
                    <div>
                        <!-- Logo / Links -->
                    </div>
        
                    <div class="flex items-center">
                        <!-- Other nav links -->
                        
                        <!-- ADD Logout Button here -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="ml-4 text-sm text-gray-700 dark:text-gray-300 hover:underline">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        
    </div>
</x-app-layout>
