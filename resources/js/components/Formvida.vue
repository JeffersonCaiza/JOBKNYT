<template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>HOJA DE VIDA</strong></div>

                    <div class="card-body">

                        <form method="POST" @submit.prevent="submit">

                            <div class="form-group">
                                        <h1 align="left" ><strong>Informacion Personal</strong></h1>
                                         <br>

                                        <div class="row">
                                            <label for="NOMBRES"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombres</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.NOMBRESC" type="text" class="form-control"
                                                       id="NOMBRES"
                                                       placeholder="Nombres">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBRESC">{{ errores.NOMBRESC[0] }}</span>
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="EDAD"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Edad</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.EDAD" type="text" class="form-control"
                                                       id="EDAD"
                                                       placeholder="Edad">
                                                       <span class="text-danger"
                                                      v-if="errores.EDAD">{{ errores.EDAD[0] }}</span>
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="CEDULA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Cedula</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.CEDULA" type="text" class="form-control"
                                                       id="CEDULA" placeholder="Cedula">
                                                       <span class="text-danger"
                                                      v-if="errores.CEDULA">{{ errores.CEDULA[0] }}</span>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <label for="DOMICILIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Domicilio</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.DOMICILIO" type="text" class="form-control"
                                                       id="DOMICILIO" placeholder="Domicilio">
                                                       <span class="text-danger"
                                                      v-if="errores.DOMICILIO">{{ errores.DOMICILIO[0] }}</span>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <label for="TELEFONOS"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONOS" type="text" class="form-control"
                                                       id="	TELEFONOS" placeholder="Telefonos">
                                                       <span class="text-danger"
                                                      v-if="errores.TELEFONOS">{{ errores.TELEFONOS[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="EMAIL"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Email</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.EMAIL" type="text" class="form-control"
                                                       id="EMAIL" placeholder="Email">
                                                       <span class="text-danger"
                                                      v-if="errores.EMAIL">{{ errores.EMAIL[0] }}</span>
                                            </div>
                                        </div>
                                        <br>
                                        <h1 align="left"><strong>Formacion Academica</strong></h1>
                                        <br>

                                        

                                        <div class="row">
                                            <label for="COLEGIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Colegio</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.COLEGIO" type="text" class="form-control"
                                                       id="COLEGIO" placeholder="Nombre Colegio">
                                                       <span class="text-danger"
                                                      v-if="errores.COLEGIO">{{ errores.COLEGIO[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="TITULOCOLEGIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Titulo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TITULOCOLEGIO" type="text" class="form-control"
                                                       id="TITULOCOLEGIO" placeholder="Titulo Colegio">
                                                       <span class="text-danger"
                                                      v-if="errores.TITULOCOLEGIO">{{ errores.TITULOCOLEGIO[0] }}</span>
                                            </div>
                                        </div>






                                        <div class="row">
                                            <label for="UNIVERSIDAD"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Universidad</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.UNIVERSIDAD" type="text" class="form-control"
                                                       id="UNIVERSIDAD" placeholder="Nombre Universidad">
                                                       <span class="text-danger"
                                                      v-if="errores.UNIVERSIDAD">{{ errores.UNIVERSIDAD[0] }}</span>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <label for="TITULOUNIVERSIDAD"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Titulo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TITULOUNIVERSIDAD" type="text" class="form-control"
                                                       id="TITULOUNIVERSIDAD" placeholder="Titulo Universidad">
                                                       <span class="text-danger"
                                                      v-if="errores.TITULOUNIVERSIDAD">{{ errores.TITULOUNIVERSIDAD[0] }}</span>
                                            </div>
                                        </div>
                                                      <br>

                                        <h1 align="left"><strong>Idiomas</strong></h1>
                                        <br>

                                                              

                                        <h3 align="left"><strong>Idioma A</strong></h3>
                                        <br>


                                        <div class="row">
                                            <label for="CURSOA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Idioma</strong></label>
                                            <div class="col-md-6">
                                                <select v-model="estudiante.CURSOA">
                                                <option disabled value="">Seleccione un Idioma</option>
                                                <option>Ingles</option>
                                                <option>Frances</option>
                                                <option>Ruso</option>
                                                <option>koreano</option>
                                                <option>Japones</option>
                                                <option>Chino</option>

                                                </select>
                                                       <span class="text-danger"
                                                      v-if="errores.CURSOA">{{ errores.CURSOA[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="NIVELA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nivel</strong></label>
                                            <div class="col-md-6">

                                                <select v-model="estudiante.NIVELA">
                                                <option disabled value="">Seleccione el nivel</option>
                                                <option>Basico</option>
                                                <option>Intermedio</option>
                                                <option>Avanzado</option>
                                                </select>
                                                <span class="text-danger"
                                                      v-if="errores.NIVELA">{{ errores.NIVELA[0] }}</span>





                                                
                                            </div>
                                        </div>

                                         <h3 align="left"><strong>Idioma B</strong></h3>
                                        <br>


                                          <div class="row">
                                            <label for="CURSOB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Idioma</strong> </label>
                                            <div class="col-md-6">
                                                <select v-model="estudiante.CURSOB">
                                                <option disabled value="">Seleccione un Idioma</option>
                                                <option>Ingles</option>
                                                <option>Frances</option>
                                                <option>Ruso</option>
                                                <option>koreano</option>
                                                <option>Japones</option>
                                                <option>Chino</option>
                                                </select>
                                                       <span class="text-danger"
                                                      v-if="errores.CURSOB">{{ errores.CURSOB[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="NIVELB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nivel</strong></label>
                                            <div class="col-md-6">
                                                <select v-model="estudiante.NIVELB">
                                                <option disabled value="">Seleccione el nivel</option>
                                                <option>Basico</option>
                                                <option>Intermedio</option>
                                                <option>Avanzado</option>
                                                </select>
                                                       <span class="text-danger"
                                                      v-if="errores.NIVELB">{{ errores.NIVELB[0] }}</span>
                                            </div>
                                        </div>
                                         <br>


                                        <h1 align="left"><strong>Experiencia laboral</strong></h1>
                                        <br>

                                         <h3 align="left"><strong>Empresa A</strong></h3>
                                        <br>






                                         <div class="row">
                                            <label for="EMPRESAA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombre Empresa</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.EMPRESAA" type="text" class="form-control"
                                                       id="EMPRESAA" placeholder="Nombre Empresa">
                                                       <span class="text-danger"
                                                      v-if="errores.EMPRESAA">{{ errores.EMPRESAA[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="FUNCIONA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Cargo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FUNCIONA" type="text" class="form-control"
                                                       id="FUNCIONA" placeholder="Cargo">
                                                       <span class="text-danger"
                                                      v-if="errores.FUNCIONA">{{ errores.FUNCIONA[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="AREAA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Area de Trabajo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.AREAA" type="text" class="form-control"
                                                       id="AREAA" placeholder="Area de Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.AREAA">{{ errores.AREAA[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="FECHAA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Tiempo que Trabajó</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FECHAA" type="text" class="form-control"
                                                       id="FECHAA" placeholder="Tiempo que Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.FECHAA">{{ errores.FECHAA[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="TELEFONOA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONOA" type="text" class="form-control"
                                                       id="	TELEFONOA" placeholder="Telefono">
                                                       <span class="text-danger"
                                                      v-if="errores.TELEFONOA">{{ errores.TELEFONOA[0] }}</span>
                                            </div>
                                        </div>
                                        <br>

                                         <h3 align="left"><strong>Empresa B</strong></h3>
                                        <br>





                                         <div class="row">
                                            <label for="EMPRESAB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombre Empresa</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.EMPRESAB" type="text" class="form-control"
                                                       id="EMPRESAB" placeholder="Nombre Empresa">
                                                       <span class="text-danger"
                                                      v-if="errores.EMPRESAB">{{ errores.EMPRESAB[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="FUNCIONB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Cargo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FUNCIONB" type="text" class="form-control"
                                                       id="FUNCIONB" placeholder="Cargo">
                                                       <span class="text-danger"
                                                      v-if="errores.FUNCIONB">{{ errores.FUNCIONB[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="AREAB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Area de Trabajo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.AREAB" type="text" class="form-control"
                                                       id="AREAB" placeholder="Area de Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.AREAB">{{ errores.AREAB[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="FECHAB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Tiempo que Trabajó</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FECHAB" type="text" class="form-control"
                                                       id="FECHAB" placeholder="Tiempo que Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.FECHAB">{{ errores.FECHAB[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="TELEFONOB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONOB" type="text" class="form-control"
                                                       id="	TELEFONOB" placeholder="Telefono">
                                                       <span class="text-danger"
                                                      v-if="errores.TELEFONOB">{{ errores.TELEFONOB[0] }}</span>
                                            </div>
                                        </div>

                                         <br>

                                        <h1 align="left"><strong>Referencias Personales</strong></h1>
                                        <br>

                                        

                                         <h3 align="left"><strong>Referencia A</strong></h3>
                                        <br>






                                         <div class="row">
                                            <label for="NOMBREA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombres</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.NOMBREA" type="text" class="form-control"
                                                       id="	NOMBREA" placeholder="Nombres">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBREA">{{ errores.NOMBREA[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="TELEFONORA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONORA" type="text" class="form-control"
                                                       id="	TELEFONORA" placeholder="Telefono">
                                                       <span class="text-danger"
                                                      v-if="errores.TELEFONORA">{{ errores.TELEFONORA[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="OCUPACIONA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Que funcion Realiza</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.OCUPACIONA" type="text" class="form-control"
                                                       id="OCUPACIONA" placeholder="Que funcion Realiza">
                                                       <span class="text-danger"
                                                      v-if="errores.OCUPACIONA">{{ errores.	OCUPACIONA[0] }}</span>
                                            </div>
                                        </div>

                                         <br>

                                        

                                         <h3 align="left"><strong>Referencia B</strong></h3>
                                        <br>





                                         <div class="row">
                                            <label for="NOMBREB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombres</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.NOMBREB" type="text" class="form-control"
                                                       id="	NOMBREB" placeholder="Nombres">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBREB">{{ errores.NOMBREB[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="TELEFONORB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Telefono o Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONORB" type="text" class="form-control"
                                                       id="	TELEFONORB" placeholder="Telefono">
                                                       <span class="text-danger"
                                                      v-if="errores.TELEFONORB">{{ errores.TELEFONORB[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="OCUPACIONB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Que funcion Realiza</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.OCUPACIONB" type="text" class="form-control"
                                                       id="OCUPACIONB" placeholder="Que funcion Realiza">
                                                       <span class="text-danger"
                                                      v-if="errores.OCUPACIONB">{{ errores.OCUPACIONB[0] }}</span>
                                            </div>
                                        </div>

                                        

                                                
                                            

                               
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Crear hoja de vida
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
                    Hoja de vida creada con exito
                </v-alert>
                <v-alert v-if="success===true"
                         id="alertSuccess"
                         name="alertSuccess"
                         dismissible
                         type="success"
                         class="alert"
                         transition="scale-transition"
                >
                    Recuerda que solo puedes crear una hoja de vida
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
         
            estudiante: {},
            errores: {},
            success: false,
            loaded: true,
            errors: {},
            ofertasos:[],
            

        }
    },

      mounted() {
        axios.get('ofertasos').then((response) => {
            this.ofertasos = response.data;
        })
    },
    
    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errores = {};
                axios.post('hojavida', this.estudiante).then(response => {
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
    background: darkred;
    width: 796px;
    margin-left: -110px;
}

select {
  word-wrap: normal;
  background: crimson;
  border-radius: 6px;
  -webkit-appearance: revert;
}




</style>