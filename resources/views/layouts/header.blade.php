<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">

    <a href="{{ route('main') }}"
       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2
       focus:rounded-sm focus:outline-red-500">Главная</a>

    @auth()

        <a href="{{ route('chats.index') }}"
           class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2
        focus:rounded-sm focus:outline-red-500">Чаты</a>

        <a href="{{ route('logout') }}"
        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2
        focus:rounded-sm focus:outline-red-500">Выйти</a>

    @endauth

    @guest()
    <a href="{{ route('login') }}"
       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2
       focus:rounded-sm focus:outline-red-500">Вход</a>

    <a href="{{ route('register') }}"
       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2
        focus:rounded-sm focus:outline-red-500">Регистрация</a>
    @endguest

</div>

