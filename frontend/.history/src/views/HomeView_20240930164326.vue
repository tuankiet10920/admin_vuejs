<script setup>
import TableCustom from "../components/table.vue";
import MovieData from "../assets/data/movies.json";
import { getData } from "@/api/connectApi";

const headtb = [
  'stt',
  'name',
  'author',
  'actor',
  'summary',
  'action'
];

const movies = ref(MovieData);

// ... rest of your code
</script>

<template>
  <div class="template-box">
    <div class="dashboard">
      <h1>Dashboard</h1>
      <div class="all-movies">
        <h2>All Movies</h2>
        <TableCustom class="table-all-movies" :headtb="headtb" :bodytb="movies" />
      </div>
    </div>
  </div>
</template>
<!-- <script>
import TableCustom from "../components/table.vue";
import MovieData from "../assets/data/movies.json";
import { getData } from "@/api/connectApi";
export default {
  data() {
    return {
      headtb: [
        'stt',
        'name',
        'author',
        'actor',
        'summary',
        'action'
      ],
      movies: MovieData
    };
  },
  components: {
    TableCustom,
  }
};
</script> -->
<style scoped>
.template-box {
  width: 100%;
  display: flex;
  justify-content: center;
}

.dashboard {
  width: 90%;
}

.box {
  background: #000;
  width: 100px;
  height: 150px;
  margin-bottom: 10px;
}

.all-movies {
  background: #fff;
  width: 100%;
}

.dashboard h1 {
  padding: 30px 0px;
  font-weight: 300;
}

.all-movies h2 {
  font-weight: 300;
  margin-bottom: 20px;
}
</style>
