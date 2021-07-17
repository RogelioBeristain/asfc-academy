<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="row row-cols-1 row-cols-md-4">
                <div  v-for="(branch,index) in branches" :key="index">
                    <div class="col mb-4">
                        <div class="card shadow-sm  " >
                            <a :href="'course/'+branch.slug">
                                <img v-bind:src="branch.url_thumbl"  class="card-img-top" alt="">
                            </a>
                            <div class="card-body">
                                <a :href="'course/'+branch.slug">
                                    <h5 class="card-title"> <strong>  {{branch.name}} </strong>  </h5>
                                </a>
                                <p class="card-text">{{branch.description}}</p>
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
        branches: [
            {"name":"Violin","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/violin/branches/thumbls/branch1.png","slug":"violin" },
            {"name":"Viola","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/violin/branches/thumbls/branch2.png","slug":"viola" },
            {"name":"Violonchelo","description":"En esta academia podras aprender a ...", "url_thumbl":"/assets/academias/violin/branches/thumbls/branch3.png","slug":"violonchelo" }
        ],
    };
},
    mounted() {
        console.log("Component mounted.");
        //let hola: number = 2;
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
