const setup = () => {
  const getTheme = () => {
      if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'))
      }
      return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
  }

  const setTheme = (value) => {
      window.localStorage.setItem('dark', value)
  }

  return {
      loading: true,
      isDark: getTheme(),
      toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
      },
      setLightTheme() {
          this.isDark = false
          setTheme(this.isDark)
      },
      setDarkTheme() {
          this.isDark = true
          setTheme(this.isDark)
      },
      watchScreen() {
          if (window.innerWidth <= 768) {
              this.isSidebarOpen = false
              this.isUserPanelOpen = false
          } else if (window.innerWidth >= 768 && window.innerWidth < 1280) {
              this.isSidebarOpen = true
              this.isUserPanelOpen = false
          } else if (window.innerWidth >= 1280) {
              this.isSidebarOpen = true
              this.isUserPanelOpen = false
          }
      },
      isSidebarOpen: window.innerWidth >= 768 ? true : false,
      toggleSidbarMenu() {
          this.isSidebarOpen = !this.isSidebarOpen
      },
      isUserPanelOpen: window.innerWidth >= 320 ? false : true,
      openUserPanel() {
          this.isUserPanelOpen = true
          this.$nextTick(() => {
              this.$refs.userPanel.focus()
          })
      },
      isSettingsPanelOpen: false,
      openSettingsPanel() {
          this.isSettingsPanelOpen = true
          this.$nextTick(() => {
              this.$refs.settingsPanel.focus()
          })
      },
      isNotificationsPanelOpen: false,
      openNotificationsPanel() {
          this.isNotificationsPanelOpen = true
          this.$nextTick(() => {
              this.$refs.notificationsPanel.focus()
          })
      },
      isSearchPanelOpen: false,
      openSearchPanel() {
          this.isSearchPanelOpen = true
          this.$nextTick(() => {
              this.$refs.searchInput.focus()
          })
      },
  }
}
var sideBar = document.getElementById("mobile-nav");
var openSidebar = document.getElementById("openSideBar");
var closeSidebar = document.getElementById("closeSideBar");
sideBar.style.transform = "translateX(0px)";
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
$(function () {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

  $('.swalDefaultSuccess').click(function () {
    Toast.fire({
      icon: 'success',
      title: ' Debate registrado con éxito'
    })
  })
});

document.getElementById("file").onchange = function (e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function () {
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

function effectLike() {
  let like = document.getElementById("like");
  let likebtn = document.getElementById("like-btn");
  let clicked = false;

  likebtn.addEventListener("click", () => {
    if (!clicked) {
      clicked = true;
      $("#like").addClass("fa-solid fa-handshake-simple fa-bounce");
      $("#like").prop("fa-solid fa-handshake-simple fa-bounce", true);
      setTimeout(function activeLike() {
        $("#like").removeClass("fa-solid fa-handshake-simple fa-bounce");
        $("#like").prop("fa-solid fa-handshake-simple fa-bounce", false);
        $("#like").addClass("fa-solid fa-handshake-simple");
        like.style.color = '#10b981f';
      }, 100);
    } else {
      clicked = false;
      like.innerHTML = '<i class="fa-solid fa-handshake-simple ml-2 mt-4 cursor-pointer">'
      like.style.color = '#ffffff'
    }
  })
}

function VoiceAssistance() {
  var recognition = new webkitSpeechRecognition();
  recognition.continues = true;
  recognition.lang = "es-ES";
  recognition.interimResults = false;

  recognition.onresult = function (event) {
    console.log(event);
    if (event.results.length > 0) {
      q.value = event.results[0][0].transcript;
      console.log(q.value);
      switch (q.value) {
        case "Nuevo debate.":
          $("#btnModal").trigger("click");
          break;
        case "Nueva publicación.":
          alert("Publicaciòn");
          break;
        default:
          break;
      }
      //q.form.submit();
    }
  }
  recognition.start();
}

