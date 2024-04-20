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
                    
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex;">
                    <div style="flex: 1; padding-right: 1rem;">
                        <!-- Other content goes here -->
                        <p class="lead">Stock</p>
                        <hr class="mb-4">
                        @foreach ($foods as $food)
                            <div class="card shadow" style="width: 100%;margin-bottom:10px">
                                <img src="{{ asset('storage/' . $food->photo) }}" class="card-img-top" alt="{{ $food->name }}">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $food->name }}</h5>
                                  <hr>
                                    <p class="card-text">{{ $food->description }}</p>
                                    <p class="card-text">Category: {{ $food->category }}</p>
                                    <p class="card-text">Quantity: {{ $food->quantity }}</p>
                                    <p class="card-text">Price: ₹{{ $food->price }}</p>
                                    <form action="{{ route('dashboard.destroyFood', $food->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div style="flex: 1; border-left: 2px solid #001; padding-left: 1rem;">
                        <!-- Other content goes here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
