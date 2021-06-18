<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-4">
                    <div  v-for="(academy,index) in academies" :key="index">
                        <div class="col mb-4">
                            <div   class="card shadow-sm  " >
                                <a :href="'academies/'+academy.slug">
                                    <img v-bind:src="academy.url_thumbl"  class="card-img-top" alt="">
                                </a>
                                <div class="card-body">
                                    <a :href="'academies/'+academy.slug">
                                        <h5 class="card-title"> <strong>  {{academy.name}} </strong>  </h5>
                                    </a>
                                    <p class="card-text">{{academy.description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {
            academies: [
                {"name":"String Orchestra","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a1.jpg","slug":"string-orchestra" },
                {"name":"Art","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a2.jpg","slug":"art" },
                {"name":"Theatre","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a3.jpg","slug":"theatre" },
                {"name":"Robotic","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a4.jpg","slug":"robotic" },
                {"name":"Piano","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a5.jpg","slug":"piano" },
                {"name":"Soccer","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a6.jpg","slug":"soccer" },
                {"name":"Maths","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a7.jpg","slug":"maths" },
                {"name":"Dance","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/thumbls/a8.jpg","slug":"dance" },
            ],
        };
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>

<style >
    .card-img, .card-img-top {
    border-top-left-radius: calc(1em - 1px);
    border-top-right-radius: calc(1em - 1px);
}

.card{
    border-radius: 1rem;
}

.navbar-dark .navbar-nav .nav-link {

    font-size: large;
    font-weight: bold;
    color: #fff;
}
</style>
