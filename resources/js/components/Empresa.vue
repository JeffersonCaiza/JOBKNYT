<template>

    <div>
        <h1 class="text-center"><strong>Lista de Ofertas</strong></h1>
        <div class="row" style="margin: 10px 0">
            <div style="display: flex; justify-content: flex-end;" class="">
                <v-btn @click="update=false; openModal();" class="btn-blue">
                    <v-icon
                        small
                        style="margin-right: 3px"
                    >
                        mdi-plus-box
                    </v-icon>
                    Nuevo
                </v-btn>
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
                                            <label for="Nombre Empresa"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Empresa</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.NombreEmpresa" type="text" class="form-control"
                                                       id="Nombre Empresa"
                                                       placeholder="Nombre Empresa">
                                                       <span class="text-danger"
                                                      v-if="errores.NombreEmpresa">{{ errores.NombreEmpresa[0] }}</span>
                                            </div>
                                        </div>-->


                                        <!--<div class="row">
                                            <label for="CODUSUARIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Empresa</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select required aria-required="true"
                                                class="form-control"
                                                name="CODUSUARIO" id="CODUSUARIO"
                                                v-model="estudiante.CODUSUARIO"
                                        >
                                            <option
                                                disabled
                                                v-if="
                                                    estudiante.CODUSUARIO === usuario.CODUSUARIO
                                                "
                                                v-for="usuario in usuarios"
                                                :value="usuario.CODUSUARIO"
                                            >
                                                {{ usuario.NOMBRE }}
                                            </option>
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.CODUSUARIO">{{ errores.CODUSUARIO[0] }}</span>

                                            </div>

                                        </div>-->







                                        <div class="row">
                                            <label for="Titulo Oferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Titulo de Oferta</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TituloOferta" type="text" class="form-control"
                                                       id="Titulo Oferta"
                                                       placeholder="Titulo de Oferta">
                                                       <span class="text-danger"
                                                      v-if="errores.TituloOferta">{{ errores.TituloOferta[0] }}</span>
                                               
                                            </div>
                                        </div>

                                    

                                           <div class="row">
                                            <label for="Disponibilidad"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Disponibilidad</strong></label>
                                            <div class="col-md-6">
                                                <select v-model="estudiante.Disponibilidad">
                                                <option disabled value="">Seleccione disponibilidad</option>
                                                <option>Tiempo Completo</option>
                                                <option>Tiempo Parcial</option>
                                                <option>Por Horas</option>
                                                </select>
                                                       <span class="text-danger"
                                                      v-if="errores.Disponibilidad">{{ errores.Disponibilidad[0] }}</span>
                                            </div>
                                        </div>









                                         

                                        <div class="row">
                                            <label for="EducacionMinima"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Educacion</strong></label>
                                            <div class="col-md-6">
                                                <select v-model="estudiante.EducacionMinima">
                                                <option disabled value="">Seleccione nivel de educacion</option>
                                                <option>Bachillerato</option>
                                                <option>Tecnico Superior</option>
                                                <option>Tercer Nivel (grado)</option>
                                                </select>
                                                       <span class="text-danger"
                                                      v-if="errores.EducacionMinima">{{ errores.EducacionMinima[0] }}</span>
                                            </div>
                                        </div>

                                       
                                        




                                        

                                        <div class="row">
                                            <label for="Edad"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Edad</strong></label>
                                            <div class="col-md-6">
                                                <select v-model="estudiante.Edad">
                                                <option disabled value="">Seleccione el rango de edad</option>
                                                <option>18-25</option>
                                                <option>26-30</option>
                                                <option>31-35</option>
                                                <option>36-40</option>
                                                </select>
                                                       <span class="text-danger"
                                                      v-if="errores.Edad">{{ errores.Edad[0] }}</span>
                                            </div>
                                        </div>












                                          <div class="row">
                                            <label for="Descripcion Oferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Descripcion</strong></label>
                                            <div class="col-md-6">
                                                

                                                    <div class="descripcion">
                                                      <v-textarea
                                                      v-model="estudiante.DescripcionOferta" type="text" 
                                                      clearable
                                                      clear-icon="mdi-close-circle"
                                                      label="Descripcion"
                                                      value="This is clearable text."
                                                     ></v-textarea>
                                                    </div>
                                                    
                                                       <span class="text-danger"
                                                      v-if="errores.DescripcionOferta">{{ errores.DescripcionOferta[0] }}</span>
                                                    
                                            </div>
                                        </div>

                                           <div class="row">
                                            <label for="Requisitos Oferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Requisitos</strong></label>
                                            <div class="col-md-6">
                                                

                                                    <div class="descripcion">
                                                      <v-textarea
                                                      v-model="estudiante.Requisitos" type="text" 
                                                      clearable
                                                      clear-icon="mdi-close-circle"
                                                      label="Requisitos"
                                                      value="This is clearable text."
                                                     ></v-textarea>
                                                    </div>
                                                    
                                                       <span class="text-danger"
                                                      v-if="errores.Requisitos">{{ errores.Requisitos[0] }}</span>
                                                    
                                            </div>
                                        </div>



                                           <div class="row">
                                            <label for="Beneficios"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Beneficios</strong></label>
                                            <div class="col-md-6">
                                                

                                                    <div class="descripcion">
                                                      <v-textarea
                                                      v-model="estudiante.Beneficios" type="text" 
                                                      clearable
                                                      clear-icon="mdi-close-circle"
                                                      label="Beneficios"
                                                      value="This is clearable text."
                                                     ></v-textarea>
                                                    </div>
                                                    
                                                       <span class="text-danger"
                                                      v-if="errores.Beneficios">{{ errores.Beneficios[0] }}</span>
                                                    
                                            </div>
                                        </div>


                                           <div class="row">
                                            <label for="Cualidades"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Cualidades</strong></label>
                                            <div class="col-md-6">
                                                

                                                    <div class="descripcion">
                                                      <v-textarea
                                                      v-model="estudiante.Cualidades" type="text" 
                                                      clearable
                                                      clear-icon="mdi-close-circle"
                                                      label="Cualidades"
                                                      value="This is clearable text."
                                                     ></v-textarea>
                                                    </div>
                                                    
                                                       <span class="text-danger"
                                                      v-if="errores.Cualidades">{{ errores.Cualidades[0] }}</span>
                                                    
                                            </div>
                                        </div>









                                        <!--<div class="row">
                                            <label for="FechaPubicacion"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Fecha de publicacion</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FechaPubicacion" type="date" class="form-control"
                                                       id="FechaPubicacion" placeholder="Inicio de publicacion">
                                                       <span class="text-danger"
                                                      v-if="errores.FechaPubicacion">{{ errores.FechaPubicacion[0] }}</span>
                                            </div>
                                        </div>-->

                                         <!--<div class="row">
                                            <label for="FechaPubicacion"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Fecha Fin de publicacion</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FechaPublicacionFin	" type="date" class="form-control"
                                                       id="FechaPublicacionFin	" placeholder="Fin de publicacion">
                                                       <span class="text-danger"
                                                      v-if="errores.FechaPublicacionFin	">{{ errores.FechaPublicacionFin	[0] }}</span>
                                            </div>
                                        </div>-->



                                        <!--<div class="row">
                                            <label for="Link Test"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Correo envio de curriculum</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.LinkTest" type="text" class="form-control"
                                                       id="Link Test" placeholder="Correo para envio de curriculum">
                                                       <span class="text-danger"
                                                      v-if="errores.LinkTest">{{ errores.LinkTest[0] }}</span>
                                            </div>
                                        </div>-->

                                        <div class="row">
                                            <label for="Estado"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Estado de ofertas</strong></label>
                                            <div class="col-md-6">
                                                <select v-model="estudiante.Estado">
                                                <option disabled value="">Seleccione el estado de su oferta</option>
                                                <option>Activa</option>
                                                <option>Inactiva</option>
                                             
                                                </select>
                                                       <span class="text-danger"
                                                      v-if="errores.Estado">{{ errores.Estado[0] }}</span>
                                            </div>
                                        </div>



                                        <!--<div class="row">
                                            <label for="CODUSUARIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Correo envio de curriculum</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select required aria-required="true"
                                                class="form-control"
                                                name="CODUSUARIO" id="CODUSUARIO"
                                                v-model="estudiante.CODUSUARIO"
                                        >
                                            <option
                                                disabled
                                                v-if="
                                                    estudiante.CODUSUARIO === usuario.CODUSUARIO
                                                "
                                                v-for="usuario in usuarios"
                                                :value="usuario.CODUSUARIO"
                                            >
                                                {{ usuario.email }}
                                            </option>
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.CODUSUARIO">{{ errores.CODUSUARIO[0] }}</span>

                                            </div>

                                        </div>-->

                                        
                                         

                                       

                                        
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button @click="closeModal();" type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                        Cerrar
                                    </button>
                                    <button @click="save();" type="button" class="btn btn-success btn-blue"
                                            data-bs-dismiss="modal">
                                        Guardar
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
                    label="Buscar"
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
                loading-text="Aun no hay ofertas creadas"
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
        <!--<div class="text-center pt-2">
            <v-pagination
                v-model="page"
                :length="totalPages"
                total-visible="7"
                @input="handlePage"
            ></v-pagination>
        </div>-->
        <!--<Postulaciones></Postulaciones>-->
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
                //{text: 'Codigo de Oferta', value: 'IdOferta',},
                //{text: 'Empresa', value: 'CODUSUARIO.NOMBRE'},
                {text: 'Titulo de Oferta', value: 'TituloOferta'},
                {text: 'Descripcion', value: 'DescripcionOferta'},
                {text: 'Estado', value: 'Estado'},
                {text: 'Fecha Publicacion', value: 'FechaPubicacion'},
                {text: 'Detalles', value: 'actions'},
                
               
            ],


            estudiante: {
                NombreEmpresa: '',
                TituloOferta: '',
                DescripcionOferta: '',
                LinkTest: '',
                Disponibilidad:'',
                EducacionMinima:'',
                Edad:'',
                FechaPubicacion:'',
                FechaPublicacionFin:'',
                Requisitos:'',
                Beneficios:'',
                Cualidades:'',
                CODUSUARIO:'',
                Estado:'',
            },
            id: 0,
            update: true,
            borrar: true,
            modal: 0,
            titleModal: ' ',
            estudiantes: [],
            usuarios: [],
            //totalPages: 0,
           // perPage: 0,
            errores: {},
            show: false,
        }

    },

    mounted() {
        this.list()

        axios.get('lista_noveleses').then((response) => {
            this.usuarios = response.data;
        })
    },
    methods: {
        //list() {
        //    axios.get(`lista_ofertas?page=${this.page}`).then(res => {
        //       this.est = res.data;
        //        this.estudiantes = this.est.data;
        //        this.totalPages = this.est.meta.last_page;
         //       this.perPage = this.est.meta.per_page;
        //    });


        //},

         async list() {

       const res = await axios.get("/ofertasr");
            this.estudiantes = res.data;
            //axios.get("lista").then((res) => {
        //this.est = res.data;
        //this.estudiantes = this.est.data;
        //this.totalPages = this.est.meta.last_page;
        //this.perPage = this.est.meta.per_page;
      //});
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

        async eliminar() {
        if (this.borrar) {
          const res = await axios.delete("ofertas/" + this.id, this.estudiante);
        }
        this.closeModal();
        this.list();
    },

         

       

        openModal(data = {}) {
            this.show = true;
            this.modal = 1;
            if (this.update) {
                this.id = data.IdOferta,
                this.titleModal = "Editar Oferta";
                this.estudiante.CODUSUARIO=data.CODUSUARIO;
                //this.estudiante.NombreEmpresa = data.NombreEmpresa;
                this.estudiante.TituloOferta = data.TituloOferta;
                this.estudiante.Disponibilidad = data.Disponibilidad;
                 this.estudiante.EducacionMinima = data.EducacionMinima;
                 this.estudiante.Edad = data.Edad;
                 this.estudiante.FechaPubicacion = data.FechaPubicacion;
                this.estudiante.DescripcionOferta = data.DescripcionOferta;
                this.estudiante.LinkTest = data.LinkTest;
                this.estudiante.FechaPublicacionFin = data.FechaPublicacionFin;
                this.estudiante.Requisitos = data.Requisitos;
                this.estudiante.Beneficios = data.Beneficios;
                this.estudiante.Cualidades = data.Cualidades;
                this.estudiante.Estado = data.Estado;
                
            } else {
                this.titleModal = "Crear Nueva Oferta";
                //this.estudiante.NombreEmpresa = '';
                //this.estudiante.CODUSUARIO='';
                this.estudiante.TituloOferta = '';
                this.estudiante.Disponibilidad = '';
                this.estudiante.EducacionMinima = '';
                this.estudiante.Edad = '';
                this.estudiante.FechaPubicacion = '';
                this.estudiante.DescripcionOferta = '';
                this.estudiante.LinkTest = '';
                this.estudiante.FechaPublicacionFin = '';
                this.estudiante.Requisitos = '';
                this.estudiante.Beneficios = '';
                this.estudiante.Cualidades = '';
                this.estudiante.Estado = '';
                
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
.descripcion {
    
    background: white;
     border-radius: 11px;
     width: 569px;
    height: 168px;
   
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

select {
  word-wrap: normal;
  background: #136fbb;
  border-radius: 6px;
  -webkit-appearance: revert;
}


.theme--light.v-card {
    color: rgba(0,0,0,.87);
    background: #68A8DA;
}

.theme--light.v-data-table {
    background-color:#426FAF;
    color: rgb(0 0 6 / 104%);
}
</style>

