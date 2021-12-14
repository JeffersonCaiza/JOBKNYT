<template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Postulacion</strong></div>

                    <div class="card-body">

                        <form method="POST" @submit.prevent="submit">

                            <div class="form-group">

                                <h1 align="left"><strong>Detalles de Postulacion</strong></h1>

                                        <br>
                                        

                                        <div class="row">
                                            <label for="IdOferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Seleccione la Oferta</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select 
                                                class="form-control"
                                                name="IdOferta" id="IdOferta"
                                                v-model="estudiante.IdOferta"
                                        >
                                            <option value="" disabled selected> seleccione la oferta...</option>
                                            <option v-for="ofertas in ofertasos" :value="ofertas.IdOferta">{{ ofertas.TituloOferta }}</option>
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.IdOferta">{{ errores.IdOferta[0] }}</span>

                                                       


                                                    
                                               
                                            </div>
                                        </div>





                                          <!--<div class="row">
                                            <label for="IDHOJA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Seleccione su Nombre</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select required aria-required="true"
                                                class="form-control"
                                                name="IDHOJA" id="IDHOJA"
                                                v-model="estudiante.IDHOJA"
                                        >
                                            <option value="" disabled selected> seleccione su nombre...</option>
                                            <option v-for="hojavida in vida" :value="hojavida.IDHOJA">{{ hojavida.NOMBRESC }}</option>
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.IDHOJA">{{ errores.IDHOJA[0] }}</span>

                                                       


                                                    
                                               
                                            </div>
                                        </div>-->


                                        

                                         <div class="row">
                                            <label for="IDHOJA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombre</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select 
                                                class="form-control"
                                                name="IDHOJA" id="IDHOJA"
                                                v-model="estudiante.IDHOJA"
                                              
                                        >
                                            
                                            <option v-for="hojavida in vida" :value="hojavida.IDHOJA" >{{ hojavida.NOMBRESC }}</option>
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.IDHOJA">{{ errores.IDHOJA[0] }}</span>
                                            </div>
                                        </div>


                                       
                                    






                                     


                                         <br>


                                        

                               
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Enviar Postulacion
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                  
                    </div>
                           <div>
                <v-alert v-if="success===true"
                         id="alertSuccess"
                         name="alertSuccess"
                         dismissible
                         type="success"
                         class="alert"
                         transition="scale-transition"
                >
                    Postulacion enviada con exito
                </v-alert>
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
            </div>
            
           
        </div>
    </div>
</template>

<script>
export default {
    name: "PostulacionForm",

    data() {
        return {
         
            estudiante: {
            
           
            },
            errores: {},
            success: false,
            loaded: true,
            errors: {},
            ofertasos:[],
            vida:[],

        }
    },

      mounted() {
        axios.get('ofertasos').then((response) => {
            this.ofertasos = response.data;
        })

        axios.get('hojas').then((response) => {
            this.vida = response.data;
        })
    },
    
    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errores = {};
                axios.post('postulaciones', this.estudiante).then(response => {
                    this.estudiante = {}; //Clear input fields.
                    this.loaded = true;
                    this.success = true;
                }).catch(error => {
                    this.loaded = true;
                    if (error.response.data) {
                        this.errores = error.response.data.errors
                    }
                });
            }
        },
    },
}
</script>

<style scoped>
.alert {
    background-color: #4CAF50;
    border: none;
    position: absolute;
    bottom: 0%;
    right: 0%;
}

.container{
    width: 106%;
}

.card{
    background: steelblue;
    width: 796px;
    margin-left: -110px;
}

select {
  word-wrap: normal;
  background: #136fbb;
  border-radius: 6px;
  -webkit-appearance: revert;
}

.titulo{
    color: aquamarine;
    margin-left: 54px;
    font-size: 12px;
    position: absolute;
    margin-top: 184px;
    margin-left: 311px;
}

.titulo1{
    color: aquamarine;
    margin-left: 54px;
    font-size: 12px;
    position: absolute;
    margin-top: 124px;
    margin-left: 286px;
}



</style>