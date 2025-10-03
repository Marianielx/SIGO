@extends('layouts.merge.dashboard')

@section('content')
    
    <main class="flex-1 p-6 overflow-y-auto">
      
      @include('layouts._includes.dashboard.NavbarSimple')

      <div id="dashboard" class="space-y-6">

        <h2 class="text-3xl font-extrabold text-gray-900">📊 Painel de Controlo</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:scale-105 flex items-center justify-between">
            <div>
              <h3 class="text-lg font-semibold opacity-90">Oficiais Ativos</h3>
              <p class="text-4xl font-extrabold mt-2">{{ $official_count }}</p>
            </div>
            <div class="text-5xl">👨‍✈️</div>
          </div>
          <div class="bg-gradient-to-r from-green-500 to-green-700 text-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:scale-105 flex items-center justify-between">
            <div>
              <h3 class="text-lg font-semibold opacity-90">Agentes Secretos</h3>
              <p class="text-4xl font-extrabold mt-2">34</p>
            </div>
            <div class="text-5xl">🕵️</div>
          </div>
          <div class="bg-gradient-to-r from-purple-500 to-purple-700 text-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:scale-105 flex items-center justify-between">
            <div>
              <h3 class="text-lg font-semibold opacity-90">Casas Secretas</h3>
              <p class="text-4xl font-extrabold mt-2">8</p>
            </div>
            <div class="text-5xl">🏠</div>
          </div>
        </div>

        <!-- Gráfico -->
        <div class="bg-white p-6 rounded-2xl shadow-lg">
          <h3 class="text-xl font-bold text-gray-800 mb-4">Uso da Verba Operativa</h3>
          <canvas id="chartVerba"></canvas>
        </div>
        
      </div>

      <section id="agente" class="hidden">
        <h2 class="text-2xl font-bold mb-4 text-gray-900">🕵️ Gestão de Agentes Secretos</h2>
        <div class="bg-white p-6 rounded-lg shadow">Aqui ficará o registo e gestão de agentes.</div>
      </section>

      <section id="confiança" class="hidden">
        <h2 class="text-2xl font-bold mb-4 text-gray-900">🤝 Gestão de Pessoas de Confiança</h2>
        <div class="bg-white p-6 rounded-lg shadow">Aqui ficará o registo e gestão de pessoas de confiança.</div>
      </section>

      <section id="casas" class="hidden">
        <h2 class="text-2xl font-bold mb-4 text-gray-900">🏠 Gestão de Casas Secretas</h2>
        <div class="bg-white p-6 rounded-lg shadow">Aqui ficará o registo e gestão de casas secretas.</div>
      </section>

      <section id="verba" class="hidden">
        <h2 class="text-2xl font-bold mb-4 text-gray-900">💰 Gestão de Verba Operativa</h2>
        <div class="bg-white p-6 rounded-lg shadow">Aqui ficará o registo de verbas, solicitações e relatórios.</div>
      </section>

    </main>
    
@endsection
