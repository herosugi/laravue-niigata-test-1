<template lang="html">
  <div class="card">
    <div class="card-header">{{item.title}}</div>
    <div class="card-body">{{item.content}}</div>
    <div class="card-footer"><time>{{item.date}}</time></div>
  </div>
</template>

<script>
export default {
  props: ['id'],
  data: function() {
    return {
      item: {
        title : '',
        content: '',
        date: '',
      }
    }
  },
  watch: {
    id: function() {
      axios.get('/api/entry/' + this.id)
      .then((res) => {
        this.item = res.data.data
      });
    }
  }
}
</script>

<style lang="scss" scoped>
  .card-body {
    white-space: pre-wrap;
  }


</style>
