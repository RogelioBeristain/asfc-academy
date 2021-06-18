<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-4">
                    <div  v-for="(course,index) in courses" :key="index">
                        <div class="col mb-4">
                            <div class="card shadow-sm  " >
                                <a :href="'./unity/'+course.slug">
                                    <img v-bind:src="course.url_thumbl"  class="card-img-top" alt="">
                                </a>
                                <div class="card-body">
                                    <a :href="'./unity/'+course.slug">
                                        <h5 class="card-title"> <strong>  {{course.name}} </strong>  </h5>
                                    </a>
                                    <p class="card-text">{{course.description}}</p>
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
        courses: [
            {"name":"Kinder","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/violin/branches/course/thumbls/c1.png","slug":"kinder" },
            {"name":"Junior","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/violin/branches/course/thumbls/c2.png","slug":"junior" },
            {"name":"First Performace","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/violin/branches/course/thumbls/c3.png","slug":"first-performace" },
            {"name":"High Performace","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/violin/branches/course/thumbls/c4.png","slug":"high-performace" }
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
