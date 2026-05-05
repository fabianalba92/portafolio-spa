<template>
  <nav
    class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white shadow"
  >
    <div
      class="container px-4 mx-auto flex flex-wrap items-center justify-between"
    >
      <div
        class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
      >
        
        
        <button id="burguer"
          class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button"
          v-on:click="setNavbarOpen"
        >
          <img src="/img/menuburger.svg" class="burguer" alt="menu">
        </button>
      </div>
        <div
          class="navbar-menu lg:flex flex-grow"
          :class="['navbar-menu', navbarOpen ? 'open' : '']"
          id="example-navbar-warning"
        >
        <ul class="flex flex-col lg:flex-row list-none mr-auto ">
          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              href="#about"
              @click.prevent="scrollToSection('about')"
            >
              <i
                class="far fa-file-alt text-lg leading-lg mr-2"
              />
              Inicio
            </a>
            
          </li>
          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              href="#projects"
              @click.prevent="scrollToSection('projects')"
            >
              <i
                class="far fa-file-alt text-lg leading-lg mr-2"
              />
              Proyectos
            </a>
            
          </li>
          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              href="#technologies"
              @click.prevent="scrollToSection('technologies')"
            >
              <i
                class="far fa-file-alt text-lg leading-lg mr-2"
              />
              Tecnologías
            </a>
            
          </li>
          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              href="#contact"
              @click.prevent="scrollToSection('contact')"
            >
              <i
                class="far fa-file-alt text-lg leading-lg mr-2"
              />
              Contacto
            </a>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import IndexDropdown from "../../Components/Dropdowns/IndexDropdown.vue";

export default {
  data() {
    return {
      navbarOpen: false,
    };
  },
  mounted() {
  window.addEventListener('resize', this.handleResize);
  document.addEventListener('click', this.handleClickOutside);
  },
  beforeUnmount() {
    window.removeEventListener('resize', this.handleResize);
    document.removeEventListener('click', this.handleClickOutside);
  },
  methods: {
    handleClickOutside(e) {
      if (!this.$el.contains(e.target)) {
        this.navbarOpen = false;
      }
    },
    setNavbarOpen: function () {
      this.navbarOpen = !this.navbarOpen;
    },
    handleResize() {
      if (window.innerWidth >= 1024) {
        this.navbarOpen = false;
      }
    },
    scrollToSection(id) {
      const el = document.getElementById(id);

      if (el) {
        el.scrollIntoView({ behavior: 'smooth' });
        history.replaceState(null, null, ' ');
        this.navbarOpen = false; // 🔥 mejora UX
      }
    },
  },
  components: {
    IndexDropdown,
  },
};

</script>
