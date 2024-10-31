<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 dark:text-gray-800 leading-tight">
            {{ __('Facultades y Carreras - Universidad del Quindío') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    
                    <table class="table-auto w-full" >
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Facultad</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Carreras</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center" rowspan="3">Facultad de Ingeniería</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Ingeniería de Sistemas y Computación</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Ingeniería Electrónica</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Ingeniería Civil</td>
            </tr>
            <tr >
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center" rowspan="3">Facultad de Ciencias de la Salud</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Medicina</td>
            </tr >
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Enfermería</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Laboratorio Clínico</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center" rowspan="3">Facultad de Ciencias Económicas y Administrativas</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Administración de Negocios</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Contaduría Pública</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Economía</td>
            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="{{ asset('css/alertify.min.css') }}">
<script src="{{ asset('js/alertify.min.js') }}"></script>
<script>
    // forma 1
    function confirmDelete(identificacion) {
        alertify.confirm("¿Confirmación Eliminación?",
        function(){
            let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/profesores/' + identificacion;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
            alertify.success('Ok');
        },
        function(){
            alertify.error('Cancel');
        });
    }

// forma 2
/* function confirmDelete(id) {
    alertify.confirm("¿Confirm delete record?", function (e) {
        if (e) {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/students/' + id;
            form.innerHTML = '@csrf @method("DELETE")';
            document.body.appendChild(form);
            form.submit();
        } else {
            alertify.error('Cancel');
            return false;
        }
    });
} */
</script>