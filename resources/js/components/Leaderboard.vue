

<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script>
    const CatListItem = Vue.component("cat-list-item", {
        template: "#cat-list-item",
        props: ["cat", "rank"],
        data() {
            return {
                colors: ["#d6cd1e", "#bbbbbb", "#d6a21e"]
            };
        },
        computed: {
            rankOrder: function () {
                return this.rank + 1;
            },
            colorOrder: function () {
                return this.colors[this.rank];
            }
        },
        methods: {
            pointIncrement: function () {
                this.cat.points++;
            },
            pointDecrement: function () {
                this.cat.points--;
            }
        }
    });

    export default {
        el: "#app",

        components: {
            CatListItem
        },

        data() {
            return {
                cats: [
                    {
                        name: "Milo",
                        photo: "cat-1",
                        points: 0
                    }
                ],
                catRank: [
                    { r: 2, c: "#d6a21e" },
                    { r: 0, c: "#d6cd1e" },
                    { r: 1, c: "#bbbbbb" }
                ],
                newLeader: ""
            };
        },

        computed: {
            allCats: function () {
                return [...this.cats].sort((a, b) => b.points - a.points);
            },
            topThreeCats: function () {
                let topThree = [...this.cats]
                    .sort((a, b) => b.points - a.points)
                    .slice(0, 3);
                return [topThree[2], topThree[0], topThree[1]];
            },
            leadCat() {
                return this.topThreeCats.map((cat) => cat.name);
            }
        },

        watch: {
            leadCat(newValue, oldValue) {
                if (newValue[1] !== oldValue[1]) {
                    this.newLeader = newValue[1];
                } else {
                    this.newLeader = "";
                }
            }
        }
    }

</script>
