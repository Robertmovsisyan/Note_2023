<!--<template>-->
<!--    <div>-->


<!--        <p v-for="product in products">-->
<!--                <a :href="'/Note_update/?id=' + product.id">{{ product.user_name }}</a>-->
<!--        </p>-->


<!--        <form action="/create_notes" method="post" enctype="multipart/form-data">-->
<!--            <input type="hidden" name="_token" :value="csrf">-->
<!--           date <input type="date" name="date" ><br><br>-->
<!--            houres<input type="text" name="houres" ><br><br>-->
<!--            minute<input type="text" name="minute" ><br><br>-->
<!--           user_name <input type="text" name="user_name" ><br><br>-->
<!--            user_phone<input type="text" name="user_phone" ><br><br>-->
<!--           user_img <input type="file" name="user_img" ><br><br>-->
<!--           work_type <input type="text" name="work_type" ><br><br>-->
<!--            description<input type="text" name="description" ><br><br>-->
<!--      <input type="hidden" name="user_id" >-->

<!--            <input type="submit" name="submit" >-->



<!--        </form>-->


<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--import axios from 'axios';-->

<!--export default {-->
<!--    data() {-->
<!--        return {-->
<!--            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),-->
<!--           products:[],-->
<!--            loading: true,-->
<!--        };-->
<!--    },-->
<!--    mounted() {-->
<!--        this.fetchProducts('/api/getProducts'); // Assuming you have an endpoint to get all products-->

<!--    },-->
<!--    methods: {-->
<!--        fetchProducts(url) {-->
<!--            axios.get(url)-->
<!--                .then(response => {-->
<!--                    this.products = response.data.products;-->
<!--                    this.loading = false;-->
<!--                })-->
<!--                .catch(error => {-->
<!--                    console.error('Error fetching products:', error);-->
<!--                });-->
<!--        },-->

<!--    },-->

<!--}-->
<!--</script>-->
