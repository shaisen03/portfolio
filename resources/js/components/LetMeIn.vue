<template>
    <div class="let-me-in-form">
        <form @submit.prevent="Login()" class="form-control">
            <input type="text" v-model="user.username" name="username" placeholder="Username" class="form-text form-control" required>
            <input type="password" v-model="user.password" name="password" placeholder="Username" class="form-text form-control" required>
            <button type="submit" class="btn btn-primary form-control" >Login</button>
        </form>
    </div>
 </template>
 
 <script>
    export default {
        data() {
            return {
                user:{
                username: '',
                password: '',
                }
            };
        },

        mounted(){
        },

        methods: {
            Login(){
                axios.post("/api/login", this.user)
                .then((response) => {
                    console.log(response.data.message);
                    console.log(response.data.password);
                    
                });
            }
        },
    };
 </script>
 