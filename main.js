const { createApp } = Vue

createApp({
    data() {
        return {
            arrayList: []
        }
    },
    methods: {
        readingList() {
            axios.get("server.php")
                .then(response => {
                    this.arrayList = response.data;
                    console.log(this.arrayList);
                })
        },
    },
    mounted() {
        this.readingList()
    }
}).mount('#app')