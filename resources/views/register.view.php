<?php require_once "../controllers/register-controller.php"; ?>


<div class="bg-[url('../img/patroon1-small.png')] md:bg-[url('../img/patroon1.png')]" style="height: calc(100vh - 80px);">
    <div class="grid place-content-center" style="height: calc(100vh - 80px);">
        <div class="flex flex-col items-center justify-center max-w-7xl">
            <h1 class="text-5xl text-[#071E4B] mb-5">Registreren</h1>
            <div class="flex flex-col justify-center w-1/2">
                <form action="" method="post" class="w-full">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="border-2 border-[#071E4B] rounded-md p-1 w-full">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password" class="border-2 border-[#071E4B] rounded-md p-1 w-full">
                    <a href="?page=login" class="mt-2">Al een account? <span class="underline underline-offset-1">Log hier in.</span></a>
                    <?= $error ?>
                    <div class="flex items-center justify-end">
                        <button type="submit" name="register" class="bg-[#071E4B] text-white p-2 rounded-md mt-2 lg:w-1/3 md:w-1/3 sm:w-1/2">Registreer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>