<header class="bg-[#19486A] sticky top-0 right-0 ">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="./index.php" class="-m-1.5 p-1.5">
                <img class="h-8" src="img/logos/P17_Logo_Kort_Wit_RGB.png" alt="Logo van plein17 en homeknop">
            </a>
            <div class="items-center justify-between hidden gap-12 ml-12 lg:flex">
                <a href="index.php" class="text-sm font-semibold text-slate-50 hover:bg-[#071E4B] p-2 rounded-md">Home</a>
                <a href="index.php?page=aboutus" class="text-sm font-semibold text-slate-50 hover:bg-[#071E4B] p-2 rounded-md">Over ons</a>
                <a href="index.php?page=predicaten" class="text-sm font-semibold text-slate-50 hover:bg-[#071E4B] p-2 rounded-md">Predicaten</a>
                <a href="index.php?page=workshops" class="text-sm font-semibold text-slate-50 hover:bg-[#071E4B] p-2 rounded-md">Workshops</a>
                <a href="index.php?page=contact" class="text-sm font-semibold text-slate-50 hover:bg-[#071E4B] p-2 rounded-md">Contact</a>
            </div>
        </div>
        <?php if (isset($_SESSION['user'])) : ?>
            <div class="hidden lg:flex lg:flex-0 lg:justify-end">
                <p class="text-white">Welkom gebruiker</p>
            </div>
        <?php else : ?>
            <div class="hidden lg:flex lg:flex-0 lg:justify-end">
                <a id="winkelmand" href="index.php?page=login"
                    class="text-sm font-semibold text-slate-50">log in<i class="ml-2 text-2xl fa-solid fa-user"></i></a>
            </div>
        <?php endif; ?>
        <div class="flex lg:hidden">
            <button type="button" id="open-menu-button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-50">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </nav>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed z-10"></div>
        <div class="absolute top-0 right-0 w-full z-10 px-6 py-6 bg-[#19486A]">
            <div class="flex items-center justify-between">
                <a href="index.php" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8" src="img/logos/P17_Logo_Kort_Wit_RGB.png" alt="Logo van plein17 en homeknop">
                </a>
                <button type="button" id="close-menu-button" class="-m-2.5 rounded-md p-2.5 text-slate-50">
                    <span class="sr-only">Close button</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flow-root mt-6">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="py-6 space-y-2">
                        <div class="flex items-center justify-between">
                            <a href="index.php"
                                class="px-3 py-2 -mx-3 text-base font-semibold leading-7 rounded-lg text-slate-50 hover:bg-[#071E4B]">Home</a>
                            <?php if (isset($_SESSION['user'])) : ?>
                                <p class="text-white">Welkom gebruiker</p>
                            <?php else : ?>
                                <a id="winkelmand" href="index.php?page=login"
                                    class="px-3 py-2 -mx-3 text-base font-semibold leading-7 rounded-lg text-slate-50 hover:bg-[#071E4B]">Log in<i class="ml-2 text-2xl fa-solid fa-user"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="py-6">
                        <a href="index.php?page=aboutus"
                            class="-mx-3 rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-slate-50 hover:bg-[#071E4B]">Over ons
                        </a>
                    </div>
                    <div class="py-6">
                        <a href="index.php?page=predicaten"
                            class="-mx-3 rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-slate-50 hover:bg-[#071E4B]">Predicaten
                        </a>
                    </div>
                    <div class="py-6">
                        <a href="index.php?page=workshops"
                            class="-mx-3 rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-slate-50 hover:bg-[#071E4B]">Workshops
                        </a>
                    </div>
                    <div class="py-6">
                        <a href="index.php?page=contact"
                            class="-mx-3 rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-slate-50 hover:bg-[#071E4B]">Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>