<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pencak Silat</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}?version=2">
    {{ !empty($styles) ? $styles : '' }}
</head>
<body>
    <div class="loader">
        <div class="lds-ripple"><div></div><div></div></div>
    </div>

    <!-- Navbar -->
    <div class="my-navbar bg-danger text-white">
        @if (url()->current() === url('/'))
            <div class="p-3">
                <strong>
                    Macam-Macam Sikap
                </strong>
            </div>
        @else
            @php
                $prevUrl = NULL;
                $currentUrl = url()->current();
                $currentForm = \App\Models\Form::find(explode('forms/', $currentUrl)[1]);

                if ($currentForm->parent()->exists()) {
                    $prevUrl = route('forms.show', $currentForm->parent->id);
                } else {
                    $prevUrl = '/';
                }
            @endphp

            <a href="{{ $prevUrl }}" class="p-3 d-inline-block text-white">
                <i class="fas fa-arrow-left"></i>
                @if ($currentForm->description === NULL)
                    <div class="ml-2 d-inline-block">
                        <strong>
                            {{ $currentForm->name }}
                        </strong>
                    </div>
                @endif
            </a>
        @endif
    </div>

    {!! $slot !!}

    <script src="{{ mix('js/app.js') }}?version=2"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    {{ !empty($scripts) ? $scripts : '' }}
</body>
</html>
