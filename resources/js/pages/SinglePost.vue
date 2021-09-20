<template>
  <div class="container">
    <div class="card">
      <div class="card-header">
        {{post.title}}
      </div>
      <div class="card-body">
        <p>{{post.description}}</p>
        <div class="row">
          <div class="col" v-if="post.post_category">Categoria: 
            <span class="badge bg-success text-white mx-1">{{post.post_category.name}}</span>
          </div>
          <div class="col" v-if="post.tags">Tags:
            <span class="badge bg-success text-white mx-1" v-for="(tag,i) in post.tags" :key="i">{{tag.name}}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SinglePost',
  data(){
    return{
      url : 'http://127.0.0.1:8000/api/posts/',
      post: []
    }
  },
  mounted(){
    axios.get(this.url + this.$route.params.slug)
          .then(response => {
            // console.log(response.data.results);
            this.post = response.data.results;
            console.log(response.data.results);
          })
          .catch();
  }
}
</script>

<style lang="scss" scoped>

</style>