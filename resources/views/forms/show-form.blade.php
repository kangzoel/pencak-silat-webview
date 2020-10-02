<x-app>
    <div class="circle-bg"></div>

    <div class="container-fluid">
        @if ($form->description !== NULL)
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="single">
                        @foreach ($form->images as $image)
                            <div class="text-center">
                                <img src="{{ $image }}" alt="thumbnail">
                            </div>
                        @endforeach
                    </div>
                    <h1 class="h3 mt-4 font-weight-800">
                        {{ $form->name }}
                    </h1>
                    <p>
                    {{ $form->description }}
                    </p>
                </div>
            </div>
        @endif
        @if (count($form->childs) !== 0)
            <div class="row mt-2 pb-3 justify-content-center">
                <div class="col-10 mb-1">
                    <h2 class="h5">
                        Jenis-Jenis {{ $form->name }}
                    </h2>
                </div>
                <div class="col-10">
                    <div class="row d-flex align-items-end">
                        @foreach ($form->childs as $child)
                            <div class="col-4 text-center">
                                <a href="{{ route('forms.show', $child->id) }}" class="cover"></a>
                                <div class="d-inline-block">
                                    <img src="{{ $child->images[0] }}" alt="thumbnail">
                                    <h3 class="h6 text-center mt-2 default-text">{{ $child->name }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>

    <x-slot name="scripts">
        <script>
            $('.single').slick({
                infinite: false,
                prevArrow: '<i class="fas fa-2x fa-arrow-circle-left the-arrow"></i>',
                nextArrow: '<i class="fas fa-2x fa-arrow-circle-right the-arrow"></i>',
                swipe: false,
                swipeToSlide: false,
                touchMove: false,
                draggable: false,
            });
        </script>
    </x-slot>
</x-app>
