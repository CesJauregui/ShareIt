<script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/adminlte.min.js') }}"></script>
  <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('js/demo.js') }}"></script>
  <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script>
        var sideBar = document.getElementById("mobile-nav");
        var openSidebar = document.getElementById("openSideBar");
        var closeSidebar = document.getElementById("closeSideBar");
        sideBar.style.transform = "translateX(-260px)";

        function sidebarHandler(flag) {
            if (flag) {
                sideBar.style.transform = "translateX(0px)";
                openSidebar.classList.add("hidden");
                closeSidebar.classList.remove("hidden");
            } else {
                sideBar.style.transform = "translateX(-260px)";
                closeSidebar.classList.add("hidden");
                openSidebar.classList.remove("hidden");
            }
        }
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: ' Debate registrado con éxito'
        })
      })
    });
    document.getElementById("file").onchange = function(e) {
      // Creamos el objeto de la clase FileReader
      let reader = new FileReader();

      // Leemos el archivo subido y se lo pasamos a nuestro fileReader
      reader.readAsDataURL(e.target.files[0]);

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function() {
        let preview = document.getElementById('preview'),
          image = document.createElement('img');
        image.src = reader.result;
        image.setAttribute('id', 'previewImg')
        image.style.width = '100px'
        image.style.display = 'none'
        preview.style.display = 'flex'
        preview.innerHTML = '';
        $("#btnEliminar").fadeIn();
        preview.append(image);
        $("#previewImg").fadeIn();
        //preview.innerHTML = btnEliminar2;
      };
    }

    function LimpiarImg() {
      $("#preview").text('');
      $("#file").val('');
      $("#btnEliminar").fadeOut();
    }
  </script>