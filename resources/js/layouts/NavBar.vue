<template>
    <div class="why-navbar" >
        <nav class="navbar navbar-expand-lg" :class="{'welcome-navbar': welcomeNavbar}">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <li class="active"><router-link to="/why-are-you-here" class="nav-link text-light">WHY ARE <span class="flicker">YOU </span>HERE? </router-link></li>
                        </li>
                        <li class="nav-item">
                            <li class="active"><router-link to="/" class="nav-link text-light">WANNA HANGOUT?</router-link></li>
                        </li>
                        <li class="nav-item dropdown">
                            <li class="active"><router-link to="/404" class="nav-link text-light">GET OUTTA HERE!</router-link></li>
                        </li>
                        <li class="nav-item dropdown">
                            <li class="active"><router-link to="/let-me-in" class="nav-link text-light">LET ME IN!</router-link></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                welcomeNavbar: false,
                isSticky: true,
            };
        },

        mounted(){
            this.$router.afterEach((to, from) => {
                if (to.path === '/') {
                    this.welcomeNavbar = true;
                } else {
                    this.welcomeNavbar = false;
                }
            });
            
            // window.addEventListener("scroll", this.handleScroll);

            // window.addEventListener("scroll", () => {
            //     const viewportHeight = window.innerHeight;
            //     const documentHeight = document.documentElement.scrollHeight;
            //     const maxScrollPosition = documentHeight - viewportHeight;
            //     console.log(window.scrollY);
            //     if(window.scrollY >= maxScrollPosition){
            //         this.isSticky = true;
            //     }
            //     else{
            //         this.isSticky = true;
            //     }
            // });

        },

        methods:{
        },

        beforeDestroy() {
            window.removeEventListener("scroll", this.handleScroll);
        },
    }
</script>