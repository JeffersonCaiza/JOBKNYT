<template>
    <v-row justify="center">
        <v-expansion-panels accordion>
            <v-expansion-panel v-for="(item, i) in menuData" :key="i + 'item'">
                <div v-for="(elemento, j) in item.roles" :key="j + 'rol'">
                    <div v-if="elemento == user.CODROL">
                        <!-- -->
                        <router-link
                            :to="item.path"
                            style="text-decoration: none"
                        >
                            <v-expansion-panel-header
                                style="display: -webkit-box; color: rgba(0, 0, 0, 0.54)"
                                v-if="item.sub"
                            >
                                <v-icon class="iconMenu">
                                    {{ item.icon }}
                                </v-icon>
                                {{ item.text }}
                            </v-expansion-panel-header>

                            <v-btn
                                plain
                                block
                                style=" padding: 16px 24px; height: auto; text-transform: capitalize;"
                                class="btnMenu"
                                v-else
                            >
                                <v-icon class="iconMenu">
                                    {{ item.icon }}
                                </v-icon>
                                {{ item.text }}
                            </v-btn>
                        </router-link>
                        <!-- -->

                        <!-- -->
                        <v-expansion-panel-content
                            v-for="(subItem, index) in item.sub"
                            :key="index"
                        >
                            <router-link
                                :to="subItem.path"
                                style="text-decoration: none"
                            >
                                <v-btn
                                    plain
                                    block
                                    style="text-transform: capitalize;"
                                >
                                    <v-icon class="iconMenu">
                                        {{ subItem.icon }}
                                    </v-icon>
                                    {{ subItem.text }}
                                </v-btn>
                            </router-link>
                        </v-expansion-panel-content>
                        <!-- -->
                    </div>
                </div>
            </v-expansion-panel>
        </v-expansion-panels>
    </v-row>
</template>

<script>
import {
    mdiAccount,
    mdiClipboardListOutline,
    mdiAccountPlus,
    mdiCreditCardOutline,
    mdiAccountGroup,
    mdiClipboardTextOutline
} from "@mdi/js";

export default {
    data: () => ({
        menuData: [
            {
                text: "Perfil",
                path: "/perfil",
                icon: mdiAccount,
                roles: [1, 2]
            },
            {
                text: "Registrar Usuario",
                path: "/registro",
                icon: mdiAccountPlus,
                roles: [1]
            },
            
            {
                text: "perfil empresa",
                path: "/perfil_empresa",
                icon: mdiClipboardListOutline,
                roles: [3],
               
            },
              {
                text: "Registrar Empresa",
                path: "/registro_empresa",
                icon: mdiAccountPlus,
                roles: [1],
               
            },
            
            {
                text: "Ofertas",
                path: "/ofertas_laborales",
                icon: mdiAccountGroup,
                roles: [2]
            },
            {
                text: "Ofertas",
                path: "/ofertas",
                icon: mdiCreditCardOutline,
                roles: [3]
            },
            {
                text: "Ofertas",
                path: "/administrador",
                icon: mdiClipboardListOutline,
                roles: [1],
               
            },
            {
                text: "Usuarios",
                path: "/usuarios",
                icon: mdiAccountGroup,
                roles: [1],
               
            },

            {
                text: "Postulaciones",
                path: "/postulaciones",
                icon: mdiAccountGroup,
                roles: [2],
               
            },

            {
                text: "Postulaciones",
                path: "/Postulaciones_Empresa",
                icon: mdiAccountGroup,
                roles: [3],
               
            },
            

        ],
        user: App.user,
        show: false
    }),
};
</script>

<style scoped>
.iconMenu {
    padding: 0 20px;
}

.btnMenu {
    display: -webkit-box;
}
</style>