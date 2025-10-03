<!-- Footer -->
<!-- <footer class="bg-gray-200 text-gray-700 text-sm text-center py-4 mt-10 rounded-t-lg shadow-inner">
    <strong>SIGO</strong> - {{ date('Y') }} &copy; Todos Direitos Reservados | <a href="#"
                    target="_blank" class="text-dark-50 ank">Politícas de Privacidade & Termos de Uso</a>
</footer> -->
<!-- / Footer -->

@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('update'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Atulização realizada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@elseif(session('exists'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Registo Já Existe!',
            showConfirmButton: true
        })
        @elseif(session('exists')) <
            script >
            Swal.fire({
                icon: 'error',
                title: 'Registo Já Existe!',
                showConfirmButton: true
            })
    </script>
@elseif(session('catch'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erro:1364 - Suporte Técnico',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@endif

<script src="{{ asset('dashboard/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/js/menu.js') }}"></script>
<script src="/js/sweetalert2.all.min.js"></script>
<!-- Vendors JS -->
<script src="{{ asset('dashboard/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('dashboard/assets/js/main.js') }}"></script>

<script>
    function showTab(tabId) {
      document.querySelectorAll('main > section, #dashboard').forEach(el => el.classList.add('hidden'));
      document.getElementById(tabId).classList.remove('hidden');
    }

    // Gráfico de exemplo
    const ctx = document.getElementById('chartVerba').getContext('2d');
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Missões', 'Operações Especiais', 'Logística'],
        datasets: [{
          data: [45, 30, 25],
          backgroundColor: ['#2563eb', '#16a34a', '#9333ea'],
        }]
      },
      options: {
        plugins: {
          legend: {
            labels: {
              font: {
                size: 14,
                weight: 'bold'
              },
              color: '#374151'
            }
          }
        }
      }
    });
</script>

@yield('JS')

{{-- <script type="text/javascript" src="{{ asset('dashboard/assets/toastr/js/toastify.js') }}"></script> --}}

@if (session('create'))
    <script>
        Toastify({
            text: 'Salvo com sucesso!',
            duration: 5000,
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)"
            }
        }).showToast();
    </script>
@elseif (session('edit'))
    <script>
        Toastify({
            text: 'Editado com sucesso!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
@elseif (session('destroy'))
    <script>
        Toastify({
            info: 'Excluido com sucesso!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
@elseif (session('exist_email'))
    <script>
        Toastify({
            text: 'E-mail já existente!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
@elseif (session('exists'))
    <script>
        Toastify({
            text: 'Informação já existente!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
@endif