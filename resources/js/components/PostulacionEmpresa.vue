<template>


    <div>
        <h1 class="text-center">Lista de Postulaciones</h1>
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
                                        <div class="row">
                                            <label for="NOMBREEMPRESA"
                                                   class="col-md-4 col-form-label text-md-right">Empresa</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.NOMBREEMPRESA" type="text" class="form-control"
                                                       id="NOMBREEMPRESA"
                                                       placeholder="Nombre Empresa">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBREEMPRESA">{{ errores.NOMBREEMPRESA[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="TITULOOFERTA"
                                                   class="col-md-4 col-form-label text-md-right">Oferta</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TITULOOFERTA" type="text" class="form-control"
                                                       id="TITULOOFERTA"
                                                       placeholder="Titulo Oferta">
                                                       <span class="text-danger"
                                                      v-if="errores.TITULOOFERTA">{{ errores.TITULOOFERTA[0] }}</span>
                                               
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="NOMBRES"
                                                   class="col-md-4 col-form-label text-md-right">Nombres</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.NOMBRES" type="text" class="form-control"
                                                       id="NOMBRES"
                                                       placeholder="Nombres">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBRES">{{ errores.NOMBRES[0] }}</span>
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="CEDULA"
                                                   class="col-md-4 col-form-label text-md-right">Cedula</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.CEDULA" type="text" class="form-control"
                                                       id="CEDULA" placeholder="Cedula">
                                                       <span class="text-danger"
                                                      v-if="errores.CEDULA">{{ errores.CEDULA[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="EMAIL"
                                                   class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.EMAIL" type="text" class="form-control"
                                                       id="EMAIL" placeholder="Email">
                                                       <span class="text-danger"
                                                      v-if="errores.EMAIL">{{ errores.EMAIL[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="COLEGIO"
                                                   class="col-md-4 col-form-label text-md-right">Colegio</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.COLEGIO" type="text" class="form-control"
                                                       id="COLEGIO" placeholder="Nombre Colegio">
                                                       <span class="text-danger"
                                                      v-if="errores.COLEGIO">{{ errores.COLEGIO[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="TITULOCOLEGIO"
                                                   class="col-md-4 col-form-label text-md-right">Titulo</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TITULOCOLEGIO" type="text" class="form-control"
                                                       id="TITULOCOLEGIO" placeholder="Titulo Colegio">
                                                       <span class="text-danger"
                                                      v-if="errores.TITULOCOLEGIO">{{ errores.TITULOCOLEGIO[0] }}</span>
                                            </div>
                                        </div>






                                        <div class="row">
                                            <label for="UNIVERSIDAD"
                                                   class="col-md-4 col-form-label text-md-right">Superior</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.UNIVERSIDAD" type="text" class="form-control"
                                                       id="UNIVERSIDAD" placeholder="Nombre Universidad">
                                                       <span class="text-danger"
                                                      v-if="errores.UNIVERSIDAD">{{ errores.UNIVERSIDAD[0] }}</span>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <label for="TITULOUNIVERSIDAD"
                                                   class="col-md-4 col-form-label text-md-right">Titulo</label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TITULOUNIVERSIDAD" type="text" class="form-control"
                                                       id="TITULOUNIVERSIDAD" placeholder="Titulo Universidad">
                                                       <span class="text-danger"
                                                      v-if="errores.TITULOUNIVERSIDAD">{{ errores.TITULOUNIVERSIDAD[0] }}</span>
                                            </div>
                                        </div>

                                        

                                        
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button @click="closeModal();" type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                        Cerrar
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




    </div>



    
</template>


<script>
export default {
    data() {
        return {
            page: 1,
            search: '',
            cod: '',
            codBanco: '',
            headers: [
                {text: 'Codigo', value: 'IDPOSTULACION',},
                {text: 'Nombre Empresa', value: 'NOMBREEMPRESA'},
                {text: 'Titulo Oferta', value: 'TITULOOFERTA'},
                {text: 'Postulante', value: 'NOMBRES'},
                {text: 'Detalles', value: 'actions'},
               
                
               
            ],


            estudiante: {
                NOMBREEMPRESA: '',
                TITULOOFERTA: '',
                NOMBRES: '',
                CEDULA: '',
                EMAIL:'',
                COLEGIO:'',
                TITULOCOLEGIO:'',
                UNIVERSIDAD:'',
                TITULOUNIVERSIDAD:'',
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
            axios.get(`lista_postulaciones?page=${this.page}`).then(res => {
                this.est = res.data;
                this.estudiantes = this.est.data;
                this.totalPages = this.est.meta.last_page;
                this.perPage = this.est.meta.per_page;
            });


        },
        async save() {
            try {
                if (this.update) {
                    const res = await axios.put('postulaciones/' + this.id, this.estudiante);
                } else {
                    const res = await axios.post('postulaciones', this.estudiante);
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
                
                this.id = data.IDPOSTULACION,
                this.titleModal = "Detalles de Postulacion";
                this.estudiante.NOMBREEMPRESA = data.NOMBREEMPRESA;
                this.estudiante.TITULOOFERTA = data.TITULOOFERTA;
                this.estudiante.NOMBRES = data.NOMBRES;
                this.estudiante.CEDULA = data.CEDULA;
                this.estudiante.EMAIL = data.EMAIL;
                this.estudiante.COLEGIO = data.COLEGIO;
                this.estudiante.TITULOCOLEGIO = data.TITULOCOLEGIO;
                this.estudiante.UNIVERSIDAD = data.UNIVERSIDAD;
                this.estudiante.TITULOUNIVERSIDAD = data.TITULOUNIVERSIDAD;
                
            } else {
               
                this.titleModal = "Crear Nueva Postulacion";
                this.estudiante.NOMBREEMPRESA = '';
                this.estudiante.TITULOOFERTA = '';
                this.estudiante.NOMBRES = '';
                this.estudiante.CEDULA = '';
                this.estudiante.EMAIL = '';
                this.estudiante.COLEGIO = '';
                this.estudiante.TITULOCOLEGIO = '';
                this.estudiante.UNIVERSIDAD = '';
                this.estudiante.TITULOUNIVERSIDAD = '';

                
                
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
    width:110%;
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
</style>
