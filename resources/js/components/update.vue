<!--<template>-->
<!--    <div>-->
<!--{{datas}}-->

<!--        <form action="/create_notes" method="post" enctype="multipart/form-data">-->
<!--            <input type="hidden" name="_token" :value="csrf">-->
<!--            date <input type="date" name="date" ><br><br>-->
<!--            houres<input type="text" name="houres" ><br><br>-->
<!--            minute<input type="text" name="minute" ><br><br>-->
<!--            user_name <input type="text" name="user_name" ><br><br>-->
<!--            user_phone<input type="text" name="user_phone" ><br><br>-->
<!--            user_img <input type="file" name="user_img" ><br><br>-->
<!--            work_type <input type="text" name="work_type" ><br><br>-->
<!--            description<input type="text" name="description" ><br><br>-->
<!--            <input type="hidden" name="user_id" >-->

<!--            <input type="submit" name="update" >-->



<!--        </form>-->


<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--import axios from 'axios';-->

<!--export default {-->

<!--    data() {-->
<!--        return {-->
<!--            id: this.$route.params.id,-->
<!--            datas:[],-->
<!--            loading: true,-->
<!--            xy:this,-->
<!--        };-->
<!--    },-->
<!--    mounted() {-->

<!--        this.fetchdata(`/api/getid/`,{ params: { id: 1 }});-->
<!--    },-->
<!--    methods: {-->
<!--        fetchdata(url) {-->
<!--            axios.get(url)-->
<!--                .then(response => {-->
<!--                    this.datas = response.data.datas;-->
<!--                    this.loading = false;-->

<!--                })-->
<!--                .catch(error => {-->
<!--                    console.error('Error fetching products:', error);-->
<!--                });-->
<!--        },-->

<!--    },-->

<!--}-->
<!--</script>-->
