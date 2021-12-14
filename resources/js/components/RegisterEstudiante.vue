<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registro de Usuario</div>

                    <div class="card-body">

                        <form method="POST" @submit.prevent="submit">

                            <div class="form-group">

                                <!--Nombre-->
                                <div class="row">
                                    <label for="NOMBRE"
                                           class="col-md-4 col-form-label text-md-right">Nombre Estudiante</label>

                                    <div class="col-md-6">
                                        <input id="NOMBRE" type="text"
                                               class="form-control" name="NOMBRE" v-model="fields.NOMBRE"
                                               required autocomplete="NOMBRE" autofocus>

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.NOMBRE }}
                                    </span>
                                    </div>
                                </div>

                                
                                <!--<div class="row">
                                    <label for="APELLIDO"
                                           class="col-md-4 col-form-label text-md-right">Cedula</label>

                                    <div class="col-md-6">
                                        <input id="APELLIDO" type="text"
                                               class="form-control" name="APELLIDO" v-model="fields.APELLIDO"
                                               autocomplete="APELLIDO">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.APELLIDO }}
                                    </span>
                                    </div>
                                </div>

                               
                                <div class="row">
                                    <label for="DIRECCION"
                                           class="col-md-4 col-form-label text-md-right">Dirección</label>

                                    <div class="col-md-6">
                                        <input id="DIRECCION" type="text"
                                               class="form-control" name="DIRECCION" v-model="fields.DIRECCION"
                                               autocomplete="DIRECCION">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.DIRECCION }}
                                    </span>

                                    </div>
                                </div>

                              
                                <div class="row">
                                    <label for="TELEFONO"
                                           class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                    <div class="col-md-6">
                                        <input id="TELEFONO" type="text"
                                               class="form-control" name="TELEFONO" v-model="fields.TELEFONO"
                                               autocomplete="TELEFONO">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.TELEFONO }}
                                    </span>
                                    </div>
                                </div>

                                
                                <div class=" row">
                                    <label for="CELULAR"
                                           class="col-md-4 col-form-label text-md-right">Celular</label>

                                    <div class="col-md-6">
                                        <input id="CELULAR" type="text"
                                               class="form-control" name="CELULAR" v-model="fields.CELULAR"
                                               autocomplete="CELULAR">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.CELULAR }}
                                    </span>
                                    </div>
                                </div>

                                 <div class=" row">
                                    <label for="ESTADO"
                                           class="col-md-4 col-form-label text-md-right">Instrucccion Bachiller/Profesional</label>

                                    <div class="col-md-6">
                                        <input id="ESTADO" type="text"
                                               class="form-control" name="ESTADO" v-model="fields.ESTADO"
                                               autocomplete="ESTADO">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.ESTADO }}
                                    </span>
                                    </div>
                                </div>-->

                                <!--rol-->
                                <div class="row">
                                    <label for="CODROL"
                                           class="col-md-4 col-form-label text-md-right">Rol</label>
                                    <div class="col-md-6">
                                        <select required aria-required="true"
                                                class="form-control"
                                                name="CODROL" id="CODROL"
                                                v-model="fields.CODROL"
                                        >
                                            <option value="" disabled selected> seleccione un rol...</option>
                                            <option v-for="rol in roles" :value="rol.CODROL">{{ rol.NOMBRE }}</option>
                                        </select>

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error.CODROL }}
                                    </span>
                                    </div>
                                </div>

                                <!--email-->
                                <div class="row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">
                                        Correo
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

                                <!--password-->
                                <div class="row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control" name="password" v-model="fields.password"
                                               required autocomplete="new-password" minlength="8">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error['password'] }}
                                    </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" v-model="fields.password_confirmation"
                                               required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit"  class="btn btn-primary form-control">
                                            Registrar Usuario
                                        </button>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--       Modal Success-->
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

.card {
    
    background: #426FAF;
   
    border-radius: 33px;
}
</style>