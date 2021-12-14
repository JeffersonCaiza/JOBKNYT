<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Perfil</strong></div>
                    <div class="card-body">
                        <form method="POST" @submit.prevent="submit">
                            <div class="form-group">
                                <!--Nombre-->
                                <div class="row">
                                    <label
                                        for="NOMBRE"
                                        class="col-md-4 col-form-label text-md-right"
                                        ><strong>Nombre</strong></label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="NOMBRE"
                                            type="text"
                                            class="form-control"
                                            name="NOMBRE"
                                            v-model="user.NOMBRE"
                                            required
                                            autocomplete="NOMBRE"
                                            autofocus
                                        />

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.NOMBRE }}
                                        </span>
                                    </div>
                                </div>

                               
                                <!--<div class="row">
                                    <label
                                        for="APELLIDO"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Cedula</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="APELLIDO"
                                            type="text"
                                            class="form-control"
                                            name="APELLIDO"
                                            v-model="user.APELLIDO"
                                            autocomplete="APELLIDO"
                                        />

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.APELLIDO }}
                                        </span>
                                    </div>
                                </div>

                               
                                <div class="row">
                                    <label
                                        for="DIRECCION"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Dirección</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="DIRECCION"
                                            type="text"
                                            class="form-control"
                                            name="DIRECCION"
                                            v-model="user.DIRECCION"
                                            autocomplete="DIRECCION"
                                        />

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.DIRECCION }}
                                        </span>
                                    </div>
                                </div>

                               
                                <div class="row">
                                    <label
                                        for="TELEFONO"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Teléfono</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="TELEFONO"
                                            type="text"
                                            class="form-control"
                                            name="TELEFONO"
                                            v-model="user.TELEFONO"
                                            autocomplete="TELEFONO"
                                        />

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.TELEFONO }}
                                        </span>
                                    </div>
                                </div>

                                
                                <div class=" row">
                                    <label
                                        for="CELULAR"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Celular</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="CELULAR"
                                            type="text"
                                            class="form-control"
                                            name="CELULAR"
                                            v-model="user.CELULAR"
                                            autocomplete="CELULAR"
                                        />

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.CELULAR }}
                                        </span>
                                    </div>
                                </div>

                                <div class=" row">
                                    <label
                                        for="ESTADO"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Instruccion</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="ESTADO"
                                            type="text"
                                            class="form-control"
                                            name="ESTADO"
                                            v-model="user.ESTADO"
                                            autocomplete="ESTADO"
                                        />

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.ESTADO }}
                                        </span>
                                    </div>
                                </div>-->

                                <!--rol-->
                                <div class="row">
                                    <label
                                        for="CODROL"
                                        class="col-md-4 col-form-label text-md-right"
                                        ><strong>Rol</strong></label
                                    >
                                    <div class="col-md-6">
                                        <select
                                            required
                                            aria-required="true"
                                            class="form-control"
                                            name="CODROL"
                                            id="CODROL"
                                            v-model="user.CODROL"
                                        >
                                            <option
                                                disabled
                                                v-if="
                                                    user.CODROL === rol.CODROL
                                                "
                                                v-for="rol in roles"
                                                :value="rol.CODROL"
                                            >
                                                {{ rol.NOMBRE }}
                                            </option>
                                        </select>

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.CODROL }}
                                        </span>
                                    </div>
                                </div>

                                <!--email-->
                                <div class="row">
                                    <label
                                        for="email"
                                        class="col-md-4 col-form-label text-md-right"
                                    >
                                        <strong>Correo</strong> 
                                    </label>

                                    <div class="col-md-6">
                                        <input
                                            id="email"
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            v-model="user.email"
                                            required
                                            autocomplete="email"
                                        />

                                        <span
                                            v-for="error in errors"
                                            class="text-danger"
                                        >
                                            {{ error.email }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Button update password-->
                                <div class="row">
                                    <div class="col-md-6 offset-md-4">
                                        <UpdatePassword></UpdatePassword>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button
                                            type="submit"
                                            class="btn btn-primary form-control"
                                        >
                                            Guardar Información
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
                <v-alert
                    v-if="success === true"
                    id="alertSuccess"
                    name="alertSuccess"
                    dismissible
                    type="success"
                    class="alert"
                    transition="scale-transition"
                >
                    Información actualizada con exito
                </v-alert>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Perfil",

    data() {
        return {
            roles: [],
            user: App.user,
            errors: [],
            success: false,
            loaded: true
        };
    },
    mounted() {
        this.handleRoles();
    },

    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios
                    .put("user/profile-information", this.user)
                    .then(response => {
                        this.loaded = true;
                        this.success = true;
                    })
                    .catch(error => {
                        this.loaded = true;
                        if (error.response.status === 422) {
                            this.errors = error.response.data || [];
                        }
                    });
            }
        },
        handleRoles() {
            axios.get(`roles`).then(response => {
                this.roles = response.data;
            });
        }
    }
};
</script>

<style scoped>
.alert {
    background-color: #4caf50;
    border: none;
    position: absolute;
    bottom: 0%;
    right: 0%;
}

.card {
    
    background: steelblue;
   
    border-radius: 33px;
}
</style>
