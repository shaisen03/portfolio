<template>
    <NavBar></NavBar>
    <div class="container-fluid">
            <!-- <SideBar></SideBar>
            <LeftSideBar></LeftSideBar> -->
            <section v-if="$route.path === '/'" class="welcome-home-section" >
                <div class="home-content"  >
                    <router-view :key="$route.fullPath"></router-view>
                </div>
            </section>

            <section v-if="$route.path !== '/'" class="home-section" >
                <div class="home-content"  >
                    <router-view :key="$route.fullPath"></router-view>
                </div>
            </section>
    </div>
</template>

<script>
    import NavBar from './NavBar.vue';
    import SideBar from './SideBar.vue';
    import LeftSideBar from './LeftSideBar.vue';

    export default{
        components:{
            NavBar,
            SideBar,
            LeftSideBar,
        },
    }
</script>