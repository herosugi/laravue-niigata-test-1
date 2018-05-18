<template lang="html">
  <div class="container">
    <div class="row">
      <ul class="list-group">
        <li v-for="(item, key) in items" :key=key class="list-group-item">{{item.title}} <time>{{item.date}}</time></li>
      </ul>
    </div>
    <div class="row">
      <myform @save="view"></myform>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      items: null,
    }
  },
  mounted: function() {
    this.view();
  },
  methods: {
    view: function() {
      axios.get('/api/entry')
      .then((res) => {
        this.items = res.data.data;
      });
    }
  }
}
</script>

<style lang="scss" scoped>
time {
  font-size:0.8em;
  &::before {
    content:"( ";
  }
  &::after {
    content: " )";
  }
}
</style>
