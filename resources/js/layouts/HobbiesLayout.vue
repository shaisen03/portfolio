<template>
    <div>
        <div class="custom-galaxy">
        </div>
        
        <div class="custom-divider flicker">
            <div class="skills-zone">
                <!-- <i class="bx bxs-radiation "></i>  -->
                <span>SKILLS</span>
                <!-- <i class="bx bxs-radiation "></i> -->
            </div>
        </div>

       <div class="skills-container">
                <div class="home-content">
                    <div class="welcome-content">
                        <div class="skills-card">
                            <div class="web-container" >
                                <div class="api row">
                                    <div class="right-attach" ref="skillsCardParent1"><i class='bx bx-dots-vertical-rounded' ref="switchAnimate1" @click="toggleCloseMenu(1)"></i><label>Skills</label></div>
                                    <ul class="sub-menu" ref="subMenu1" @click="toggleCloseMenu">
                                        <li><a href="#">C#</a></li>
                                        <li><a href="#">Docker</a></li>
                                        <li><a href="#">Azure</a></li>
                                        <li><a href="#">Gitlab</a></li>
                                        <li><a href="#">ASP.NET Core</a></li>
                                        <li><a href="#">Laravel</a></li>
                                        <li><a href="#">IIS</a></li>
                                        <li><a href="#">Agile</a></li>
                                        <li><a href="#">Clean Architecture</a></li>
                                        <li><a href="#">CQRS</a></li>
                                        <li><a href="#">MVC</a></li>
                                        <li><a href="#">SQL Server</a></li>
                                        <li><a href="#">MariaDB</a></li>
                                        <li><a href="#">MsSql</a></li>
                                        <li><a href="#">Rest API</a></li>
                                        <li><a href="#">Soap API</a></li>
                                        <li><a href="#">JSON</a></li>
                                        <li><a href="#">OOP</a></li>
                                        <li><a href="#">HTML & CSS</a></li>
                                        <li><a href="#">PHP</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                        <li><a href="#">JQuery</a></li>
                                        <li><a href="#">Ajax</a></li>
                                        <li><a href="#">Axios</a></li>
                                        <li><a href="#">Vue.js</a></li>
                                        <li><a href="#">React.js</a></li>
                                        <li><a href="#">Blazor</a></li>
                                        <li><a href="#">Strapi</a></li>
                                        <li><a href="#">Prometheus</a></li>
                                        <li><a href="#">Grafana</a></li>

                                    </ul>
                                    <div class="right-attach" ref="skillsCardParent2"><i class='bx bx-dots-vertical-rounded' ref="switchAnimate2" @click="toggleCloseMenu(2)"></i><label>Projects</label></div>
                                    <ul class="sub-menu " ref="subMenu2">
                                        <li><a href="#">ECommerce</a></li>
                                        <li><a href="#">Delivery App</a></li>
                                        <li><a href="#">Payment Facilitator</a></li>
                                        <li><a href="#">Fraud Detection</a></li>
                                    </ul>
                                      <!-- <div class="left-attach col-lg-1"><i class='bx bxs-show' ref="skillsShowIcon2" @click="viewSkills(2)"></i></div> -->
                                </div> <div>
    <div class="animation">
      <div
        class="anm_mod full"
        :class="{ active: isAnimationActive }"
      >
        anm_mod full
      </div>
      <div class="anm_mod left fast">
        anm_mod left fast
      </div>
      <div class="anm_mod right delay">
        anm_mod right delay
      </div>
    </div>

    <div class="org_to_top">
      <a href="#" @click="scrollToTop">Scroll to Top</a>
    </div>
  </div>
                                
                            </div>
                        </div>
                       
                        <div class=" skills-door ">
                            <div class="skills-door-content" >
                            </div> 
                            <div class="skills-door-left col-lg-6" ref="door1" :class="{ 'door1-open': animatedDoor1, 'door1-close': !animatedDoor1 }"  @click="toggleDoors()"> 
                                <label class=" float-end text-white mt-5 fs-4 flicker"></label>
                            </div> 
                            <div class="skills-door-right col-lg-6" ref="door2" :class="{ 'door2-open': animatedDoor2, 'door2-close': !animatedDoor1 }" @click="toggleDoors()"> 
                                <label class=" text-white mt-5 fs-4 flicker "></label>
                            </div>
                        </div>
                      
                    </div>
                </div>
        </div> 
    </div>
    
</template>
  
<script>
    export default {
        data() {
            return {
                animatedDoor1: false,
                animatedDoor2: false,
                isAnimationActive: false,
            };
        },

        mounted() {
            window.addEventListener('scroll', this.handleScroll);
        },

        destroyed() {
            window.removeEventListener('scroll', this.handleScroll);
        },


        methods: {
            viewSkills(number){
                const parentDiv = this.$refs['skillsCardParent' + number];
                const icon = this.$refs['skillsShowIcon' + number];
                if(parentDiv.classList.contains('open-sword-left')){
                    icon.classList.remove('bxs-show');
                    icon.classList.toggle('bxs-hide');
                    parentDiv.classList.remove('open-sword-left');
                    parentDiv.classList.toggle('close-sword-left');
                }else {
                    icon.classList.remove('bxs-hide');
                    icon.classList.toggle('bxs-show');
                    parentDiv.classList.remove('close-sword-left');
                    parentDiv.classList.add('open-sword-left');
                }

                this.isOpen = !this.isOpen;
            },

            toggleCloseMenu(number) {
                const subMenu = this.$refs['subMenu' + number]; 
                const switchAnimation = this.$refs['switchAnimate' + number];

                subMenu.classList.toggle('close-menu');
                switchAnimation.classList.toggle('switch-animate');
                
                void switchAnimation.offsetWidth;
                
                switchAnimation.classList.add('switch-animate');
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
            
            handleScroll() {
                const position = this.$el.querySelector('.animation').offsetTop;
                const scroll = window.scrollY;
                const windowHeight = window.innerHeight;

                if (scroll > position - windowHeight) {
                    this.isAnimationActive = true;
                } else if (scroll < 100) {
                    this.isAnimationActive = false;
                }
            },

            scrollToTop() {
                const speed = 800;
                const target = document.documentElement;
                const position = 0;
                window.scrollTo({ top: position, behavior: 'smooth' });
            },
        },
  };
  </script>
  