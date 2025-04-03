<!-- <div class="-mt-1 bg-[url('/img/P17_MerkMiddelen_Patroon3_Donkerblauw_RGB.png')]"> -->
<div class="-mt-1 bg-[#58AAE0] h-max">
    <div class="max-w-7xl mx-auto min-h-full py-20">
        <div class="flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold text-slate-50">Heeft U nog vragen?</h1>
            <p class="text-center text-xl text-slate-50 mt-6">Wij staan altijd open om u te helpen.
                <br>Laat hieronder weten waarmee wij u van dienst kunnen zijn.
            </p>
        </div>
    </div>
</div>
<div class="max-w-5xl mx-auto">
    <div class="flex justify-center items-center my-10">
        <form class="bg-white p-6 rounded-lg w-full space-y-4">
            <h2 class="text-xl font-bold mb-4 text-center">Contact</h2>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label for="firstname" class="block text-sm font-medium">Voornaam</label>
                    <input
                        type="text" id="firstname" name="firstname"
                        class="mt-1 block w-full rounded-md shadow-lg border-solid border-gray-200 border" required />
                </div>
                <div>
                    <label for="lastname" class="block text-sm font-medium">Achternaam</label>
                    <input type="text" id="lastname" name="lastname"
                        class="mt-1 block w-full rounded-md shadow-lg border-solid border-gray-200 border" required />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 block w-full rounded-md shadow-lg border-solid border-gray-200 border" required />
                </div>
                <div>
                    <label for="company" class="block text-sm font-medium">Bedrijfsnaam</label>
                    <input type="text" id="company" name="company"
                        class="mt-1 block w-full rounded-md shadow-lg border-solid border-gray-200 border" />
                </div>
            </div>
            <div>
                <label for="message" class="block text-sm font-medium">Bericht</label>
                <textarea id="message" name="message" rows="4"
                    class="mt-1 block w-full rounded-md shadow-lg border-solid border-gray-200 border" required></textarea>
            </div>
            <div class="flex justify-end items-center">
                <div class="w-1/3">
                    <button type="submit" class="w-full bg-[#19486A] text-white py-2 px-4 rounded-md hover:bg-indigo-700">Verstuur</button>
                </div>
            </div>
        </form>
    </div>
</div>