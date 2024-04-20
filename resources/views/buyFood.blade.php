<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($foods as $food)
                            <div class="col">
                                <div class="card h-100">
                                    <img src="{{ asset('storage/' . $food->photo) }}" class="card-img-top" alt="{{ $food->name }}">
                                    <div class="card-body">
                                        <h5>{{ $food->name }}</h5>
                                        <p class="card-text">{{ $food->description }}</p>
                                        <p class="card-text">Category: {{ $food->category }}</p>
                                        <p class="card-text">Quantity: {{ $food->quantity }}</p>
                                        <p class="card-text">Price: {{ $food->price }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                    <!-- Add more fields as needed -->
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>