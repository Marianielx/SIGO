<!-- Navbar de Usuário -->
<header class="bg-white shadow-md px-6 py-4 flex items-center justify-between sticky top-0 z-10 mb-2">
  <!-- Logo ou título (opcional) -->
  <div class="text-xl font-semibold text-gray-800">
    SIGO
  </div>

  <!-- Informações do usuário -->
  <div class="flex items-center space-x-4">
    <span class="text-gray-700 font-medium hidden sm:inline">{{ Auth::user()->name }}</span>
    <img src="https://i.pravatar.cc/40" alt="Avatar do Usuário" class="w-10 h-10 rounded-full border-2 border-gray-300" />
    
    <!-- Botão de logout -->
    <button
      onclick="logout()"
      class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm transition">
     
      <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2 text-danger"></i>
                            <span class="align-middle text-danger">Sair</span>
                        </a>                        
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
      
    </button>
  </div>
</header>