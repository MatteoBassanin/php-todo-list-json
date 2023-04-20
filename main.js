const { createApp } = Vue

createApp({
    data() {
        return {
            arrayList: [],
            addToDo: "",
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

        addToDoList() {
            const data = {
                newTodo: this.addToDo,
            };

            axios.post("server.php", data,
                {
                    headers: { "Content-Type": "multipart/form-data" }
                }
            ).then(response => {
                this.arrayList = response.data;
                this.addToDo = "";
            });
        }
    },
    mounted() {
        this.readingList()
    }
}).mount('#app')