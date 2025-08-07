<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="space-y-4">

                        <x-card title="Project Details">
                            <p>This card contains detailed information about a project. You can collapse it to save space on the screen.</p>
                            <ul class="list-disc ml-6 mt-2">
                                <li>Task 1: Complete UI design</li>
                                <li>Task 2: Implement API endpoints</li>
                                <li>Task 3: Deploy to production</li>
                            </ul>
                        </x-card>

                        <x-card title="Team Members" :isOpen="true">
                            <p>Here are the list of team members working on this project:</p>
                            <ul class="list-disc ml-6 mt-2">
                                <li>John Doe - Lead Developer</li>
                                <li>Jane Smith - UI/UX Designer</li>
                                <li>Peter Jones - QA Engineer</li>
                            </ul>
                        </x-card>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>