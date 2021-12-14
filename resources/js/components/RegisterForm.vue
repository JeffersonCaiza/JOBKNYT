<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Registro de Bachiller o Profesional</strong></div>

                    <div class="card-body">

                        <form method="POST" @submit.prevent="submit">

                            <div class="form-group">

                                <!--Nombre-->
                                <div class="row">
                                    <label for="NOMBRE"
                                           class="col-md-4 col-form-label text-md-right"><strong>Nombre</strong></label>

                                    <div class="col-md-6">
                                        <input id="NOMBRE" type="text"
                                               class="form-control" name="NOMBRE" v-model="fields.NOMBRE"
                                               required autocomplete="NOMBRE" autofocus>

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.NOMBRE }}
                                    </span>
                                    </div>
                                </div>
                              

                                <!--Apellido-->
                                <!--<div class="row">
                                    <label for="APELLIDO"
                                           class="col-md-4 col-form-label text-md-right"><strong>Cedula</strong></label>

                                    <div class="col-md-6">
                                        <input id="APELLIDO" type="number" maxlength="10"
                                               class="form-control" name="APELLIDO" v-model="fields.APELLIDO"
                                               required autocomplete="APELLIDO" autofocus>

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.APELLIDO }}
                                    </span>
                                    </div>
                                </div>-->
                                 

                                <!--Direccion-->
                                <!--<div class="row">
                                    <label for="DIRECCION"
                                           class="col-md-4 col-form-label text-md-right"><strong>Dirección</strong></label>

                                    <div class="col-md-6">
                                        <input id="DIRECCION" type="text"
                                               class="form-control" name="DIRECCION" v-model="fields.DIRECCION"
                                               required autocomplete="DIRECCION" autofocus>

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.DIRECCION }}
                                    </span>

                                    </div>
                                </div>
                                 <br>-->

                                <!--Telefono-->
                                <!--<div class="row">
                                    <label for="TELEFONO"
                                           class="col-md-4 col-form-label text-md-right"><strong>Teléfono</strong></label>

                                    <div class="col-md-6">
                                        <input id="TELEFONO" type="text"
                                               class="form-control" name="TELEFONO" v-model="fields.TELEFONO"
                                               required autocomplete="TELEFONO" autofocus>

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.TELEFONO }}
                                    </span>
                                    </div>
                                </div>
                                 <br>

                               
                                <div class=" row">
                                    <label for="CELULAR"
                                           class="col-md-4 col-form-label text-md-right"><strong>Celular</strong></label>

                                    <div class="col-md-6">
                                        <input id="CELULAR" type="text"
                                               class="form-control" name="CELULAR" v-model="fields.CELULAR"
                                               required autocomplete="CELULAR" autofocus>

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.CELULAR }}
                                    </span>
                                    </div>
                                </div>
                                 

                                 <div class=" row">
                                    <label for="ESTADO"
                                           class="col-md-4 col-form-label text-md-right">Instrucccion</label>

                                    <div class="col-md-6">
                                        <input type="radio" id="uno" value="Bachiller" v-model="fields.ESTADO">
                                        <label for="uno">Bachiller</label>
                                        
                                        <input type="radio" id="Dos" value="Profesional" v-model="fields.ESTADO">
                                        <label for="Dos">Profesional</label>
                                        <br>
                                     

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.ESTADO }}
                                    </span>
                                    </div>
                                </div>-->
                                 
                                 <!--<br>

                                  <div class=" row">
                                    <label for="ROL"
                                           class="col-md-4 col-form-label text-md-right"><strong>Rol</strong></label>

                                    <div class="col-md-6">
                                        
                                        <input type="radio" id="Dos" value="2" v-model="fields.CODROL">
                                        <label for="Dos"><strong>Bachiller/Profesional</strong></label>
                                        <br>
                                        

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.CODROL }}
                                    </span>
                                    </div>
                                </div>
                                 <br>-->

                                
                                
                                
                                
                                
                             




                                <!--email-->
                                <div class="row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">
                                        <strong>Correo</strong>
                                    </label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control" name="email" v-model="fields.email"
                                               required autocomplete="email"
                                        >

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.email }}
                                    </span>
                                    </div>
                                </div>
                                 <br>

                                <!--password-->
                                <div class="row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right"><strong>Contraseña</strong></label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control" name="password" v-model="fields.password"
                                               required autocomplete="new-password" minlength="8">
                                               

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error['password'] }}
                                    </span>
                                    </div>
                                                


                                                 <v-btn
                        small
                        class="mr-2"
                        onclick="mostrarContrasena()"
                        style="background-color: #38c172; width: 7%;
    margin-top: 12px;
    margin-left: -65px;
    height: 37px;"
                    >
                          <v-icon
                            
                            color="#fff"
                        >
                            mdi-Eye-Outline
                            
                        </v-icon>
                    </v-btn>


                                </div>
                                 <br>

                                <div class="row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right"><strong>Confirmar Contraseña</strong></label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" v-model="fields.password_confirmation"
                                               required autocomplete="new-password">
                                    </div>
                                      <v-btn
                        small
                        class="mr-2"
                        onclick="mostrarContrasenia()"
                        style="background-color: #38c172; width: 7%;
    margin-top: 12px;
    margin-left: -65px;
    height: 37px;"
                    >
                          <v-icon
                            
                            color="#fff"
                        >
                           mdi-Eye-Outline
                            
                        </v-icon>
                    </v-btn>
                                </div>
                                 <br>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Registrar Usuario
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
                    Usuario registrado con exito 
                </v-alert>
            </div>
                </div>
            </div>
            
           
        </div>
    </div>
</template>

<script>





export default {
    name: "RegisterForm",

    

    data() {
        return {
            roles: [],
            fields: {},
            errors: {},
            success: false,
            loaded: true,

        }
    },
    mounted() {
        axios.get('roles').then((response) => {
            this.roles = response.data;
        })
    },
    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios.post('registro', this.fields).then(response => {
                    this.fields = {}; //Clear input fields.
                    this.loaded = true;
                    this.success = true;
                    window.location.href = '/login'
                   
                }).catch(error => {
                    this.loaded = true;
                    if (error.response.status === 422) {
                        this.errors = error.response.data || {};
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
}

.boton{
    background: rgb(0, 72, 139);
    width: 10%;
    height: 39px;
    margin-top: 11px;
    border-radius: 12px;
    margin-left: -14px;

}

.boton1{
    background: rgb(0, 72, 139);
    width: 10%;
    height: 39px;
    margin-top: 20px;
    border-radius: 12px;

    margin-top: 11px;
   
    margin-left: -14px;

}


</style>
