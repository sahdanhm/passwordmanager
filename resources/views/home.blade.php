<x-container>
    <div x-data="{ isOpen: false, generated: false }">
        <div class="flex flex-col items-center">
            <h1 class="text-center text-xl font-bold mt-32 mb-10 break-all w-80" style="height: 30vh" id="pass-output">Your
                password will be here!!</h1>
            <div class="flex flex-col">
                <x-form.input type="number" label="Character length" id="length" name="length" value="20"
                    placeholder="" />
               
                <div class="flex gap-5 mt-5">
                    <button class="btn-primary" @click="isOpen = !isOpen" onclick="save()"
                        x-bind:disabled="!generated">Save</button>
                    <button class="btn-primary w-40 shadow-2xl" onclick="generatePassword()"
                        @click="generated = true">Generate</button>
                    <button class="btn-primary" onclick="copy()">Copy</button>
                </div>
            </div>
        </div>

        <x-modal>
            <x-slot:iconbgcolor>bg-blue-100</x-slot:iconbgcolor>
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                </svg></x-slot:icon>
            <x-slot:header>Save Password</x-slot:header>
                <x-form.input type="text" label="Name" id="name" name="name" value=""
                    placeholder="" />
                <x-form.input type="text" label="Password" id="password" name="password" value=""
                    placeholder="" />
                <x-form.input type="text" label="Link" id="link" name="link" value=""
                    placeholder="(Optional)" />
        </x-modal>
    </div>
    <script src="{{ URL::asset('js/password-generator.js') }}"></script>
    <script>
        function save() {
            var password = document.getElementById('pass-output').textContent;
            document.getElementById('password').value = password;
        }
    </script>
</x-container>
