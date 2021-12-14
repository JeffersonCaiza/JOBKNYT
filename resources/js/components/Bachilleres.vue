<template>
    <div>
        <h1 class="text-center"><strong>Lista de ofertas</strong></h1>
        <div class="row" style="margin: 10px 0">
            <div style="display: flex; justify-content: flex-end;" class="">
        </div>

         <!--<div class="row">
                                    <div class="col-md-6 offset-md-4">
                                        <router-link to="/Postulacion" class="nav-link">Crea tu Postulacion</router-link>
                                    </div>
                                </div>-->
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
                                            <label for="CODUSUARIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Empresa</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.CODUSUARIO.NOMBRE" type="text" class="form-control"
                                                       id="CODUSUARIO"
                                                       placeholder="Empresa y Titulo de Oferta">
                                                       <span class="text-danger"
                                                      v-if="errores.TituloOferta">{{ errores.TituloOferta[0] }}</span>
                                               
                                            </div>
                                        </div>

                                        
                    


                     <div class="row">
                                            <label for="Titulo Oferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Titulo de Oferta</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.TituloOferta" type="text" class="form-control"
                                                       id="Titulo Oferta"
                                                       placeholder="Empresa y Titulo de Oferta">
                                                       <span class="text-danger"
                                                      v-if="errores.TituloOferta">{{ errores.TituloOferta[0] }}</span>
                                               
                                            </div>
                                        </div>

                                    

                                         

                                         <div class="row">
                                            <label for="Disponibilidad"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Disponibilidad</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.Disponibilidad" type="text" class="form-control"
                                                       id="Disponibilidad"
                                                       placeholder="Disponibilidad">
                                                       <span class="text-danger"
                                                      v-if="errores.Disponibilidad">{{ errores.Disponibilidad[0] }}</span>
                                               
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="Educacion"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Educacion</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.EducacionMinima" type="text" class="form-control"
                                                       id="EducacionMinima"
                                                       placeholder="EducacionMinima">
                                                       <span class="text-danger"
                                                      v-if="errores.EducacionMinima">{{ errores.EducacionMinima[0] }}</span>
                                               
                                            </div>
                                        </div>









                                         

                                       

                                       
                                        




                                        <div class="row">
                                            <label for="Edad"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Edad</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.Edad" type="text" class="form-control"
                                                       id="Edad"
                                                       placeholder="Edad">
                                                       <span class="text-danger"
                                                      v-if="errores.Edad">{{ errores.Edad[0] }}</span>
                                               
                                            </div>
                                        </div>

                                        
                                        
                                        
                                        












                                          <div class="row">
                                            <label for="Descripcion Oferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Descripcion</strong></label>
                                            <div class="col-md-6">
                                                

                                                    <div class="descripcion">
                                                      <v-textarea disabled
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
                                                      <v-textarea disabled
                                                      v-model="estudiante.Requisitos" type="label" 
                                                      clearable
                                                      clear-icon="mdi-close-circle"
                                                      label="Requisitos"
                                                      value="This is clearable text."
                                                      color="black"
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
                                                      <v-textarea disabled
                                                      v-model="estudiante.Beneficios" type="label" 
                                                      clearable
                                                      clear-icon="mdi-close-circle"
                                                      label="Beneficios"
                                                      value="This is clearable text."
                                                      color="black"
                                                      
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
                                                      <v-textarea disabled
                                                      v-model="estudiante.Cualidades" type="label" 
                                                      clearable
                                                      clear-icon="mdi-close-circle"
                                                      label="Cualidades"
                                                      value="This is clearable text."
                                                      color="black"
                                                     ></v-textarea>
                                                    </div>
                                                    
                                                       <span class="text-danger"
                                                      v-if="errores.Cualidades">{{ errores.Cualidades[0] }}</span>
                                                    
                                            </div>
                                        </div>









                                       <!-- <div class="row">
                                            <label for="FechaPubicacion"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Fecha de publicacion</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.FechaPubicacion" type="date" class="form-control"
                                                       id="FechaPubicacion" placeholder="Inicio de publicacion">
                                                       <span class="text-danger"
                                                      v-if="errores.FechaPubicacion">{{ errores.FechaPubicacion[0] }}</span>
                                            </div>
                                        </div>-->

                                        <!-- <div class="row">
                                            <label for="FechaPubicacion"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Fecha Fin de publicacion</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.FechaPublicacionFin	" type="date" class="form-control"
                                                       id="FechaPublicacionFin	" placeholder="Fin de publicacion">
                                                       <span class="text-danger"
                                                      v-if="errores.FechaPublicacionFin	">{{ errores.FechaPublicacionFin	[0] }}</span>
                                            </div>
                                        </div>-->

                                       

                                        
                                       <div class="row">
                                            <label for="Estado"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Estado de oferta</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.Estado" type="text" class="form-control"
                                                       id="Titulo Oferta"
                                                       placeholder="Empresa y Titulo de Oferta">
                                                       <span class="text-danger"
                                                      v-if="errores.Estado">{{ errores.Estado[0] }}</span>
                                               
                                            </div>
                                        </div>




                    <!--<div class="row">
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
                    </div>-->


                      <!--<div class="row">
                                            <label for="CODUSUARIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Envia tu curriculum y postulate</strong></label>
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


                                        <!--<div class="row">
                                            <label for="CODUSUARIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Envia tu curriculum</strong></label>
                                            <div class="col-md-6">
                                                <input disabled v-model="estudiante.CODUSUARIO.email" type="text" class="form-control"
                                                       id="CODUSUARIO"
                                                       placeholder="">
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

                   
                     

                                

                                    
                </div>
                            </div>
                        </div>
                    </div>
                </div>









                 <!-- Modal 1-->
                <div v-if="show1" class="modal__backdrop">
                    <div class="modal__backdrop" @click="closeModal1()"></div>
                    <div class="modal1" :class="{show1:modal1}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">{{ titleModal1 }}</h3>
                                    <button @click="closeModal1();" type="button" class="btn-close"
                                            
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                  <div>

                       <div class="row">
                                            <label for="IdOferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Seleccione la Oferta</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select 
                                                disabled
                                                class="form-control"
                                                name="IdOferta" id="IdOferta"
                                                v-model="estudiante1.IdOferta"
                                        >
                                            
                                            <option value="" disabled selected> seleccione la oferta...</option>
                                            <option 
                                           
                                            v-for="ofertas in ofertasos" :value="ofertas.IdOferta">{{ ofertas.TituloOferta }}</option>
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.IdOferta">{{ errores.IdOferta[0] }}</span>                                               
                                            </div>
                                        </div>




                                         <div class="row">
                                            <label for="IDHOJA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombre</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select 
                                              
                                                class="form-control"
                                                name="IDHOJA" id="IDHOJA"
                                                v-model ="estudiante1.IDHOJA"
                                                
                                              
                                        >
                                          
                                            <option 
                                            v-for="hojavida in vida"
                                            :value="hojavida.IDHOJA"
                                          
                                         
                                           
                                             
                                           
                                            >{{ hojavida.NOMBRESC }}</option>
                                            
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.IDHOJA">{{ errores.IDHOJA[0] }}</span>
                                            </div>
                                        </div>




 




                                        










                                                        <v-alert v-if="success===true"
                         id="alertSuccess"
                         name="alertSuccess"
                         dismissible
                         type="success"
                         class="alert"
                         transition="scale-transition"
                >
                    Recuerda solo puedes postularte una vez a una oferta
                </v-alert>











                  </div>
                </div>
                <div class="modal-footer">
                    <button @click="closeModal1();" type="button" class="btn btn-secondary"
                                            >
                                        Cerrar
                                    </button>

                                    <button @click="save1();" type="button" class="btn btn-success btn-blue"
                                            >
                                        Enviar Postulación
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
                            
                            color="#fff"
                        >
                            mdi-card-search
                            
                        </v-icon>

                    </v-btn>                   
                </template>

                <template v-slot:item.actionse="{ item }">
                    <v-btn
                        icon href="/Postulacion"
                        small
                        class="mr-2"
                        style="background-color: #38c172"
                    >
                        <v-icon
                            
                            color="#fff"
                        >
                            mdi-pencil
                            
                        </v-icon>

                    </v-btn>                   
                </template>

                <template v-slot:item.actionsea="{ item }">
                    <v-btn
                       small
                        class="mr-2"
                        @click="update1 = false; openModal1(item);"
                        style="background-color: #38c172"
                    >
                        <v-icon
                            
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
                //{text: 'Codigo', value: 'IdOferta',},
                {text: 'Empresa', value: 'CODUSUARIO.NOMBRE'},
                {text: 'Titulo de Oferta', value: 'TituloOferta'},
                {text: 'Descripcion Oferta', value: 'DescripcionOferta'},
                {text: 'Estado', value: 'Estado'},
                {text: 'Detalles', value: 'actions'},
                //{text: 'Postulate', value: 'actionse'},   
                {text: 'Postulate', value: 'actionsea'},   
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
                FechaPublicacionFin:'',
                Requisitos:'',
                Beneficios:'',
                Cualidades:'',
                CODUSUARIO:'',
                Estado:'',
                
                
               
                },
            id: 0,
            
            update: true,
            modal: 0,
            titleModal: ' ',
            estudiantes: [],
           // totalPages: 0,
           // perPage: 0,
            errores: {},
            show: false,
            usuarios: [],



               estudiante1: {
                   
                   
            },

            
            modal1: 0,
            titleModal1: ' ',
            show1: false,
            update1: true,
            ofertasos:[],
            vida:[
               
            
                
            ],
            success: false,
           
        }

    },

    mounted() {
        this.list();

        //this.hojitas();

        axios.get('lista_noveleses').then((response) => {
            this.usuarios = response.data;
        })


          axios.get('ofertasos').then((response) => {
            this.ofertasos = response.data;
        })

        axios.get('hojas').then((response) => {
            this.vida = response.data;
        })

        //axios.get('hoja').then((response) => {
          //  this.vida = response.data;
            //this.vida=this.vidas.vida
        //})
    },
    methods: {
        list() {
            axios.get(`lista_ofertas`).then(res => {
                this.est = res.data;
                this.estudiantes = this.est.data;
               // this.totalPages = this.est.meta.last_page;
               // this.perPage = this.est.meta.per_page;
            });


        },

       // hojitas(){axios.get('hojas').then(res => {
         //   this.esta = res.data;
           // this.vida = this.esta.data;
           
        //})},




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


        async save1() {
            try {
                if (this.update1) {
                    const res = await axios.put('ofertas/' + this.id, this.estudiante1);
                } else {
                    const res = await axios.post('postulaciones', this.estudiante1);
                    //this.success = true;
                    //this.closeModal1()
                }
                this.success = true;
                //this.closeModal1();
                //this.list();

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
                this.estudiante.CODUSUARIO = data.CODUSUARIO;
                this.estudiante.TituloOferta = data.TituloOferta;
                this.estudiante.Disponibilidad = data.Disponibilidad;
                this.estudiante.EducacionMinima = data.EducacionMinima;
                this.estudiante.Edad = data.Edad;
                this.estudiante.FechaPubicacion = data.FechaPubicacion;
                this.estudiante.LinkTest = data.LinkTest;
                this.estudiante.FechaPublicacionFin = data.FechaPublicacionFin;
                this.estudiante.DescripcionOferta = data.DescripcionOferta;
                this.estudiante.Requisitos = data.Requisitos;
                this.estudiante.Beneficios = data.Beneficios;
                this.estudiante.Cualidades = data.Cualidades;
                this.estudiante.Estado = data.Estado;

              
                
            } else {
                this.titleModal = "Crear Estudiante";
                this.estudiante.NombreEmpresa = '';
                this.estudiante.TituloOferta = '';
                this.estudiante.DescripcionOferta = '';
                this.estudiante.LinkTest = '';
            }
        },




        openModal1(data = {}) {
            //this.show1 = true;
            //this.modal1 = 1;
            
            if (this.update1) {
                this.id = data.IdOferta,
                this.titleModal = "Detalles de la oferta";
                this.estudiante.CODUSUARIO = data.CODUSUARIO;
                this.estudiante.TituloOferta = data.TituloOferta;
                this.estudiante.Disponibilidad = data.Disponibilidad;
                this.estudiante.EducacionMinima = data.EducacionMinima;
                this.estudiante.Edad = data.Edad;
                this.estudiante.FechaPubicacion = data.FechaPubicacion;
                this.estudiante.LinkTest = data.LinkTest;
                this.estudiante.FechaPublicacionFin = data.FechaPublicacionFin;
                this.estudiante.DescripcionOferta = data.DescripcionOferta;
                this.estudiante.Requisitos = data.Requisitos;
                this.estudiante.Beneficios = data.Beneficios;
                this.estudiante.Cualidades = data.Cualidades;
                this.estudiante.Estado = data.Estado;
                this.estudiantes.IdOferta=data.IdOferta;

                
                
            } else {
                 this.show1 = true;
                 this.modal1 = 1;
                
              
               
               
                
                this.titleModal1 = "Postulacion";
                this.estudiante1.IdOferta = data.IdOferta;
                this.estudiante1.IDHOJA = data.IDHOJA;
               
            }
        },





        closeModal() {
            this.modal = 0;
            this.errores = {};
            this.show = false;
        },


         closeModal1() {
            this.modal1 = 0;
            this.errores = {};
            this.show1 = false;
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




.modal1 {
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
    width: 182%;
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

.descripcion {
    
    background: #45d5b4;
    border-radius: 11px;
    width: 569px;
    height: 168px;
   
}





a {
    border-radius: 6px;
    margin-left: 12px;
}

select {
  word-wrap: normal;
  background: #136fbb;
  border-radius: 6px;
  -webkit-appearance: revert;
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