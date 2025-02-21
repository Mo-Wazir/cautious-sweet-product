<x-layout>

     <a href=" {{ route('products.index') }} "> Go to homepage </a>

    <h1>{{ $product->name }}</h1>

    <p>{{ $product->description}} </p>

    <p>{{ $product->size}} </p>

    <a href=" {{ route('products.edit', $product->id) }} "> Edit </a>

    <form method="post" action="{{ route('products.destroy', $product) }}">
        @csrf
        @method('DELETE')

        <button>Delete</button>
    </form>

</x-layout>
