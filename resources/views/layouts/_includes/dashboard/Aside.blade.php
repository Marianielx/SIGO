<aside class="w-64 bg-gradient-to-b from-gray-900 to-gray-700 text-white shadow-xl flex flex-col">
      <div class="p-6 text-center border-b border-gray-600">
        <h1 class="text-2xl font-bold tracking-wide">Gestão Operativa</h1>
      </div>
      <nav class="flex-1 p-4 space-y-3">
        <button class="w-full text-left px-4 py-3 rounded-lg bg-gray-800 hover:bg-gray-600 transition font-medium" onclick="window.location.href='/admin/painel'">📊 Painel</button>
        <button class="w-full text-left px-4 py-3 rounded-lg bg-gray-800 hover:bg-gray-600 transition font-medium" onclick="window.location.href='/oficial-list'">👨‍✈️ Oficiais</button>
        <button class="w-full text-left px-4 py-3 rounded-lg bg-gray-800 hover:bg-gray-600 transition font-medium" onclick="window.location.href='/as-list'">🕵️ Agentes</button>
        <button class="w-full text-left px-4 py-3 rounded-lg bg-gray-800 hover:bg-gray-600 transition font-medium" onclick="window.location.href='/pc-list'">🤝 Pessoas de Confiança</button>
        <button class="w-full text-left px-4 py-3 rounded-lg bg-gray-800 hover:bg-gray-600 transition font-medium" onclick="showTab('casas')">🏠 Casas Secretas</button>
        <button class="w-full text-left px-4 py-3 rounded-lg bg-gray-800 hover:bg-gray-600 transition font-medium" onclick="showTab('verba')">💰 Verba Operativa</button>
      </nav>
      <div class="p-4 border-t border-gray-600 text-center text-sm">© {{ date('Y') }} SIGO</div>
    </aside>