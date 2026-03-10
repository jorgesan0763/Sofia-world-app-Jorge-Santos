<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofia World App</title>
    <!-- Bootstrap para que sea responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">🌍 Explorador de Ciudades del Mundo</h1>

    {{-- Selector de países --}}
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <label for="countrySelect" class="form-label fw-bold">Selecciona un país:</label>
            <select id="countrySelect" class="form-select form-select-lg">
                <option value="">-- Selecciona un país --</option>
                @foreach($countries as $country)
                    <option value="{{ $country->Code }}">{{ $country->Name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- Resultados --}}
    <div id="results" class="d-none">

        <h2 class="text-center mb-4">Resultados para: <span id="countryName" class="text-primary"></span></h2>

        <div class="row">
            {{-- Top 10 mayor población --}}
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-success text-white fw-bold">
                        🏙️ Top 10 ciudades con Mayor Población
                    </div>
                    <ul class="list-group list-group-flush" id="topCities"></ul>
                </div>
            </div>

            {{-- Top 10 menor población --}}
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-warning fw-bold">
                        🏘️ Top 10 ciudades con Menor Población
                    </div>
                    <ul class="list-group list-group-flush" id="bottomCities"></ul>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    document.getElementById('countrySelect').addEventListener('change', function () {
        const countryCode = this.value;

        if (!countryCode) {
            document.getElementById('results').classList.add('d-none');
            return;
        }

        // Llamada AJAX al endpoint
        fetch(`/cities/${countryCode}`)
            .then(response => response.json())
            .then(data => {
                // Muestra el nombre del país
                document.getElementById('countryName').textContent = data.country;

                // Llena top ciudades mayor población
                const topList = document.getElementById('topCities');
                topList.innerHTML = '';
                data.topCities.forEach((city, index) => {
                    topList.innerHTML += `
                        <li class="list-group-item d-flex justify-content-between">
                            <span>${index + 1}. ${city.Name}</span>
                            <span class="badge bg-success rounded-pill">
                                ${city.Population.toLocaleString()} hab.
                            </span>
                        </li>`;
                });

                // Llena top ciudades menor población
                const bottomList = document.getElementById('bottomCities');
                bottomList.innerHTML = '';
                data.bottomCities.forEach((city, index) => {
                    bottomList.innerHTML += `
                        <li class="list-group-item d-flex justify-content-between">
                            <span>${index + 1}. ${city.Name}</span>
                            <span class="badge bg-warning text-dark rounded-pill">
                                ${city.Population.toLocaleString()} hab.
                            </span>
                        </li>`;
                });

                // Muestra la sección de resultados
                document.getElementById('results').classList.remove('d-none');
            });
    });
</script>

</body>
</html>