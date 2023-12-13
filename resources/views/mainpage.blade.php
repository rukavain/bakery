<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }

        .hero {
            background-image: url()
        }
    </style>
</head>

<body>
    @include('nav')
    <section>
        <div class="" style="">
            <img class="bg-blend-darken" src="{{ asset('images/hero.jpg') }}" alt="asdas">
        </div>
    </section>
</body>

</html>
