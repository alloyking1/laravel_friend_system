<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Friends page
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-6 gap-6">
            <div class="col-span-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="space-y-3">
                            <h2 class="text-lg font-semibold">Friends</h2>
                        </div>
                        <div class="space-y-3">
                            <div class="flex item-center justify-between">
                                <a href="#"> Friend</a>
                                <div class="space-x-2">
                                    <button>Unfriend</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="space-y-3">
                            <h2 class="text-lg font-semibold">Friends</h2>
                        </div>
                        <div class="space-y-3">
                            <div class="flex item-center justify-between">
                                <a href="#"> Friend</a>
                                <div class="space-x-2">
                                    <button>Accept</button>
                                    <button>Reject</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="p-6 bg-white border-b border-gray-200 space-y-2">
                        <div class="space-y-3">
                            <h2 class="text-lg font-semibold">Pending friends request</h2>
                        </div>
                        <div class="space-y-3">
                            <div class="flex item-center justify-between">
                                <a href="#"> Friend</a>
                                <div class="space-x-2">
                                    <button>Accept</button>
                                    <button>Reject</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>