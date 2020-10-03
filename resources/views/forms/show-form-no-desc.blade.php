<x-app>
    <x-slot name="styles">
        <style>
            body {
                background: #f2f2f2
            }
        </style>
    </x-slot>

    <div class="container-fluid">
        <div class="row mt-2">
            @foreach ($form->childs as $child)
                <div class="col-6 col-md-4 my-2 relative text-center">
                    <a href="{{ route('forms.show', $child->id) }}" class="cover"></a>
                    <div class="shadow-sm bg-white p-2">
                        <img src="{{ $child->images[0] }}" alt="thumbnail" class="home-thumbnail">
                        <h2 class="text-center h6 mt-2">{{ $child->name }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app>
