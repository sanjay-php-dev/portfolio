<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('About Yourself') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your job title and mention about it.') }}
        </p>
    </header>

    <form method="post" action="" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="job_title" type="text" class="mt-1 block w-full" />
            <!-- <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> -->
        </div>

        <div>
            <x-input-label for="description" :value="__('Details')" />
            <x-text-input type="text" name="details" class="mt-1 block w-full" rows="4" />
            <!-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> -->
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>

</div>
            </div>

            
</div>
            </div>

            
</x-app-layout>