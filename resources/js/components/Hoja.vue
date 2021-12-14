<template>


    <div>
        <h1 class="text-center"><strong>Hoja de Vida</strong></h1>
        <div class="row" style="margin: 10px 0">
            <div style="display: flex; justify-content: flex-end;" class="">
                
                
                 <v-btn @click="update=false; openModal();" class="btn-blue">
                    <v-icon
                        small
                        style="margin-right: 3px"
                    >
                        mdi-plus-box
                    </v-icon>
                    Crea tu hoja de vida
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

                                       <!-- <h1 align="left"><strong>Informacion de Oferta</strong></h1>
                                        <br>

                                        <div class="row">
                                            <label for="NOMBRES"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Oferta</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.IdOferta.TituloOferta" type="text" class="form-control"
                                                       id="NOMBRES"
                                                       placeholder="Nombres">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBRES">{{ errores.NOMBRES[0] }}</span>
                                                
                                            </div>
                                        </div>-->


                                        <!--<div class="row">
                                            <label for="NOMBRES"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombres</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.IDHOJA.NOMBRESC" type="text" class="form-control"
                                                       id="NOMBRES"
                                                       placeholder="Nombres">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBRES">{{ errores.NOMBRES[0] }}</span>
                                                
                                            </div>
                                        </div>


                                          <div class="row">
                                            <label for="NOMBRES"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Nombres</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.CODUSUARIO.NOMBRE" type="text" class="form-control"
                                                       id="NOMBRES"
                                                       placeholder="Nombres">
                                                       <span class="text-danger"
                                                      v-if="errores.NOMBRES">{{ errores.NOMBRES[0] }}</span>
                                                
                                            </div>
                                        </div>-->
                                        
                                        

                                        
                                        <!--<div class="row">
                                            <label for="IdOferta"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Oferta</strong></label>
                                            <div class="col-md-6">
                                                


                                                <select required aria-required="true"
                                                class="form-control"
                                                name="IdOferta" id="IdOferta"
                                                v-model="estudiante.IdOferta"
                                        >
                                            <option
                                                disabled
                                                v-if="
                                                    estudiante.IdOferta === ofertas.IdOferta
                                                "
                                                v-for="ofertas in ofertasos"
                                                :value="ofertas.IdOferta"
                                            >
                                                {{ ofertas.TituloOferta }}
                                            </option>
                                        </select>
                                        <span class="text-danger"
                                                      v-if="errores.IdOferta">{{ errores.IdOferta[0] }}</span>

                                                       


                                                    
                                               
                                            </div>
                                        </div>-->


                                        
                                        

                                       
                                         


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
                                            <label for="CODUSUARIO"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Email</strong></label>
                                            <div class="col-md-6">
                                                <input  v-model="estudiante.EMAIL" type="text" class="form-control"
                                                       id="CODUSUARIO" placeholder="Email">   
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
                                                   class="col-md-4 col-form-label text-md-right"><strong>Desde cuando trabajo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FECHAA" type="date" class="form-control"
                                                       id="FECHAA" placeholder="Tiempo que Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.FECHAA">{{ errores.FECHAA[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="FECHAAA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Hasta cuando trabajo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FECHAAA" type="date" class="form-control"
                                                       id="FECHAAA" placeholder="Tiempo que Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.FECHAAA">{{ errores.FECHAAA[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="TELEFONOA"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONOA" type="text" class="form-control"
                                                       id="	TELEFONOA" placeholder="Celular">
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
                                                   class="col-md-4 col-form-label text-md-right"><strong>Desde cuando trabajo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FECHAB" type="date" class="form-control"
                                                       id="FECHAB" placeholder="Tiempo que Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.FECHAB">{{ errores.FECHAB[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="FECHABB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Hasta cuando trabajo</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.FECHABB" type="date" class="form-control"
                                                       id="FECHABB" placeholder="Tiempo que Trabajo">
                                                       <span class="text-danger"
                                                      v-if="errores.FECHABB">{{ errores.FECHABB[0] }}</span>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <label for="TELEFONOB"
                                                   class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONOB" type="text" class="form-control"
                                                       id="	TELEFONOB" placeholder="Celular">
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
                                                       id="	TELEFONORA" placeholder="Celular">
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
                                                   class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>
                                            <div class="col-md-6">
                                                <input v-model="estudiante.TELEFONORB" type="text" class="form-control"
                                                       id="	TELEFONORB" placeholder="Celular">
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
                                                      v-if="errores.OCUPACIONB">{{ errores.	OCUPACIONB[0] }}</span>
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
                    Recuerda que solo puedes crear una hoja de vida
                </v-alert>

                                        











                                        

                                        
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button @click="closeModal();" type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                        Cerrar
                                    </button>

                                      <button
                    @click="save()"
                    type="button"
                    class="btn btn-success btn-blue"
                    data-bs-dismiss="modal"
                  >
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
                loading-text="Aun no creas tu hoja de vida"
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
            success: false,
            headers: [
                //{text: 'Codigo Oferta', value:'CODUSUARIO.email'},
                {text: 'Nombres', value: 'NOMBRESC'},
                {text: 'Direccion', value:'DOMICILIO'},
                //{text: 'Email', value:'EMAIL'},
                //{text: 'Postulante', value: 'NOMBRES'},
                {text: 'Detalles', value: 'actions'},
  
            ],


            estudiante: {
               
                NOMBRESC: '',
                CEDULA: '',
                EMAIL:'',
                COLEGIO:'',
                TITULOCOLEGIO:'',
                UNIVERSIDAD:'',
                TITULOUNIVERSIDAD:'',
                TELEFONOS:'',
                EDAD:'',
                DOMICILIO:'',
                CURSOA:'',
                NIVELA:'',
                CURSOB:'',
                NIVELB:'',
                EMPRESAA:'',
                FUNCIONA:'',
                AREAA:'',
                FECHAA:'',
                FECHAAA:'',
                TELEFONOA:'',
                EMPRESAB:'',
                FUNCIONB:'',
                AREAB:'',
                FECHAB:'',
                FECHABB:'',
                TELEFONOB:'',
                NOMBREA:'',
                TELEFONORA:'',
                OCUPACIONA:'',
                NOMBREB:'',
                TELEFONORB:'',
                OCUPACIONB:'',
                CODUSUARIO:'',
                
                
                

            },
            id: 0,
            update: true,
            modal: 0,
            titleModal: ' ',
            estudiantes: [],
            //totalPages: 0,
           // perPage: 0,
            errores: {},
            show: false,
            ofertasos: [],
            borrar: true,
            lista_noveles:[],
            
           
        }

    },

    

    mounted() {
        //this.list();

        //axios.get('ofertasos').then((response) => {
          //  this.ofertasos = response.data;
        //})

        //axios.get('lista_noveleses').then((response) => {
          //  this.lista_noveles = response.data;
        //})
    },
    methods: {
       //list() {
         //  axios.get(`hoja`).then(res => {
           //    this.est = res.data;
           // this.estudiantes = this.est.data;
                //this.totalPages = this.est.meta.last_page;
               // this.perPage = this.est.meta.per_page;
            //});

            //async list() {

     //  const res = await axios.get("/hoja");
     //       this.estudiantes = res.data;
          
    //},

    list() {
            axios.get(`hoja`).then(res => {
                this.est = res.data;
               this.estudiantes = this.est.data;
          //      this.totalPages = this.est.meta.last_page;
          //      this.perPage = this.est.meta.per_page;
            });

    },



    


        
        async save() {
            try {
                if (this.update) {
                    const res = await axios.put('hoja/' + this.id, this.estudiante);
                    this.closeModal();
                } else {
                    const res = await axios.post('hojavida', this.estudiante);

                    this.success = true;
                    
                   
                }
                //this.closeModal();
                this.list();

            } catch (error) {
                if (error.response.data) {
                    this.errores = error.response.data.errors
                }
            }
        },

         async eliminar() {
      if (this.borrar) {
        const res = await axios.delete("postulaciones/" + this.id, this.estudiante);
      }
      this.closeModal();
      this.list();
    },

       

        openModal(data = {}) {
            this.show = true;
            this.modal = 1;
            
            if (this.update) {
                this.success = false;
                this.id = data.IDHOJA,
                this.titleModal = "EDITAR HOJA DE VIDA";
                
                //this.estudiante.IdOferta = data.IdOferta;
             
                this.estudiante.NOMBRESC = data.NOMBRESC;
                this.estudiante.CEDULA = data.CEDULA;
                this.estudiante.EMAIL = data.EMAIL;
                this.estudiante.COLEGIO = data.COLEGIO;
                this.estudiante.TITULOCOLEGIO = data.TITULOCOLEGIO;
                this.estudiante.UNIVERSIDAD = data.UNIVERSIDAD;
                this.estudiante.TITULOUNIVERSIDAD = data.TITULOUNIVERSIDAD;
                this.estudiante.TELEFONOS = data.TELEFONOS;
                this.estudiante.EDAD = data.EDAD;
                this.estudiante.DOMICILIO = data.DOMICILIO;
                this.estudiante.CURSOA = data.CURSOA;
                this.estudiante.NIVELA = data.NIVELA;
                this.estudiante.CURSOB = data.CURSOB;
                this.estudiante.NIVELB = data.NIVELB;
                this.estudiante.EMPRESAA = data.EMPRESAA;
                this.estudiante.FUNCIONA = data.FUNCIONA;
                this.estudiante.AREAA = data.AREAA;
                this.estudiante.FECHAA = data.FECHAA;
                this.estudiante.FECHAAA = data.FECHAAA;
                this.estudiante.TELEFONOA = data.TELEFONOA;
                this.estudiante.EMPRESAB = data.EMPRESAB;
                this.estudiante.FUNCIONB = data.FUNCIONB;
                this.estudiante.AREAB = data.AREAB;
                this.estudiante.FECHAB = data.FECHAB;
                this.estudiante.FECHABB = data.FECHABB;
                this.estudiante.TELEFONOB = data.TELEFONOB;
                this.estudiante.NOMBREA = data.NOMBREA;
                this.estudiante.TELEFONORA = data.TELEFONORA;
                this.estudiante.OCUPACIONA = data.OCUPACIONA;
                this.estudiante.NOMBREB = data.NOMBREB;
                this.estudiante.TELEFONORB = data.TELEFONORB;
                this.estudiante.OCUPACIONB = data.OCUPACIONB;
                this.estudiante.CODUSUARIO = data.CODUSUARIO;
              



                

                
                
            } else {
               
                this.titleModal = "Crea tu hoja de vida";
                
                this.estudiante.NOMBRESC = '';
                this.estudiante.CEDULA = '';
                this.estudiante.EMAIL = '';
                this.estudiante.COLEGIO = '';
                this.estudiante.TITULOCOLEGIO = '';
                this.estudiante.UNIVERSIDAD = '';
                this.estudiante.TITULOUNIVERSIDAD = '';
                this.estudiante.TELEFONOS = '';
                this.estudiante.EDAD = '';
                this.estudiante.DOMICILIO = '';
                this.estudiante.CURSOA = '';
                this.estudiante.NIVELA = '';
                this.estudiante.CURSOB = '';
                this.estudiante.NIVELB = '';
                this.estudiante.EMPRESAA = '';
                this.estudiante.FUNCIONA = '';
                this.estudiante.AREAA = '';
                this.estudiante.FECHAA = '';
                this.estudiante.TELEFONOA = '';
                this.estudiante.EMPRESAB = '';
                this.estudiante.FUNCIONB = '';
                this.estudiante.AREAB = '';
                this.estudiante.FECHAB = '';
                this.estudiante.TELEFONOB = '';
                this.estudiante.NOMBREA = '';
                this.estudiante.TELEFONORA = '';
                this.estudiante.OCUPACIONA = '';
                this.estudiante.NOMBREB = '';
                this.estudiante.TELEFONORB = '';
                this.estudiante.OCUPACIONB = '';
                
        ;

                
                
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
    width: 230%;
    background: steelblue;
    margin-left: -310px;
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
    background: #FFAE00;
}

.theme--light.v-data-table {
    background-color:#00455E;
    color: rgb(0 0 6 / 104%);
}

</style>
