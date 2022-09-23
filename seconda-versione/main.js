const app = new Vue({
    el: '#app',
    data: {
        disks: [],
        genres: [],
        genreSelected: '',
    },
    methods: {
        fetchDisks() {
            axios.get('./api/dischi/index.php', {
                params: {
                    genre: this.genreSelected
                }
            })
                .then(res => {
                    this.disks = res.data.response;
                    this.disks.forEach(disk => {
                        !this.genres.includes(disk.genre) ? this.genres.push(disk.genre) : '';
                    });
                    this.genres.sort((genre1, genre2) => {
                        const gen1 = genre1.toLowerCase();
                        const gen2 = genre2.toLowerCase();
                        return gen1 < gen2 ? -1 : gen1 > gen2 ? 1 : 0;
                    })
                })
        }
    },
    created() {
        this.fetchDisks()
    },
})