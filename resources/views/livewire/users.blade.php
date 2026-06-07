<div class="w-1/2 m-auto my-10">

    <div class="py-2">
        <div class="sm:mx-auto">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create new user</h2>
        </div>
        {{-- Success Messege --}}
        @if (session('success'))
            <div class="p-4 mb-4 mt-6 text-sm text-green-800 rounded-base bg-green-50" role="alert">
                <span class="font-medium">{{ session('success') }}
            </div>
        @endif

        <div class="mt-4 sm:mx-auto">
            <form wire:submit="createNewUser" action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Username</label>
                    <div class="mt-2">
                        <input wire:model="name" id="name" type="name" name="name"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('name')
                            <p class="mt-2.5 text-xs text-red-600"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input wire:model="email" id="email" type="email" name="email" autocomplete="email"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('name')
                            <p class="mt-2.5 text-xs text-red-600"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>

                    </div>
                    <div class="mt-2">
                        <input wire:model="password" id="password" type="password" name="password"
                            autocomplete="current-password"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('name')
                            <p class="mt-2.5 text-xs text-red-600"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="profile-picture" class="block text-sm/6 font-medium text-black">Profile Picture</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-black/25 px-6 py-6">
                        <div class="text-center">
                            <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true"
                                class="mx-auto size-12 text-gray-600">
                                <path
                                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                    clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm/6 text-gray-400">
                                <label for="avatar"
                                    class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-700 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-500 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input wire:model="avatar" id="avatar" type="file" name="avatar"
                                        class="sr-only" accept="image/png,image/jpg,image/jpeg" />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>

                            <p class="text-xs/5 text-gray-400">PNG, JPG, up to 5MB</p>
                        </div>
                    </div>
                    @error('name')
                        <p class="mt-2.5 text-xs text-red-600"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button wire:click.prevent="createNewUser" type="button"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create
                        account</button>
                </div>
            </form>


        </div>
    </div>



    <hr class="border-1 my-5">

    <h2 class="text-2xl font-semibold mb-2">Users List</h2>
    <ul class="list-disc">
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
