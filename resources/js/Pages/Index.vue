<template>
  <div>
    <index-navbar />
    <section id="about"
      class="header relative pt-16 items-center flex h-screen max-h-860-px"
    >
      
    <div class="container mx-auto px-4 pt-30">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-5/12 ml-auto px-12 md:px-4 reveal">
            <div class="md:pr-14">
              <div
              class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white"
              >
                <img src="/img/lbry.svg" class="w-full h-auto">
              </div>
               <h2 class="font-semibold text-4xl">
                SOBRE MÍ
              </h2>
              <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                Desarrollador web con experiencia en el desarrollo y mantenimiento de aplicaciones en entornos reales.
              </p>
               <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                He trabajado con tecnologías como PHP, JavaScript y SQL, participando en resolución de incidencias, mejora de funcionalidades y soporte técnico.
              </p>
              <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                Actualmente enfocado en el desarrollo de aplicaciones SPA modernas con Vue.js.
              </p>
            </div>
          </div>

          <div class="w-full md:w-6/12 mr-auto px-4 pt-24 md:pt-0 reveal delay-200">
            <img
              alt="..."
              class="max-w-full rounded-lg shadow-xl"
              style="
                transform: scale(1) perspective(1040px) rotateY(-11deg)
                  rotateX(2deg) rotate(2deg); margin-left: 10%;
              "
              src="/img/Fabian.jpg"
            />
          </div>
        </div>
      </div>
    </section>

    <section id="projects" class="mt-48 md:mt-40 pb-40 relative bg-blueGray-100">
      
      <div
        class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20"
        style="transform: translateZ(0);"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-blueGray-100 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto">
        <div class="flex flex-wrap items-center">
          
           <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
            
            <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
              <img src="/img/openproject.svg" class="w-full h-auto">
            </div>
            <h3 class="text-3xl mb-2 font-semibold leading-normal">
              PROYECTO SPA Portafolio Web
            </h3>
            <p
              class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600"
            >
              Aplicación web desarrollada para mostrar mi perfil profesional y proyectos.
            </p>
            <br>
            <a href="" class="github-star ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150" target="_blank"> Ver proyecto </a>
          </div>
          <div class="w-full md:w-5/12 px-4 mr-auto ml-auto mt-32">
            <div
              class="relative flex flex-col min-w-0 w-full mb-6 mt-48 md:mt-0"
            >
              <img alt="..." src="/build/assets/profile-6zoiRWAE.jpg" class="w-full align-middle rounded absolute shadow-lg max-w-100-px left-145-px -top-29-px z-3">
              <img alt="..." src="/build/assets/component-info-2-CzPaH5LV.png" class="w-full align-middle rounded-lg absolute shadow-2xl max-w-200-px -left-50-px top-25-px">
              <img alt="..." src="/build/assets/component-menu-DbFVwBH_.png" class="w-full align-middle rounded absolute shadow-lg max-w-580-px -left-20-px top-210-px">
              <img alt="..." src="/build/assets/component-btn-pink-6HjkwmMw.png" class="w-full align-middle rounded absolute shadow-xl max-w-120-px left-195-px top-95-px">
            </div>
          </div>
        </div>
      </div>

    </section>

    <section id="technologies">
      <div class="container mx-auto overflow-hidden pb-20">
        <div class="flex flex-wrap items-center">
          <div class="w-full md:w-6/12 px-4 mr-auto ml-auto mt-32">
            <div class="justify-center flex flex-wrap relative">
              <div class="my-4 w-full lg:w-6/12 px-4">
                <a
                  
                  target="_blank"
                >
                  <div class="bg-blue-600 shadow-lg rounded-lg text-center p-8">
                    <img
                      alt="..."
                      class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                      src="/img/php.jpg"
                    />
                    <p class="text-lg text-white mt-4 font-semibold">
                      PHP
                    </p>
                  </div>
                </a>
                <a
                  
                  target="_blank"
                >
                  <div
                    class="bg-lightBlue-500 shadow-lg rounded-lg text-center p-8 mt-8"
                  >
                    <img
                      alt="..."
                      class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                      src="/img/css.jpg"
                    />
                    <p class="text-lg text-white mt-4 font-semibold">
                      CSS
                    </p>
                  </div>
                </a>
                <a
                  
                  target="_blank"
                >
                  <div
                    class="bg-orange-500 shadow-lg rounded-lg text-center p-8 mt-8"
                  >
                    <img
                      alt="..."
                      class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                      src="/img/html.jpg"
                    />
                    <p class="text-lg text-white mt-4 font-semibold">
                      HTML
                    </p>
                  </div>
                </a>
                <a
                  
                  target="_blank"
                >
                  <div
                    class="bg-grey-700 shadow-lg rounded-lg text-center p-8 mt-8"
                  >
                    <img
                      alt="..."
                      class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                      src="/img/mysql.jpg"
                    />
                    <p class="text-lg text-white mt-4 font-semibold">
                      MYSQL
                    </p>
                  </div>
                </a>
              </div>
              <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
                <a
                  
                  target="_blank"
                >
                  <div
                    class="bg-yellow-500 shadow-lg rounded-lg text-center p-8"
                  >
                    <img
                      alt="..."
                      class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                      src="/img/js.jpg"
                    />
                    <p class="text-lg text-white mt-4 font-semibold">
                      JavaScript
                    </p>
                  </div>
                </a>
                <a
                  
                  target="_blank"
                >
                  <div
                    class="bg-orange-700 shadow-lg rounded-lg text-center p-8 mt-8"
                  >
                    <img
                      alt="..."
                      class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                      src="/img/laravel.jpg"
                    />
                    <p class="text-lg text-white mt-4 font-semibold">
                      Laravel
                    </p>
                  </div>
                </a>
                <a
                 
                  target="_blank"
                >
                  <div
                    class="bg-emerald-500 shadow-lg rounded-lg text-center p-8 mt-8"
                  >
                    <img
                      alt="..."
                      class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                     src="/img/vue.jpg"
                    />
                    <p class="text-lg text-white mt-4 font-semibold">
                      Vue.js
                    </p>
                  </div>
                </a>
                
              </div>
            </div>
          </div>

          <div class="w-full md:w-4/12 px-12 ml-auto mr-auto">
            <div
              class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white"
            >
              <img src="/img/components.svg" class="w-full h-auto">

            </div>
            <h3 class="text-3xl mb-2 font-semibold leading-normal">
              Componentes del proyecto
            </h3>
            <p
              class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600"
            >
             Para crear una gran experiencia se requiere de un front-end robusto que se integre correctamente con el backend. De esta forma se pueden manipular elementos de la web y dar más opciones a los usuarios.
            </p>
            <p
              class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600"
            >Para la elaboración de esta web SPA,  me ha ayudado un conjunto de componentes dinámicos preconstruidos y adaptados.
            </p>
            <div class="block pb-6">
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Alerts
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Dropdowns
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Menus
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Modals
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Navbars
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Popovers
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Tabs
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2"
              >
                Tooltips
              </span>
            </div>
            <a
              href="https://www.creative-tim.com/learning-lab/tailwind/vue/overview/notus"
              target="_blank"
              class="font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150"
            >
              Ver todo
              <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="py-20 bg-blueGray-600 overflow-hidden">
      <div class="container mx-auto ">
        <div class="flex flex-wrap justify-center">
          <div class="w-full md:w-5/12 px-12 md:px-4 ml-auto mr-auto">
            <div
              class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white"
            >
              <img src="/img/gotomeeting.svg" class="w-full h-auto">
            </div>
            <h3 class="text-3xl mb-2 font-semibold leading-normal text-white">
              CONTACTO
            </h3>
            <p
              class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-400"
            >
              Email: fabianalbamanzano14@gmail.com
            </p>
            <p
              class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-400"
            >
            Ubicación: Murcia 
            </p>
            <a
              href="https://www.linkedin.com/in/fabian-alba-developer/"
              target="_blank"
              class="github-star mt-4 inline-block text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
            >
              LinkedIn
            </a>
          </div>

          <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-32 relative">
            <i
              class="fab fa-github text-blueGray-700 text-55 absolute -top-150-px -right-100 left-auto opacity-80"
            ></i>
          </div>
        </div>
      </div>
    </section>

    <section class="pb-1 bg-blueGray-200 relative pt-1">
      <div
        class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20"
        style="transform: translateZ(0);"
      >
      
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-blueGray-200 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
        
      </div>
      <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-blueGray-500 font-semibold py-1">
              Desarrollado por Fabian Alba Manzano © {{ date }}.
            </div>
          </div>
      </div>
    </section>
    
    <footer-component />
  </div>
</template>
<script>
import IndexNavbar from "../Components/Navbars/IndexNavbar.vue";

import login from "@/assets/img/login.jpg";
import profile from "@/assets/img/profile.jpg";
import landing from "@/assets/img/landing.jpg";

export default {
  data() {
    return {
      login,
      profile,
      landing,
      date: new Date().getFullYear(),
    };
  },
  components: {
    IndexNavbar,
    //FooterComponent,
  },
};

</script>
