<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Universidad del Quindío') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Universidad del Quindío</title>
        <style>
            .center-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            </style>
    </head>
    <body>
        <div class="center-content">
            <h1>Universidad del Quindío</h1>
            <img src="{{ asset('descarga.jpeg') }}" alt="univerdad del Quindío">
            <h3>Introducción</h3>
            <p>
                La Universidad del Quindío es una institución pública y
                departamental de educación superior en Colombia acreditada en
                alta
                calidad, sujeta a inspección y vigilancia por medio de la Ley
                1740
                de 2014 y la ley 30 de 1992 del Ministerio de Educación de
                Colombia.
                Su sede está ubicada en Armenia, la capital de Quindío. Fue
                inaugurada en 1962.
            </p>
            <h4>Historia</h4>
            <p>
                La Universidad del Quindío fue creada por el Concejo Municipal
                de
                Armenia, en 1960. En 1982, se convirtió en una institución de
                carácter departamental.

                Empezó a funcionar en 1962 con los programas de Agronomía y
                Topografía.

                Actualmente la Universidad del Quindío cuenta con siete
                facultades.
                En las modalidades presencial, distancia y virtual; con ellas la
                institución se convierte en un actor indispensable en el
                desarrollo
                del conocimiento científico y tecnológico del occidente del
                país.
            </p>

            <a href="{{ route('facultades.index') }}" class="bg-[#6A75ED] dark:bg-[#5B66D0] hover:bg-[#5B66D0] dark:hover:bg-[#4E57B0] text-black font-bold py-2 px-4 rounded border border-[#6A75ED] dark:border-[#5B66D0]">Facultades</a>
            <a href="{{ route('profesores.index') }}" class="bg-[#6A75ED] dark:bg-[#5B66D0] hover:bg-[#5B66D0] dark:hover:bg-[#4E57B0] text-black font-bold py-2 px-4 rounded border border-[#6A75ED] dark:border-[#5B66D0]" >Profesores</a>

        </div>
        
        


    </body>
            </div>
        </div>
    </div>
</x-app-layout>
