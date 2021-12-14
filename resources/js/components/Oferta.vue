<template>
    <div>
        <h1 class="text-center"><strong>Lista de ofertas</strong></h1>
        <div class="row" style="margin: 10px 0">
            <div style="display: flex; justify-content: flex-end;" class="">
               
            </div>
        </div>

        <v-card>
            <v-card-title>

                <!-- Modal -->
                <div v-if="show" class="modal__backdrop">
                    <div class="modal__backdrop" @click="closeModal()"></div>
                    <div class="modal" :class="{show:modal}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">{{ titleModal }}</h3>
                                    <button @click="closeModal();" type="button" class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                  <div>
                    <!--<div class="row">
                      <label
                        for="Nombre Empresa"
                        class="col-md-4 col-form-label text-md-right"
                        ><strong>Empresa</strong></label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.NombreEmpresa"
                          type="text"
                          class="form-control"
                          id="Nombre Empresa"
                          placeholder="Nombre Empresa"
                        />
                        <span
                          class="text-danger"
                          v-if="errores.NombreEmpresa"
                          >{{ errores.NombreEmpresa[0] }}</span
                        >
                      </div>
                    </div>-->


                    <div class="row">
                      <label
                        for="Titulo Oferta"
                        class="col-md-4 col-form-label text-md-right"
                        ><strong>Empresa y Titulo de Oferta</strong></label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.TituloOferta"
                          type="text"
                          class="form-control"
                          id="Titulo Oferta"
                          placeholder="Empresa y Titulo de Oferta"
                        />
                        <span class="text-danger" v-if="errores.TituloOferta">{{
                          errores.TituloOferta[0]
                        }}</span>
                      </div>
                    </div>

                    

                    <div class="row">
                      <label
                        for="Disponibilidad"
                        class="col-md-4 col-form-label text-md-right"
                        ><strong>Disponibilidad</strong></label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.Disponibilidad"
                          type="text"
                          class="form-control"
                          id="Disponibilidad"
                          placeholder="Disponibilidad"
                        />
                        <span
                          class="text-danger"
                          v-if="errores.Disponibilidad"
                          >{{ errores.Disponibilidad[0] }}</span
                        >
                      </div>
                    </div>

                    <div class="row">
                      <label
                        for="EducacionMinima"
                        class="col-md-4 col-form-label text-md-right"
                        ><strong>Educacion</strong></label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.EducacionMinima"
                          type="text"
                          class="form-control"
                          id="EducacionMinima"
                          placeholder="Educacion Minima"
                        />
                        <span
                          class="text-danger"
                          v-if="errores.EducacionMinima"
                          >{{ errores.EducacionMinima[0] }}</span
                        >
                      </div>
                    </div>

                    <div class="row">
                      <label
                        for="Edad"
                        class="col-md-4 col-form-label text-md-right"
                        ><strong>Edad</strong></label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.Edad"
                          type="text"
                          class="form-control"
                          id="	Edad"
                          placeholder="Edad"
                        />
                        <span class="text-danger" v-if="errores.Edad">{{
                          errores.Edad[0]
                        }}</span>
                      </div>
                    </div>

                    <div class="row">
                      <label
                        for="FechaPubicacion"
                        class="col-md-4 col-form-label text-md-right"
                        ><strong>Fecha</strong></label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.FechaPubicacion"
                          type="text"
                          class="form-control"
                          id="FechaPubicacion"
                          placeholder="dd/mm/aa"
                        />
                        <span
                          class="text-danger"
                          v-if="errores.FechaPubicacion"
                          >{{ errores.FechaPubicacion[0] }}</span
                        >
                      </div>
                    </div>

                    <div class="row">
                      <label
                        for="Link Test"
                        class="col-md-4 col-form-label text-md-right"
                        ><strong>Envia tu curriculum y postulate</strong> </label
                      >
                      <div class="col-md-6">
                        <input
                          v-model="estudiante.LinkTest"
                          type="text"
                          class="form-control"
                          id="Link Test"
                          placeholder="Envia tu curriculum y postulate"
                        />
                        <span class="text-danger" v-if="errores.LinkTest">{{
                          errores.LinkTest[0]
                        }}</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button @click="closeModal();" type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                        Cerrar
                                    </button>

                    <div class="row">
                                    <div class="col-md-6 offset-md-4">
                                        <router-link to="/Postulacion" class="nav-link">Postulate</router-link>
                                    </div>
                                </div>
                     

                                

                                    
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
                            mdi-pencil
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

        <!--<Postulacion></Postulacion>-->
    </div>
    
</template>


<script>
import Postulacion from './Postulacion.vue';
export default {
  components: { Postulacion },
    data() {
        return {
            page: 1,
            search: '',
            cod: '',
            codBanco: '',
            headers: [
                {text: 'Codigo', value: 'IdOferta',},
                //{text: 'Nombre Empresa', value: 'NombreEmpresa'},
                {text: 'Empresa y Titulo de Oferta', value: 'TituloOferta'},
                {text: 'Descripcion Oferta', value: 'DescripcionOferta'},
                {text: 'Detalles', value: 'actions'},
               
            ],


            estudiante: {
                NombreEmpresa: "",
                TituloOferta: "",
                DescripcionOferta: "",
                Disponibilidad:'',
                EducacionMinima:'',
                Edad:'',
                FechaPubicacion:'',
                LinkTest: "",
                },
            id: 0,
            update: true,
            modal: 0,
            titleModal: ' ',
            estudiantes: [],
            totalPages: 0,
            perPage: 0,
            errores: {},
            show: false,
        }

    },

    mounted() {
        this.list();
    },
    methods: {
        list() {
            axios.get(`lista_ofertas?page=${this.page}`).then(res => {
                this.est = res.data;
                this.estudiantes = this.est.data;
                this.totalPages = this.est.meta.last_page;
                this.perPage = this.est.meta.per_page;
            });


        },
        async save() {
            try {
                if (this.update) {
                    const res = await axios.put('ofertas/' + this.id, this.estudiante);
                } else {
                    const res = await axios.post('ofertas', this.estudiante);
                }
                this.closeModal();
                this.list();

            } catch (error) {
                if (error.response.data) {
                    this.errores = error.response.data.errors
                }
            }
        },

       

        openModal(data = {}) {
            this.show = true;
            this.modal = 1;
            if (this.update) {
                this.id = data.IdOferta,
                this.titleModal = "Detalles de la oferta";
                this.estudiante.NombreEmpresa = data.NombreEmpresa;
                this.estudiante.TituloOferta = data.TituloOferta;
                this.estudiante.Disponibilidad = data.Disponibilidad;
                this.estudiante.EducacionMinima = data.EducacionMinima;
                this.estudiante.Edad = data.Edad;
                this.estudiante.FechaPubicacion = data.FechaPubicacion;
                this.estudiante.LinkTest = data.LinkTest;
                
            } else {
                this.titleModal = "Crear Estudiante";
                this.estudiante.NombreEmpresa = '';
                this.estudiante.TituloOferta = '';
                this.estudiante.DescripcionOferta = '';
                this.estudiante.LinkTest = '';
            }
        },




        closeModal() {
            this.modal = 0;
            this.errores = {};
            this.show = false;
        },

        cancelSearch() {
            this.list();
            this.cod = '';
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
    background: rgba(44, 38, 75 0.849)
}

</style>

<style lang="scss" scoped>
.alert {
    background-color: #4CAF50;
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
    width: 190%;
    background: steelblue;
    margin-left: -200px;
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

a {
    color: #3490dc;
    text-decoration: none;
    margin-left: -288px;
    margin-right: 559px;
    background: black;
    border-radius: 47px;
}
</style>