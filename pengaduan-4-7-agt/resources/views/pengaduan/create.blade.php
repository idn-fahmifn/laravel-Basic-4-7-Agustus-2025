<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buat Laporan Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{route('store.pengaduan')}}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="judul_laporan" :value="__('Judul Laporan')" />
                            <x-text-input id="judul_laporan" name="judul_laporan" type="text"
                                class="mt-1 block w-full" :value="old('judul_laporan')" required autofocus
                                autocomplete="judul_laporan" />
                            <x-input-error class="mt-2" :messages="$errors->get('judul_laporan')" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="jenis_laporan" :value="__('Jenis Laporan')" />
                            <select name="jenis_laporan" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="kerusakan">Kerusakan</option>
                                <option value="kehilangan">Kehilangan</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_laporan')" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="dokumentasi" :value="__('Dokumentasi')" />
                            <x-text-input id="dokumentasi" name="dokumentasi" type="file"
                                class="mt-1 block w-full p-4" :value="old('dokumentasi')" required autofocus
                                autocomplete="dokumentasi" />
                            <x-input-error class="mt-2" :messages="$errors->get('dokumentasi')" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="isi_laporan" :value="__('Isi Laporan')" />
                            <textarea name="isi_laporan" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('isi_laporan')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
