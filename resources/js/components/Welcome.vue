<template>
    <div class="welcome-content">
        <div class="card1" :class="{ 'animate-slide-in': animated }" @animationend="onAnimationEnd">
            <div class="row">
                <div class="col-lg-6">
                    <img class="welcome-img" :class="{ 'img-animate': animated }" src="/assets/img/New_Store_Leon.webp" alt="Right Scifi Door" @click="showDescription()">
                </div>
                <div class="col-lg-6" >
                    <p  :class="{'description': desc}">Leon Scott Kennedy is an American of Italian descent 
                        currently employed as a federal agent by the Division of Security Operations (D.S.O.), 
                        a counter-terrorism agency under direct Presidential command. Kennedy is a known survivor 
                        of the 1998 Raccoon City Destruction Incident, at the time a police officer. 
                        Following his escape, he was forcefully recruited into a top secret anti-Umbrella team under 
                        USSTRATCOM devoted to anti-B.O.W. combat, serving it until 2011 in repeated operations around the world.
                    </p>
                </div>
            </div>
        <button class="btn btn-primary btn-toggle-description " @click="showDescription()">Read More...</button>
        </div>
                <i class="bx bxs-radiation rad"></i>

        <!-- <div class=" door">
            <div class="door1-content" :class="{ 'add-background': addBackground }">
            </div> 
            <div class="door1 col-lg-6" ref="door1" :class="{ 'door1-open': animatedDoor1, 'door1-close': !animatedDoor1 }"  @click="toggleDoors()"> 
                <label class=" float-end text-white mt-5 fs-4 flicker">DON'T</label>
            </div> 
            <div class="door2 col-lg-6" ref="door2" :class="{ 'door2-open': animatedDoor2, 'door2-close': !animatedDoor1 }" @click="toggleDoors()"> 
                <label class=" text-white mt-5 fs-4 flicker ">OPEN</label>
            </div>
        </div> -->
    </div>
    
</template>

<script>
    export default {
        data() {
            return {
                animated: false,
                animatedDoor1: false,
                animatedDoor2: false,
                insetValue: 0,
                desc: false,
                addBackground: false,
            };
        },

        methods: {
            onAnimationEnd() {
                this.animated = false;
            },

            toggleDoors() {
                if (this.animatedDoor1 || this.animatedDoor2) {
                    this.closeDoors();
                } else {
                    this.openDoors();
                }
            },

            openDoors() {
                this.animatedDoor1 = true;
                this.animatedDoor2 = true;
                this.addBackground = true;
            },

            closeDoors(){
                this.animatedDoor1 = false;
                this.animatedDoor2 = false;
                this.addBackground = false;
            },

            showDescription(){
                this.desc = !this.desc;
            },
    //         handleMouseMove(event) {
    //   const shadow = document.querySelector('.shadow');
    //   const x = event.clientX - document.documentElement.clientWidth * 1.5;
    //   const y = event.clientY - document.documentElement.clientHeight * 1.5;
    //   shadow.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
    //         },

            
        },

        computed:{

        },

        mounted() {
            setTimeout(() => {
                this.animated = true; 
            }, 100);
        },


      
    };
</script>