
<template id="cat-list-item">
    <li class="cat-item">
        <div class="cat-item__photo">
            <div class="ranking text-dark" :style="{ backgroundColor: colorOrder }">{{ rankOrder }}</div>
            <img :src="`https://www.my.gov.sa/wps/wcm/connect/53287931-241c-4d61-9c28-cc89c2656ef3/logo.png?MOD=AJPERES&CACHEID=ROOTWORKSPACE-53287931-241c-4d61-9c28-cc89c2656ef3-oluwMpl`">
        </div>
        <div class="cat-item__info">
            <h4>{{ cat.name }}</h4>
        </div>
        <div class="cat-item__points text-center">
            <img src="https://www.sicontis.com/codepen/cpc-rising/chevron.svg" @click="pointIncrement">
            <p class="text-light mb-0">{{ cat.points }}</p>
            <img src="https://www.sicontis.com/codepen/cpc-rising/chevron.svg" @click="pointDecrement">
        </div>

    </li>
</template>

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
