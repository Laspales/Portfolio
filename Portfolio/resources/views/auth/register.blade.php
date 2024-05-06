<x-guest-layout>
    <div id="log2">
        <form method="POST" action="{{ route('register.store') }}">
         @csrf

        <!-- Fistname -->
            <label for="name" :value="__('Name')" style="font-size: 18px;">Name</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" 
                         name="name" :value="old('name')"
                         placeholder="Enter your name"
                         required autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />


        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" :value="__('Email')" style="font-size: 18px;">Email</label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" 
                          name="email" :value="old('email')" 
                          placeholder="Enter your email"
                          required autocomplete="username"/>

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="message" :value="__('Message')" style="font-size: 18px;">Message</label><br/>

            <textarea id="message" name="message"  placeholder="Write your message" style="max-height: 100px">
            </textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4" id="send">
                <!-- {{ __('Send') }} --> Send
            </x-primary-button>
        </div>
      </form>
    </div>
</x-guest-layout>
