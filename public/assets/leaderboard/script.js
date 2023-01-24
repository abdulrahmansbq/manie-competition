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

new Vue({
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
        },
        {
          name: "Clarence",
          photo: "cat-2",
          points: 0
        },
        {
          name: "Polly",
          photo: "cat-3",
          points: 0
        },
        {
          name: "Baxter",
          photo: "cat-4",
          points: 0
        },
        {
          name: "Jules",
          photo: "cat-5",
          points: 0
        },
        {
          name: "Lani",
          photo: "cat-6",
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
  //
  // methods: {
  //   reNew() {
  //     let index = parseInt(Math.random()*10);
  //     this.cats[index > 5 ? 0 : index].points += 50;
  //     axios.get("https://randomuser.me/api/?results=5").then(
  //         (response) =>
  //             // console.log(response)
  //             (this.data = response.data.results)
  //     )
  //   }
  // },
  //
  // mounted() {
  //   this.reNew()
  // },
  // created(){
  //   this.interval = setInterval(() =>{
  //     this.reNew()},3000)
  // },
  // destroyed(){
  //   clearInterval(this.interval)
  // },
  watch: {
    leadCat(newValue, oldValue) {
      if (newValue[1] !== oldValue[1]) {
        this.newLeader = newValue[1];
      } else {
        this.newLeader = "";
      }
    }
  }
});
