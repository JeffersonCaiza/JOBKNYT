<template>
    <div>
        <v-btn class="form-control" @click=openModal() style="text-transform: capitalize;">
            Cambiar Contraseña
        </v-btn>
        <div>
            <div v-if="show" class="modal__backdrop">
                <div class="modal__backdrop" @click="closeModal()"></div>
                <div class="modal__dialog">
                    <div class="modal__header card-header">
                        Cambio de Contraseña
                    </div>
                    <div class="modal__body">

                        <form method="POST" @submit.prevent="submit">

                            <div class="form-group">

                                <!--Current Password-->
                                <div class="row">
                                    <label for="current_password"
                                           class="col-md-4 col-form-label text-md-right">Contraseña Actual</label>

                                    <div class="col-md-6">
                                        <input id="current_password" type="password"
                                               class="form-control" name="current_password"
                                               v-model="changePassword.current_password"
                                               required autocomplete="new-current_password" minlength="8">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error['current_password'] }}
                                    </span>
                                    </div>
                                </div>

                                <!--New Password-->
                                <div class="row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">Contraseña Nueva</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control" name="password" v-model="changePassword.password"
                                               required autocomplete="new-password" minlength="8">

                                        <span v-for="error in errors" class="text-danger">
                                        {{ error['password'] }}
                                    </span>
                                    </div>
                                </div>

                                <!--Confirm Password-->
                                <div class="row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation"
                                               v-model="changePassword.password_confirmation"
                                               required autocomplete="new-password">
                                    </div>
                                </div>

                                <!--Buttons-->
                                <div class="row modal-footer">
                                    <v-btn class="btn-gray" @click="closeModal()"
                                           style="text-transform: capitalize;"
                                    >
                                        Cerrar
                                    </v-btn>
                                    <button type="submit" class="btn btn-primary">
                                        Guardar Contraseña
                                    </button>
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
                                        Contraseña cambiada con exito
                                    </v-alert>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "UpdatePassword",

    data() {
        return {
            show: false,
            changePassword: {},
            errors: [],
            success: false,
            loaded: true,
        }
    },
    methods: {
        closeModal() {
            this.show = false;
        },
        openModal() {
            this.show = true;
        },
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios.put('user/password', this.changePassword).then(response => {
                    this.changePassword = {}; //limpiar inputs
                    this.loaded = true;
                    this.success = true;
                }).catch(error => {
                    this.loaded = true;
                    if (error.response.status === 422) {
                        this.errors = error.response.data || [];
                    }
                });
            }
        },
    }
}
</script>

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
        width: 600px;
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

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
}

.btn-gray {
    color: #fff;
    background-color: #6c757d !important;
    border-color: #6c757d;
}
</style>
