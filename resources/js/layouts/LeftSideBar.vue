<template>
    <div class="right-sidebar" :class="{ 'close': isSidebarClosed }">
        <ul class="nav-links">
            <li>
                <i class='bx bx-menu' @click="toggleSidebar()"></i>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name" >Dashboard</span>
                </a>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-collection' ></i>
                        <span class="link_name">Category</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' @click="toggleArrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Category</a></li>
                    <li><a href="#">HTML & CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">PHP & MySQL</a></li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data(){ 0
            return{
                isSidebarClosed: false,
            }
        },
        methods: {
            toggleArrow(event) {
                let arrowParent = event.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");
            },

            toggleSidebar() {
                this.isSidebarClosed = !this.isSidebarClosed;
            },
        }
    }
</script>