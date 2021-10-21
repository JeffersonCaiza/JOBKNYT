<template>
  <div>
    <h1 class="text-center">Bachilleres y Profesionales</h1>
    <div class="row" style="margin: 10px 0">
      <div style="display: flex; justify-content: flex-end" class=""></div>
    </div>

    <v-card>
      <v-card-title>
        <!-- Modal -->
        <div v-if="show" class="modal__backdrop">
          <div class="modal__backdrop" @click="closeModal()"></div>
          <div class="modal" :class="{ show: modal }">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">
                    {{ titleModal }}
                  </h3>
                  <button
                    @click="closeModal()"
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div>
                    <div class="row">
                      <label
                        for="NOMBRE"
                        class="col-md-4 col-form-label text-md-right"
                        >Nombre Completo</label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.NOMBRE"
                          type="text"
                          class="form-control"
                          id="NOMBRE"
                          placeholder="NOMBRE"
                        />
                       
                      </div>
                    </div>

                    

                    <!--<div class="row">
                      <label
                        for="DIRECCION"
                        class="col-md-4 col-form-label text-md-right"
                        >Direccion</label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.DIRECCION"
                          type="text"
                          class="form-control"
                          id="Descripcion Oferta"
                          placeholder="DIRECCION"
                        />
                        
                      </div>
                    </div>

                    <div class="row">
                      <label
                        for="TELEFONO"
                        class="col-md-4 col-form-label text-md-right"
                        >Telefono</label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.TELEFONO"
                          type="text"
                          class="form-control"
                          id="TELEFONO"
                          placeholder="TELEFONO"
                        />
                      </div>
                    </div>

                    <div class="row">
                      <label
                        for="ESTADO"
                        class="col-md-4 col-form-label text-md-right"
                        >Instruccion</label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.ESTADO"
                          type="text"
                          class="form-control"
                          id="ESTADO"
                          placeholder="INSTRUCCION"
                        />
                      </div>
                    </div>-->

                    <div class="row">
                      <label
                        for="email"
                        class="col-md-4 col-form-label text-md-right"
                        >Email</label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.email"
                          type="text"
                          class="form-control"
                          id="email"
                          placeholder="email"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button
                    @click="closeModal()"
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Cerrar
                  </button>
                  

                  <button
                    @click="eliminar()"
                    type="button"
                    class="btn btn-success btn-blue"
                    data-bs-dismiss="modal"
                  >
                    Eliminar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <v-spacer></v-spacer>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Buscar en Tabla"
          single-line
          hide-details
        ></v-text-field>
      </v-card-title>

      <v-data-table
        :headers="headers"
        :items="estudiantes"
        :search="search"
        :items-per-page="perPage"
      
        hide-default-footer
        class="elevation-1"
        loading
        loading-text="Cargando... Por favor espere"
        no-results-text="No se encontraron resultados"
        
      >
        <template v-slot:item.actions="{ item }">
          <v-btn
                        small
                        class="mr-2"
                        @click="update = true; openModal(item);"
                        style="background-color: #38c172"
                    >
                        <v-icon
                            small
                            color="#fff"
                        >
                            mdi-delete
                        </v-icon>
                    </v-btn>
        
        </template>
      </v-data-table>
    </v-card>
    <div class="text-center pt-2">
      <v-pagination
        v-model="page"
        :length="totalPages"
        total-visible="7"
        @input="handlePage"
      ></v-pagination>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      page: 1,
      search: "",
      cod: "",
      codBanco: "",
      headers: [
        { text: "Nombre", value: "NOMBRE" },
        //{ text: "Direccion", value: "DIRECCION" },
        //{ text: "Telefono", value: "TELEFONO" },
        //{ text: "Instruccion", value: "ESTADO" },
        { text: "Email", value: "email" },
        { text: "Opciones", value: "actions" },
      ],

      estudiante: {
        NOMBRE: "",
        APELLIDO: "",
        DIRECCION: "",
        TELEFONO: "",
        ESTADO: "",
        email: "",
      },
      id: 0,
      update: true,
      borrar: true,
      modal: 0,
      titleModal: " ",
      estudiantes: [],
      totalPages: 0,
      perPage: 0,
      errores: {},
      show: false,
    };
  },

  mounted() {
    this.list();
  },
  methods: {
     list() {
      axios.get(`lista_noveles?page=${this.page}`).then((res) => {
        this.est = res.data;
        this.estudiantes = this.est.data;
        this.totalPages = this.est.meta.last_page;
        this.perPage = this.est.meta.per_page;
      });
    },
    

    async eliminar() {
        if (this.borrar) {
          const res = await axios.delete("usuarios/" + this.id, this.estudiante);
        }
        this.closeModal();
        this.list();
    },

    openModal(data = {}) {
      this.show = true;
      this.modal = 1;
      if (this.update) {
        (this.id = data.CODUSUARIO),
        (this.titleModal = "Eliminar Usuario");
        this.estudiante.NOMBRE = data.NOMBRE;
        this.estudiante.APELLIDO = data.APELLIDO;
        this.estudiante.DIRECCION = data.DIRECCION;
        this.estudiante.TELEFONO = data.TELEFONO;
        this.estudiante.ESTADO = data.ESTADO;
        this.estudiante.email = data.email;
      } else {
        this.titleModal = "Crear Estudiante";
        this.estudiante.NombreEmpresa = "";
        this.estudiante.TituloOferta = "";
        this.estudiante.DescripcionOferta = "";
        this.estudiante.LinkTest = "";
      }
    },

    closeModal() {
      this.modal = 0;
      this.errores = {};
      this.show = false;
    },

    cancelSearch() {
      this.list();
      this.cod = "";
    },

    handlePage(value) {
      this.page = value;
      this.list();
    },
  },

  created() {
    this.list();
  },
};
</script>

<style>
.show {
  display: list-item;
  opacity: 1;
  background: rgba(44, 38, 75 0.849);
}
</style>

<style lang="scss" scoped>
.alert {
  background-color: #4caf50;
  border: none;
}

.container {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.modal {
  overflow-x: hidden;
  overflow-y: auto;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 9;

  &__backdrop {
    background-color: rgba(0, 0, 0, 0.3);
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
  }

  &__dialog {
    background-color: #ffffff;
    position: absolute;
    max-width: 800px;
    min-width: 600px;
    margin: 50px auto;
    display: flex;
    flex-direction: column;
    border-radius: 5px;
    z-index: 2;
    @media screen and (max-width: 992px) {
      width: 90%;
    }
  }

  &__error {
    background-color: #ffffff;
    position: absolute;
    max-width: 400px;
    min-width: 200px;
    margin: 50px auto;
    display: flex;
    flex-direction: column;
    border-radius: 5px;
    z-index: 2;
    @media screen and (max-width: 992px) {
      width: 90%;
    }
  }

  &__close {
    width: 30px;
    height: 30px;
  }

  &__header {
    padding: 20px 20px 10px;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
  }

  &__body {
    padding: 10px 20px 10px;
    overflow: auto;
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}

.modal-content{
    width:120%;
     background: darkred;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.2s;
}

.fade-enter,
.fade-leave-to {
  opacity: 0;
}

.btn-blue {
  text-transform: capitalize;
  color: #fff;
  background-color: #2176bd !important;
  border-color: #1f6fb2;
  margin: 0 3px;
}

.btn-cancel {
  color: #fff;
  background-color: #e3342f !important;
  border-color: #6c757d;
}

.theme--light.v-card {
    color: rgba(0,0,0,.87);
    background: #FFAE00;
}

.theme--light.v-data-table {
    background-color:#00455E;
    color: rgb(0 0 6 / 104%);
}
</style>