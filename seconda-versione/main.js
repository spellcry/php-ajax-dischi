const app = new Vue({
    el: '#app',
    data: {
        disks: [],
    },
    methods: {
        fetchDisks() {
            axios.get('./api/dischi/')
                .then(res => {
                    this.disks = res.data.response;
                })
        }
    },
    created() {
        this.fetchDisks()
    },
})