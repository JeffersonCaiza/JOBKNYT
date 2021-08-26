<template>
    <div class="row">
        <div class="col-md-2">
            <menu-component></menu-component>
        </div>
        <div class="col-md-9">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: "App",

    props: ["user"],
}
</script>

<style scoped>

</style>
